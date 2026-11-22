@extends('layouts.app')

@section('title', "Order #{$order->id} | Ramsey's Supremacy")

@section('content')
<section class="page-header">
    <div class="container">
        <p class="eyebrow">Hospitality Management</p>
        <h1>Order Reference #{{ $order->id }}</h1>
        <p>Inspect guest profile details, itemized culinary selections, and update fulfillment status.</p>
    </div>
</section>

<section class="section">
    <div class="container checkout-grid">
        <!-- Guest Details Panel -->
        <div class="panel">
            <h2>Guest & Service Profile</h2>
            <p><strong>Guest Name:</strong> {{ $order->user->name }}</p>
            <p><strong>Email Address:</strong> {{ $order->user->email }}</p>
            <p><strong>Phone Number:</strong> {{ $order->user->phone }}</p>
            <p><strong>Service Preference:</strong> {{ ucfirst($order->order_type) }}</p>
            <p>
                <strong>Suite / Delivery Address:</strong> 
                {{ $order->delivery_address ?: 'Private Pickup' }}
            </p>
            <p>
                <strong>Culinary & Dietary Notes:</strong> 
                {{ $order->special_note ?: 'None specified' }}
            </p>
        </div>

        <!-- Status Update Panel -->
        <div class="panel">
            <h2>Fulfillment Status</h2>
            <p>
                Current Status: 
                <span class="status status-{{ $order->status }}">
                    {{ ucwords(str_replace('_', ' ', $order->status)) }}
                </span>
            </p>

            <form method="POST" action="{{ route('admin.orders.status', $order) }}">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="status">Update Order Stage</label>
                    <select id="status" name="status" required>
                        <option value="pending" @selected($order->status === 'pending')>Pending</option>
                        <option value="packed" @selected($order->status === 'packed')>Packed</option>
                        <option value="on_delivery" @selected($order->status === 'on_delivery')>On Delivery</option>
                        <option value="delivered" @selected($order->status === 'delivered')>Delivered</option>
                    </select>
                </div>

                <button class="btn btn-gold" type="submit">Save Status Update</button>
            </form>
        </div>
    </div>

    <!-- Ordered Items Table -->
    <div class="container section-top-space">
        <div class="panel">
            <h2>Itemized Culinary Selection</h2>

            <div class="table-wrap">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Dish / Beverage</th>
                            <th>Portions</th>
                            <th>Unit Price</th>
                            <th>Line Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $item)
                            <tr>
                                <td><strong>{{ $item->product->name }}</strong></td>
                                <td>{{ $item->quantity }}</td>
                                <td>KSh {{ number_format($item->unit_price, 2) }}</td>
                                <td>
                                    KSh {{ number_format($item->unit_price * $item->quantity, 2) }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Total Order Amount</th>
                            <th>KSh {{ number_format($order->total_amount, 2) }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <p class="back-link-wrap">
                <a class="text-link" href="{{ route('admin.dashboard') }}">← Return to All Guest Orders</a>
            </p>
        </div>
    </div>
</section>
@endsection