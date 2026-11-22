<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Ramsey's Supremacy | Fine Dining & Online Ordering")</title>
    
    <!-- Google Fonts for Luxury Aesthetic -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Top Navigation Bar -->
    <header class="navbar">
        <div class="container nav-container">
            <a href="{{ url('/') }}" class="brand-logo">
                Ramsey's <span>Supremacy</span>
            </a>

            <nav class="nav-menu">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/menu') }}">Menu</a>

                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ url('/admin/orders') }}">Admin Orders</a>
                    @else
                        <a href="{{ url('/dashboard') }}">My Orders</a>
                    @endif

                    <form action="{{ route('logout') }}" method="POST" class="logout-form">
                        @csrf
                        <button type="submit" class="btn-nav-outline">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-nav-gold">Sign In</a>
                @endauth
            </nav>
        </div>
    </header>

    <!-- Main Content Area -->
    <main class="main-wrapper container">
        
        <!-- Flash Messages & Validation Errors -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <strong>Please correct the following:</strong>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Page Content -->
        @yield('content')

    </main>

    <!-- Luxury Footer -->
    <footer class="footer">
        <div class="container">
            <p class="footer-brand">Ramsey's <span>Supremacy</span></p>
            <p class="footer-tagline">© {{ date('Y') }} Ramsey's Supremacy. Exquisite culinary craftsmanship, delivered seamlessly.</p>
        </div>
    </footer>

</body>
</html>