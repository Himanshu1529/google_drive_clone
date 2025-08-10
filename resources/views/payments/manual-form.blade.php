@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900 px-4">
    <div class="w-full max-w-xs bg-white dark:bg-gray-800 rounded-lg shadow-md p-5">
        <h2 class="text-lg font-semibold text-center text-gray-800 dark:text-white mb-4">
            Complete Your Payment
        </h2>

        <form action="{{ route('manual-payment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="plan_name" value="{{ $plan }}">
            <input type="hidden" name="amount" value="{{ $amount }}">

            <div class="text-center mb-4">
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    <strong>Plan:</strong> {{ $plan }}
                </p>
                <p class="text-sm text-gray-700 dark:text-gray-300">
                    <strong>Amount:</strong> ₹{{ $amount }}
                </p>
            </div>

            <div class="flex justify-center mb-3">
                <img src="{{ asset('public/assets/images/qr-code.jpg') }}" alt="QR Code"
                     class="w-36 h-36 object-contain rounded border border-gray-200">
            </div>

            <p class="text-xs text-center text-gray-500 dark:text-gray-400 mb-4">
                Scan the QR code above to pay via UPI or banking app.
            </p>

            <div class="mb-4">
                <label for="payment_proof" class="block text-xs font-medium text-gray-700 dark:text-gray-300 mb-1">
                    Upload Payment Proof
                </label>
                <input type="file" name="payment_proof" required accept="image/*"
                       class="w-full px-3 py-2 border text-xs rounded-lg text-gray-700 dark:text-white dark:bg-gray-700 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primaryColor">
            </div>

            <button type="submit"
                class="w-full bg-primaryColor hover:bg-primaryColor-dark text-white text-sm font-medium py-2 rounded transition duration-200">
                Submit Payment
            </button>
        </form>
    </div>
</div>
@endsection
