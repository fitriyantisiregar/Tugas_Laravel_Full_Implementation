<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman Login Pengguna</h1>
    
    <form action="{{ route('login.submit') }}" method="post">
        @csrf
        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="{{ route('register') }}">Daftar Sekarang</a></p>

    <p>Atau login dengan Google: <!-- Tambahkan tombol login dengan Google sesuai kebutuhan --></p>
</body>
</html>