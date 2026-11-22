@extends('layouts.app')

@section('title', "Checkout | Ramsey's Supremacy")

@section('content')
<section class="page-header">
    <div class="container">
        <p class="eyebrow">Private Order Confirmation</p>
        <h1>Finalize Your Dining Order</h1>
        <p>Review your selected dishes below and provide your guest details to complete your reservation.</p>
    </div>
</section>

<section class="section">
    <div class="container checkout-grid">
        <!-- Order Summary Panel -->
        <div class="panel">
            <h2>Your Selection</h2>

            @foreach($cart as $item)
                <div class="summary-row">
                    <div>
                        <strong>{{ $item['product']->name }}</strong>
                        <small>
                            {{ $item['quantity'] }} × 
                            KSh {{ number_format($item['product']->price, 2) }}
                        </small>
                    </div>
                    <span>KSh {{ number_format($item['line_total'], 2) }}</span>
                </div>
            @endforeach

            <div class="summary-total">
                <span>Estimated Total</span>
                <strong>KSh {{ number_format($estimatedTotal, 2) }}</strong>
            </div>
        </div>

        <!-- Guest Details Form Panel -->
        <div class="panel">
            <h2>Guest & Service Details</h2>

            <form method="POST" action="{{ route('orders.store') }}">
                @csrf

                @foreach($cart as $item)
                    <input 
                        type="hidden" 
                        name="quantities[{{ $item['product']->id }}]" 
                        value="{{ $item['quantity'] }}"
                    >
                @endforeach

                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Neema Kendi" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="guest@example.com" required>
                    <small class="form-hint">Please provide a new email address not previously registered in our system.</small>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input id="phone" type="text" name="phone" value="{{ old('phone') }}" placeholder="e.g. 0712 345 678" required>
                </div>

                <div class="form-group">
                    <label for="order_type">Dining Service Preference</label>
                    <select id="order_type" name="order_type" required>
                        <option value="pickup" @selected(old('order_type') === 'pickup')>Private Pickup</option>
                        <option value="delivery" @selected(old('order_type') === 'delivery')>Chauffeured Delivery</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="delivery_address">Suite Number or Delivery Address</label>
                    <input 
                        id="delivery_address" 
                        type="text" 
                        name="delivery_address" 
                        value="{{ old('delivery_address') }}" 
                        placeholder="Required for delivery orders"
                    >
                </div>

                <div class="form-group">
                    <label for="special_note">Culinary & Dietary Preferences</label>
                    <textarea 
                        id="special_note" 
                        name="special_note" 
                        rows="4" 
                        placeholder="Allergies, plating requests, or special notes for our chef (Optional)"
                    >{{ old('special_note') }}</textarea>
                </div>

                <button class="btn btn-gold" type="submit">Confirm & Place Order</button>
            </form>
        </div>
    </div>
</section>

@endsection