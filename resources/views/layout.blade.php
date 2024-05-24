<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<nav class="navbar">
    <div class="container">
        <a class="navbar-brand" href="#">My App</a>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        </ul>
    </div>
</nav>

@yield('content')

</body>
</html>