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



📁 Hasil Tersimpan di File:



🧩 Penjelasan File
index.html — Halaman Formulir
Menampilkan input data siswa baru, seperti nama, alamat, jenis kelamin, agama, sekolah asal, email, dan no telepon.

html
Copy
Edit
<form action="simpan.php" method="POST">
  <input type="text" name="nama" required>
  ...
</form>
simpan.php — Proses Penyimpanan
Memproses data dari form dan menyimpan ke file .txt:

php
Copy
Edit
$nama = $_POST['nama'];
...
$file = fopen("data_pendaftar.txt", "a");
fwrite($file, "Nama: $nama | Alamat: $alamat ...");
📦 Catatan
Format file .txt disusun dengan separator “|” agar rapi dan mudah dibaca.

Tidak menggunakan database (akan digunakan di Tugas 9).
