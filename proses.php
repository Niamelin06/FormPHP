<?php
session_start();

if (!isset($_SESSION['mahasiswa'])) {
    $_SESSION['mahasiswa'] = array();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $mahasiswa = array(
        'nama' => $_POST['nama'],
        'nim' => $_POST['nim'],
        'email' => $_POST['email'],
        'jurusan' => $_POST['jurusan'],
        'semester' => $_POST['semester'],
        'alamat' => $_POST['alamat'],
        'jenis_kelamin' => $_POST['jenis_kelamin']
    );
    
    $_SESSION['mahasiswa'][] = $mahasiswa;
    header("Location: proses.php?status=success");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa Terdaftar</h2>
        
        <?php
        if (isset($_GET['status']) && $_GET['status'] == 'success') {
            echo '<div class="alert success">Data berhasil disimpan!</div>';
        }
        ?>

        <?php if (empty($_SESSION['mahasiswa'])): ?>
            <p>Belum ada data mahasiswa yang terdaftar.</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                        <th>Semester</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['mahasiswa'] as $index => $mhs): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo htmlspecialchars($mhs['nama']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['nim']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['email']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['jurusan']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['semester']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['alamat']); ?></td>
                        <td><?php echo htmlspecialchars($mhs['jenis_kelamin']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="button-group">
            <a href="form.php" class="btn">Tambah Data Baru</a>
            <a href="index.php" class="btn">Kembali ke Menu Utama</a>
        </div>
    </div>
</body>
</html>