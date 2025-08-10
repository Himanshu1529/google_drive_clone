<?php 
namespace App\Http\Controllers;

use App\Models\ManualPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentApprovalRequest;

class ManualPaymentController extends Controller
{
	public function create(Request $request)
	{
	    return view('payments.manual-form', [
	        'plan' => $request->plan,
	        'amount' => $request->amount
	    ]);
	}

	public function store(Request $request)
	{
	    $request->validate([
	        'plan_name' => 'required|string',
	        'amount' => 'required|numeric',
	        'payment_proof' => 'required|image|max:5120',
	    ]);

	    $user = auth()->user();
	    $proofPath = $request->file('payment_proof')->store("payment-proofs/{$user->id}", 'public');

	    $payment = ManualPayment::create([
	        'user_id' => $user->id,
	        'plan_name' => $request->plan_name,
	        'amount' => $request->amount,
	        'payment_proof' => $proofPath,
	        'status' => 'pending',
	    ]);

	    // Send mail to admin for approval
	    $adminEmail = config('mail.admin_email'); // Add admin email in config/mail.php or .env
	    if ($adminEmail) {
	        Mail::to($adminEmail)->send(new PaymentApprovalRequest($user, $payment));
	    }

	    return redirect()->route('dashboard')->with('success', 'Payment submitted. Awaiting approval.');
	}
}
