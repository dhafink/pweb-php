# pweb-php
Tugas 8 PWEB PHP


Formulir Pendaftaran Siswa Baru
LINK WEB LOCALHOST: http://localhost/Tugas8/index.html
LINK REPO GITHUB: https://github.com/username/repo-nama

📄 Deskripsi
Aplikasi web sederhana untuk pendaftaran siswa baru. Data yang diinput melalui form disimpan ke dalam file .txt menggunakan PHP. Proyek ini dibuat untuk keperluan pembelajaran dasar HTML, CSS, dan PHP.

🚀 Fitur Utama
✅ Formulir Interaktif: Input data seperti nama, alamat, jenis kelamin, agama, sekolah asal, email, dan no. telepon.

💾 Penyimpanan File TXT: Data siswa disimpan ke file data_pendaftar.txt.

📤 Konfirmasi Pendaftaran: Setelah data berhasil dikirim, pengguna mendapat notifikasi bahwa pendaftaran berhasil.

🎨 Desain Responsif: Menggunakan CSS sederhana untuk tampilan yang bersih dan terstruktur.

📁 Struktur Folder
bash
Copy
Edit
/
├── index.html             # Halaman utama form pendaftaran siswa
├── style.css              # Styling halaman form
├── simpan.php             # Proses penyimpanan data ke file txt
├── data_pendaftar.txt     # File untuk menyimpan data hasil input
⚙️ Cara Menjalankan Proyek
Unduh & Install XAMPP (https://www.apachefriends.org/index.html)

Pindahkan folder proyek ke direktori: htdocs/ (misalnya: C:/xampp/htdocs/Tugas8)

Jalankan Apache dari XAMPP Control Panel.

Buka browser dan akses:

bash
Copy
Edit
http://localhost/Tugas8/index.html
Isi form dan klik Daftar. Data akan tersimpan di data_pendaftar.txt.

🖥️ Preview
📋 Formulir Pendaftaran:
![image](https://github.com/user-attachments/assets/08de23e9-8b91-40f2-b89f-7bf6d9cb6460)
![image](https://github.com/user-attachments/assets/6ef6555d-1a1a-44de-85cd-95080ea3ceee)



📁 Hasil Tersimpan di File: data_siswa.txt
![image](https://github.com/user-attachments/assets/e1263e1c-1639-4d55-8bce-9c470d1cc8c4)



🧩 Penjelasan File
index.html — Halaman Formulir
Menampilkan input data siswa baru, seperti nama, alamat, jenis kelamin, agama, sekolah asal, email, dan no telepon.

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulir Pendaftaran Siswa Baru</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="background">
    <ul class="bubbles">
      <li></li><li></li><li></li><li></li><li></li>
      <li></li><li></li><li></li><li></li><li></li>
    </ul>
  </div>

  <div class="container">
    <h1>Formulir Pendaftaran Siswa Baru</h1>
    <p>Silakan lengkapi informasi berikut secara benar.</p>
    <form action="proses_simpan.php" method="POST">
      <label>Nama Lengkap</label>
      <input type="text" name="nama" placeholder="Contoh: Siti Aminah" required>

      <label>Alamat Rumah</label>
      <textarea name="alamat" placeholder="Contoh: Jl. Kenanga No. 45, Surabaya" required></textarea>

      <label>Jenis Kelamin</label>
      <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki</label>
      <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>

      <label>Agama</label>
      <select name="agama" required>
        <option value="">-- Pilih Agama --</option>
        <option>Islam</option>
        <option>Kristen</option>
        <option>Katolik</option>
        <option>Hindu</option>
        <option>Buddha</option>
        <option>Konghucu</option>
      </select>

      <label>Asal Sekolah</label>
      <input type="text" name="asal_sekolah" placeholder="Contoh: SMPN 2 Bandung" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>No. Telepon</label>
      <input type="tel" name="no_telepon" required>

      <button type="submit">Kirim Pendaftaran</button>
    </form>
  </div>
</body>
</html>

...
$file = fopen("data_pendaftar.txt", "a");
fwrite($file, "Nama: $nama | Alamat: $alamat ...");
📦 Catatan
Format file .txt disusun dengan separator “|” agar rapi dan mudah dibaca.

Tidak menggunakan database (akan digunakan di Tugas 9).
