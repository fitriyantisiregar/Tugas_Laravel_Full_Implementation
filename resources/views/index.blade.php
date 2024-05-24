<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Transform Ypur Shopping Experience</h1>

    <div>
        <h2>Halaman Login Pengguna</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>
        <p>Atau login dengan Google:</p>
    </div>

    <div>
        <h2>Halaman Register Pengguna</h2>
        <p>Jika Anda belum memiliki akun, silakan mendaftar di sini:</p>
        <a href="{{ route('register') }}"><button>Daftar Sekarang</button></a>
    </div>
</body>
</html>