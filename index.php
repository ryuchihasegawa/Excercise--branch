<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    echo "<h2>Data yang Anda masukkan:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Nama anda</title>
</head>
<body>
    <h2>Masukkan Data Anda</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>