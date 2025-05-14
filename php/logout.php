<?php
session_start(); // Memulai session

// Menghapus semua data session
session_unset();
session_destroy();

// Mengarahkan pengguna kembali ke halaman login setelah logout
header("Location: login.php");
exit();
?>