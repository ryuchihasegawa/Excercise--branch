<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $telepon = htmlspecialchars($_POST["telepon"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    
    echo "<h2>Data yang Anda masukkan:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Telepon: $telepon</p>";
    echo "<p>Alamat: $alamat</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Sederhana</title>
</head>
<body>
    <h2>Masukkan Data Anda</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" required><br><br>
        
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" required></textarea><br><br>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
