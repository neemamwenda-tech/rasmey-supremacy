@extends('layouts.app')

@section('title', "Ramsey's Supremacy | Fine Dining & Seamless Ordering")

@section('content')

    <!-- Luxury Hero & How It Works Split Section -->
    <section class="hero-luxury">
        <div class="hero-left">
            <span class="luxury-eyebrow">Exquisite Dining. Effortless Ordering.</span>
            <h1>Savor world-class culinary artistry without the wait.</h1>
            <p class="hero-lead">
                Explore our curated menu, select your preferred dishes, place your order, and follow its preparation in real time.
            </p>

            <div class="hero-cta-group">
                <a href="{{ url('/menu') }}" class="btn-gold">Explore Menu</a>
                <a href="{{ route('login') }}" class="btn-outline-light">Guest Sign In</a>
            </div>
        </div>

        <div class="hero-right card-glass">
            <h3>The Ordering Experience</h3>
            <ol class="luxury-steps">
                <li>
                    <span class="step-num">01</span>
                    <span>Select handcrafted dishes from our curated menu.</span>
                </li>
                <li>
                    <span class="step-num">02</span>
                    <span>Specify your desired portions and preferences.</span>
                </li>
                <li>
                    <span class="step-num">03</span>
                    <span>Provide your room or delivery details at checkout.</span>
                </li>
                <li>
                    <span class="step-num">04</span>
                    <span>Receive instant access to track your order live.</span>
                </li>
            </ol>
        </div>
    </section>

    <!-- Brand Promise & Highlights Section -->
    <section class="highlights-section">
        <div class="section-heading">
            <span class="luxury-eyebrow-dark">The Supremacy Standard</span>
            <h2>Ramsey's Supremacy</h2>
            <p>Gourmet dishes prepared fresh to order for private pickup or doorstep delivery.</p>
        </div>

        <div class="highlights-grid">
            <div class="card highlight-card">
                <div class="highlight-accent">✦</div>
                <h3>Artisanal Cuisine</h3>
                <p>Our curated selection features signature main courses, gourmet starters, decadent desserts, and crafted beverages.</p>
            </div>

            <div class="card highlight-card">
                <div class="highlight-accent">✦</div>
                <h3>Pickup or Private Delivery</h3>
                <p>Select the dining service option that best suits your schedule seamlessly during checkout.</p>
            </div>

            <div class="card highlight-card">
                <div class="highlight-accent">✦</div>
                <h3>Live Order Concierge</h3>
                <p>Use the guest account created at checkout to monitor every stage of your meal's preparation.</p>
            </div>
        </div>
    </section>

@endsection