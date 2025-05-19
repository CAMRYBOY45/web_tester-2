<?php
session_start();
$email = $_POST['email'];
$code = rand(100000, 999999);

$_SESSION['email'] = $email;
$_SESSION['code'] = $code;

// Simulasi email
mail($email, "Kode Verifikasi", "Kode OTP kamu adalah: $code", "From: noreply@yourdomain.com");

header("Location: verify_code.html");
exit;
?>
