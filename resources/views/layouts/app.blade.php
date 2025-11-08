<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'UTS Laravel')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Font Awesome buat icon sosmed --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        body {
            margin: 0;
            background: #f5f5f5;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }
        .navbar {
            background: #1f2933;
            color: #fff;
            padding: 14px 48px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .brand {
            font-weight: 600;
        }
        .navbar a {
            color: #fff;
            margin-left: 18px;
            text-decoration: none;
            font-size: 14px;
        }
        .container {
            max-width: 1150px;
            margin: 0 auto;
            padding: 30px 15px 60px;
        }
        footer {
            text-align: center;
            padding: 16px;
            font-size: 13px;
            color: #555;
        }
    </style>
    @stack('styles')
</head>
<body>
    <nav class="navbar">
        <div class="brand">Made Arya Sutha Wijaya Nim 2301010030</div>
        <div class="menu">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} UTS Pemrograman Web Service - Laravel
    </footer>

    @stack('scripts')
</body>
</html>
