<?php session_start();
//	Mulai session.

echo ($_POST['captcha'] != $_SESSION['captcha']) ? 0 : 1;
//	Cek apakah $_POST captcha sama dengan $_SESSION captcha.