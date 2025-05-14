<?php
include 'db.php'; // Mengimpor file db.php untuk koneksi ke database


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cafesaya';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Periksa apakah koneksi ke database berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendefinisikan username dan password yang akan ditambahkan
$username = "admin"; // Username yang diinginkan
$password = password_hash("admin123", PASSWORD_DEFAULT); // Menggunakan password_hash untuk mengamankan password

// Menyiapkan pernyataan SQL untuk menyisipkan data user baru
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Kesalahan dalam mempersiapkan pernyataan SQL: " . $conn->error);
}

$stmt->bind_param("ss", $username, $password);

// Menjalankan pernyataan SQL dan memeriksa apakah eksekusinya berhasil
if ($stmt->execute()) {
    echo "User berhasil ditambahkan.";
} else {
    echo "Terjadi kesalahan: " . $stmt->error;
}

// Menutup statement dan koneksi
$stmt->close();
$conn->close();
?>
