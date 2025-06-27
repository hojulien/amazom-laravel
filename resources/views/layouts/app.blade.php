<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/style.css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{route('products.index')}}" class="no-link"><h1>Amazom</h1></a>
            <div>
                <a href="{{route('auth.login')}}">Se connecter</a>
                <a href="{{route('cart.index')}}"><img src="/images/icons/shopping-cart.png" alt="Panier" width="32"></a>
            </div>
        </nav>
    </header>
    <main>
        <!-- set global session in layouts instead of individual pages -->
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="error">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>