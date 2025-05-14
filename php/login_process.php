<?php
session_start(); // Memulai sesi

include 'db.php'; // Mengimpor koneksi database

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'cafesaya';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah form dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyiapkan pernyataan SQL untuk mengambil user berdasarkan username
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Memeriksa apakah username ditemukan di database
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Jika password benar, buat sesi login
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            // Jika password salah
            echo "Password salah.";
        }
    } else {
        // Jika username tidak ditemukan
        echo "Username tidak ditemukan.";
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>