<?php
// Memanggil koneksi
include 'koneksi.php';
session_start();

$pesan_status = "";

// PROSES SIMPAN DATA (Materi: Form Handling & Database)
if (isset($_POST['tombol_kirim'])) {
    $nama  = $_POST['nama'];
    $email = $_POST['email'];

    if (empty($nama) || empty($email)) {
        $pesan_status = "<span style='color:red;'>Nama dan Email wajib diisi!</span>";
    } else {
        $query = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
        $simpan = mysqli_query($koneksi, $query);

        if ($simpan) {
            $_SESSION['info'] = "Data $nama berhasil tersimpan!";
            header("Location: index.php");
            exit();
        } else {
            $pesan_status = "Gagal simpan: " . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Web Latihan Salwa - Teknik Informatika</title>
    <style>
        body { font-family: sans-serif; margin: 40px; background-color: #f0f8ff; }
        .hero-image { width: 100%; max-width: 800px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); margin-bottom: 20px; }
        .form-box { background: white; padding: 20px; border-radius: 8px; border: 1px solid #ccc; width: 350px; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        .btn-submit { background-color: #28a745; color: white; padding: 10px; border: none; border-radius: 5px; width: 100%; cursor: pointer; margin-top: 10px; font-weight: bold; }
        .btn-submit:hover { background-color: #218838; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: white; }
        th { background-color: #2980b9; color: white; padding: 12px; text-align: left; }
        td { border: 1px solid #ddd; padding: 10px; }
        .success { color: #155724; background-color: #d4edda; padding: 10px; border-radius: 5px; border: 1px solid #c3e6cb; font-weight: bold; width: fit-content; }
    </style>
</head>
<body>

    <!-- MENAMBAHKAN GAMBAR ONE PIECE -->
    <img src="CHATGPT Image Apr 15, 2026, 07_22_56 AM.png" alt="One Piece Crew" class="hero-image">
    <!-- Ganti 'one_piece.jpg' sesuai dengan nama file gambar kamu di folder htdocs/Laragon -->

    <h2>Form Input Data Pengguna</h2>

    <?php if (isset($_SESSION['info'])): ?>
        <p class="success"><?php echo $_SESSION['info']; unset($_SESSION['info']); ?></p>
    <?php endif; ?>

    <?php echo $pesan_status; ?>

    <div class="form-box">
        <form method="POST" action="">
            <label><b>Nama:</b></label><br>
            <input type="text" name="nama" placeholder="Masukkan nama..." style="width: 93%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"><br><br>

            <label><b>Email:</b></label><br>
            <input type="email" name="email" placeholder="Masukkan email..." style="width: 93%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"><br><br>

            <button type="submit" name="tombol_kirim" class="btn-submit">Kirim Data</button>
        </form>
    </div>

    <hr style="margin: 30px 0;">

    <h3 style="color: #2c3e50;">Daftar Kunjungan (Data dari Database)</h3>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $ambil = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id DESC");
            
            if (mysqli_num_rows($ambil) > 0) {
                while($row = mysqli_fetch_assoc($ambil)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3' align='center'>Belum ada data di tabel users.</td></tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

<?php 
mysqli_close($koneksi); 
?>