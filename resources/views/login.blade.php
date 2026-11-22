@extends('layouts.app')

@section('title', "Sign In | Ramsey's Supremacy")

@section('content')
<section class="section">
    <div class="container narrow">
        <div class="panel">
            <p class="eyebrow">Private Portal</p>
            <h1>Guest & Concierge Sign In</h1>
            <p>Access your account to monitor active dining orders or manage hotel hospitality operations.</p>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="guest@example.com" 
                        required 
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        placeholder="Enter your password" 
                        required
                    >
                </div>

                <button class="btn btn-gold" type="submit">Sign In</button>
            </form>
        </div>
    </div>
</section>
@endsection