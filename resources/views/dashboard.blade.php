<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Halaman Dashboard User 6</h1>
    <p>Selamat datang, {{ $user->full_name }}!</p>
    
    <h2>Informasi Pengguna:</h2>
    <ul>
        <li><strong>Nama akun:</strong> {{ $user->full_name }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Gender:</strong> {{ $user->gender }}</li>
        <li><strong>Umur:</strong> {{ $user->age }}</li>
        <li><strong>Tanggal Lahir:</strong> {{ $user->date_of_birth }}</li>
        <li><strong>Alamat:</strong> {{ $user->address }}</li>
    </ul>
    
    <form action="{{ route('export.data') }}" method="post">
        @csrf
        <button type="submit">Export Data</button>
    </form>

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>