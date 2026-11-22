@extends('layouts.app')

@section('title', "My Orders | Ramsey's Supremacy")

@section('content')
<section class="page-header">
    <div class="container">
        <p class="eyebrow">Private Guest Portal</p>
        <h1>Welcome, {{ auth()->user()->name }}</h1>
        <p>Monitor your active dining requests and review your complete culinary order history.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Order Ref</th>
                        <th>Date & Time</th>
                        <th>Service Type</th>
                        <th>Total Amount</th>
                        <th>Preparation Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orders as $order)
                        <tr>
                            <td><strong>#{{ $order->id }}</strong></td>
                            <td>{{ $order->created_at->format('d M Y, H:i') }}</td>
                            <td>{{ ucfirst($order->order_type) }}</td>
                            <td><strong>KSh {{ number_format($order->total_amount, 2) }}</strong></td>
                            <td>
                                <span class="status status-{{ $order->status }}">
                                    {{ ucwords(str_replace('_', ' ', $order->status)) }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No dining orders have been placed under this guest account yet.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection