<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Halaman Register User</h1>
    
    <form action="{{ route('register.submit') }}" method="post">
        @csrf
        <label for="full_name">Nama lengkap:</label><br>
        <input type="text" id="full_name" name="full_name" required><br>

        <label for="email">Email Address:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <label for="gender">Jenis Kelamin:</label><br>
        <select id="gender" name="gender">
            <option value="male">Laki-laki</option>
            <option value="female">Perempuan</option>
            <option value="other">Lainnya</option>
        </select><br>

        <label for="age">Umur:</label><br>
        <input type="number" id="age" name="age" required><br>

        <label for="date_of_birth">Tanggal Lahir:</label><br>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br>

        <label for="address">Alamat:</label><br>
        <textarea id="address" name="address" required></textarea><br>

        <button type="submit">Submit</button>
    </form>

    <p>Sudah punya akun? <a href="{{ route('login') }}">Login Sekarang</a></p>
</body>
</html>