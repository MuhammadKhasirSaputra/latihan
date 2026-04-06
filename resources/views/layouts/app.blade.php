<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manajemen Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #1a1a2e !important; }
        .navbar-brand { color: #fff !important; font-weight: 700; font-size: 1.3rem; }
        .nav-link { color: #ccc !important; font-weight: 500; }
        .nav-link:hover, .nav-link.active { color: #fff !important; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#1a1a2e !important;">
    <div class="container">
        <a class="navbar-brand fw-bold fs-5" href="{{ route('home') }}">📚 Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-bold text-white' : '' }}"
                       href="{{ route('home') }}">🏠 Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('books*') ? 'active fw-bold text-white' : '' }}"
                       href="{{ route('books.index') }}">📖 Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('categories*') ? 'active fw-bold text-white' : '' }}"
                       href="{{ route('categories.index') }}">🗂️ Kategori</a>
                </li>

                @auth
                <li class="nav-item ms-2 d-flex align-items-center">
                    <span class="nav-link text-warning">👤 {{ auth()->user()->name }}</span>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <form action="{{ route('logout') }}" method="POST" class="d-inline m-0">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            🚪 Logout
                        </button>
                    </form>
                </li>
                @endauth

                @guest
                <li class="nav-item d-flex align-items-center ms-2">
                    <a class="nav-link text-warning" href="{{ route('login') }}">🔑 Login</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div>
    @yield('content')
</div>

<footer class="py-4 mt-5" style="background-color:#1a1a2e; color:#aaa;">
    <div class="container text-center">
        <p class="mb-0">&copy; {{ date('Y') }} Perpustakaan. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>