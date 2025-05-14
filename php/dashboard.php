<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Cafe Saya</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
<nav>
    <span style="margin-right: 20px;"><a href="dasboard.php">Cafe Saya</a></span>
    <a href="karyawan.php">Karyawan</a>
    <div class="user-menu">
        <span class="username"><?php echo $_SESSION['username']; ?></span>
        <div class="dropdown-content">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</nav>


    </nav>
    <div class="dashboard-content">
        <h1>Selamat datang, <?php echo $_SESSION['username']; ?>!</h1>
    </div>
</body>
</html>