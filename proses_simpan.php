<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];

    // Format string CSV
    $data = "\"$nama\",\"$alamat\",\"$jenis_kelamin\",\"$agama\",\"$asal_sekolah\",\"$email\",\"$no_telepon\"\n";
    
    // Simpan ke file
    $file = 'data_siswa.txt';
    $handle = fopen($file, 'a');
    $berhasil = false;
    if ($handle) {
        fwrite($handle, $data);
        fclose($handle);
        $berhasil = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Konfirmasi Pendaftaran</title>
  <style>
    body {
      background: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .message-box {
      background: white;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    h1 {
      color: #4CAF50;
    }

    .detail {
      margin-top: 20px;
      text-align: left;
    }

    .detail p {
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <div class="message-box">
    <?php if ($berhasil): ?>
      <h1>✅ Pendaftaran Berhasil!</h1>
      <p>Data berikut telah disimpan:</p>
      <div class="detail">
        <p><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>No. Telepon:</strong> <?= htmlspecialchars($no_telepon) ?></p>
        <p><strong>Asal Sekolah:</strong> <?= htmlspecialchars($asal_sekolah) ?></p>
      </div>
    <?php else: ?>
      <h1 style="color: red;">❌ Gagal Menyimpan Data</h1>
      <p>Silakan coba lagi nanti.</p>
    <?php endif; ?>
  </div>
</body>
</html>
