@extends('layouts.app')

@section('title', "Menu | Rasmey's Supremacy")

@section('content')
<section class="page-header">
    <div class="container">
        <p class="eyebrow">Culinary Selection</p>
        <h1>Curate Your Dining Experience</h1>
        <p>Specify your desired portions below to add signature dishes to your private order.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <form method="POST" action="{{ route('checkout') }}">
            @csrf

            <div class="menu-grid">
                @forelse($products as $product)
                    <article class="menu-card">
                        <div class="menu-card-image">
                            <img 
                                src="{{ $product->image ?? 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?auto=format&fit=crop&w=800&q=80' }}" 
                                alt="{{ $product->name }}"
                                loading="lazy"
                            >
                        </div>

                        <div class="menu-card-body">
                            <span class="badge">{{ $product->category }}</span>
                            <h2>{{ $product->name }}</h2>
                            <p>{{ $product->description }}</p>
                        </div>

                        <div class="menu-card-bottom">
                            <strong class="menu-price">KSh {{ number_format($product->price, 2) }}</strong>

                            <label class="quantity-label">
                                <span>Portions</span>
                                <input 
                                    type="number" 
                                    name="quantities[{{ $product->id }}]" 
                                    value="{{ old('quantities.'.$product->id, 0) }}" 
                                    min="0" 
                                    max="50"
                                    class="quantity-input"
                                >
                            </label>
                        </div>
                    </article>
                @empty
                    <div class="empty-state">
                        <p>Our kitchen is currently preparing today's menu. Please check back shortly.</p>
                    </div>
                @endforelse
            </div>

            @if($products->isNotEmpty())
                <div class="form-actions">
                    <button class="btn btn-gold" type="submit">Proceed to Checkout</button>
                </div>
            @endif
        </form>
    </div>
</section>
@endsection