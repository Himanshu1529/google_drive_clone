<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function reset(Request $request)
	{
	    $request->validate([
	        'email' => 'required|email',
	        'token' => 'required',
	        'password' => 'required|min:6|confirmed',
	    ]);

	    $reset = DB::table('password_resets')
	        ->where('email', $request->email)
	        ->where('token', $request->token)
	        ->first();

	    if (!$reset) {
	        return back()->withErrors(['email' => 'Invalid reset link.']);
	    }

	    $user = User::where('email', $request->email)->first();
	    if (!$user) {
	        return back()->withErrors(['email' => 'User not found.']);
	    }

	    $user->password = Hash::make($request->password);
	    $user->save();

	    DB::table('password_resets')->where('email', $request->email)->delete();

	    return redirect('/login')->with('status', 'Password has been reset!');
	}
}
