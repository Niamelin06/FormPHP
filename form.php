<!DOCTYPE html>
<html>
<head>
    <title>Form Pendataan Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Pendataan Mahasiswa</h2>
        
        <form action="proses.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" id="nim" name="nim" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select id="jurusan" name="jurusan" required>
                    <option value="">Pilih Jurusan</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                    <option value="Pendidikan Guru Paud">Pendidikan Guru Paud</option>
                    <option value="Pendidikan Multimedia">Pendidikan Multimedia</option>
                </select>
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" id="semester" name="semester" min="1" max="14" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <div class="radio-group">
                    <input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki" required>
                    <label for="laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="button-group">
                <button type="submit" name="submit">Daftar</button>
                <a href="index.php" class="btn">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>