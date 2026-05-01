Berikut adalah file **README.md** untuk proyek kamu. Isinya fokus pada teknis dan langkah instalasi tanpa gaya bahasa asisten AI.

---

# Latihan CRUD PHP & MySQL - Siti Salwa

Proyek ini adalah implementasi dasar pengolahan data (Create & Read) menggunakan PHP dan database MySQL. Dibuat sebagai bagian dari praktikum mata kuliah Teknik Informatika.

## Fitur Utama
*   Input data nama dan email melalui form.
*   Penyimpanan data ke database MySQL.
*   Tampilan daftar kunjungan dalam bentuk tabel secara real-time.
*   Validasi form (Nama dan Email tidak boleh kosong).
*   Notifikasi sukses menggunakan PHP Session.

## Prasyarat
*   Web Server (XAMPP / Laragon).
*   PHP versi 7.4 atau yang terbaru.
*   Database MySQL.

## Langkah Instalasi

### 1. Persiapan Database
Buat database baru melalui phpMyAdmin dengan nama `belajar`, kemudian jalankan query SQL berikut untuk membuat tabel `users`:

```sql
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);
```

### 2. Konfigurasi Koneksi
Pastikan file `koneksi.php` sudah sesuai dengan pengaturan server lokal kamu:
```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "belajar";
```

### 3. Penempatan File
1. Salin semua file proyek ke dalam folder server:
   - Jika menggunakan XAMPP: `C:/xampp/htdocs/nama_folder/`
   - Jika menggunakan Laragon: `C:/laragon/www/nama_folder/`
2. Masukkan file gambar `CHATGPT Image Apr 15, 2026, 07_22_56 AM.png` ke dalam folder yang sama agar tampilan header muncul.

### 4. Cara Menjalankan
Buka browser dan akses alamat berikut:
`http://localhost/nama_folder/index.php`

## Struktur Proyek
*   `index.php` : Halaman utama, pemrosesan logika simpan, dan tampilan tabel.
*   `koneksi.php` : Skrip penghubung antara PHP dan database MySQL.
*   `README.md` : Panduan penggunaan dan dokumentasi proyek.

---
**Teknik Informatika - 2026**