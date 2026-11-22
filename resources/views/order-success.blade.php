@extends('layouts.app')

@section('title', "Order Confirmed | Ramsey's Supremacy")

@section('content')
<section class="section">
    <div class="container narrow">
        <div class="panel success-panel">
            <span class="success-mark">✓</span>
            <p class="eyebrow">Reservation & Order Confirmed</p>
            <h1>Thank you, {{ $user->name }}.</h1>
            <p class="lead-text">Your dining selection has been received by our culinary team and is now being prepared.</p>

            <div class="credential-box">
                <p><strong>Order Reference:</strong> #{{ $order->id }}</p>
                <p><strong>Total Amount:</strong> KSh {{ number_format($order->total_amount, 2) }}</p>
                <p><strong>Guest Login Email:</strong> {{ $user->email }}</p>
                <p><strong>Temporary Access Password:</strong> {{ $plainPassword }}</p>
            </div>

            <p class="warning-text">
                Please record these credentials immediately. For your security, this temporary access password is displayed only once.
            </p>

            <a class="btn btn-gold" href="{{ route('login') }}">Access Guest Portal</a>
        </div>
    </div>
</section>
@endsection