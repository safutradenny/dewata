<?php session_start();
// Memulai session.

$_SESSION['lang'] = $_POST['lang'];
//	Ubah nilai $_POST lang ke $_SESSION lang.

echo 1;