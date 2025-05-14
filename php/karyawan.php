<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include 'db.php'; // Pastikan Anda memiliki file koneksi ke database

// Query untuk mengambil data karyawan
$sql = "SELECT * FROM karyawan";
$result = $conn->query($sql); // Melakukan query ke database
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Karyawan</title>
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
<nav>
    <a href="dasboard.php">Cafe Saya</a>
    <a href="karyawan.php">Karyawan</a>
    <div class="user-menu">
        <span class="username"><?php echo $_SESSION['username']; ?></span>
        <div class="dropdown-content">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    <h2>Daftar Karyawan</h2>

    <!-- Tabel Data Karyawan -->
    <table border="1">
        <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Penjualan</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['nik']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['jabatan']; ?></td>
            <td><?php echo $row['penjualan']; ?></td>
            <td>
                <a href="karyawan.php?edit_id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="karyawan.php?delete_id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus karyawan ini?');">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
<?php else: ?>
    <tr><td colspan="5">Tidak ada data karyawan</td></tr>
<?php endif; 
?>



    </table>

    <!-- Formulir Tambah Karyawan -->
    <h3>Tambah Karyawan Baru</h3>
    <form action="karyawan.php" method="POST">
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="jabatan">Jabatan:</label>
        <select id="jabatan" name="jabatan" required>
            <option value="admin">Admin</option>
            <option value="kasir">Kasir</option>
            <option value="koki">Koki</option>
        </select>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit" name="add_karyawan">Tambah Karyawan</button>
    
</form>
</div>
</body>
</html>
