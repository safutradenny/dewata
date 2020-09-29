<?php 

require '../root.php';

session_start();

$img = imagecreatetruecolor(100, 40);

$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 217, 102, 20);

imagefill($img, 0, 0, $black);
imagettftext($img, 12, 0, 10, 25, $white, 
dirBase."assets/font/standard.ttf", $_SESSION['captcha']);

header("Content-type: image/png");
imagepng($img);
imagedestroy($img);