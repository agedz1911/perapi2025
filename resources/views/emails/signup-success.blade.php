<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
</head>

<body>
    <h1>Terima Kasih, {{ $user->name }}!</h1>
    <p>Anda telah berhasil mendaftar akun di Pitperapi.</p>
    <p>Berikut adalah detail akun Anda:</p>
    <ul>
        <li>Nama Lengkap: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
    </ul>
    <p>Silakan klik tautan di bawah ini untuk memverifikasi email Anda:</p>

</body>

</html>