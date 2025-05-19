<?php
session_start();
$input = $_POST['verif_code'];

if ($input == $_SESSION['code']) {
  echo "<h2>Verifikasi Berhasil 🎉</h2><p>Silakan lanjut untuk reset password.</p>";
  // Redirect ke halaman reset password
} else {
  echo "<h2>Kode Salah ❌</h2><p>Silakan coba lagi.</p>";
}
?>
