@extends('layouts.app')

@section('title', "Concierge Orders | Ramsey's Supremacy")

@section('content')
<section class="page-header">
    <div class="container">
        <p class="eyebrow">Hospitality Management</p>
        <h1>Guest Dining Orders</h1>
        <p>Select an order below to inspect full culinary details and update preparation progress.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Order Ref</th>
                        <th>Guest Name</th>
                        <th>Date & Time</th>
                        <th>Service Type</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td><strong>#{{ $order->id }}</strong></td>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
                            <td>{{ ucfirst($order->order_type) }}</td>
                            <td><strong>KSh {{ number_format($order->total_amount, 2) }}</strong></td>
                            <td>
                                <span class="status status-{{ $order->status }}">
                                    {{ ucwords(str_replace('_', ' ', $order->status)) }}
                                </span>
                            </td>
                            <td>
                                <a class="text-link" href="{{ route('admin.orders.show', $order) }}">
                                    Inspect Order
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">No guest dining orders have been placed yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection