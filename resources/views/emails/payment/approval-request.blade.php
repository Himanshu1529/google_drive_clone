@component('mail::message')
# New Payment Awaiting Approval

User **{{ $user->name }}** has submitted a payment for the plan **{{ $payment->plan_name }}**.

**Amount:** ₹{{ $payment->amount }}

Please review the payment proof and approve or reject the payment.

@component('mail::button', ['url' => route('admin.dashboard')])
View Payment Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
