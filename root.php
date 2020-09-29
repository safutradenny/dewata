<?php $locUrl = (@$_SERVER["HTTPS"] == 'on') ? "https://" : "http://";
//	Memastikan protokol yang digunakan apakah HTTPS atau HTTP.

$urlBase = $locUrl.$_SERVER["SERVER_NAME"].'/';
//	Membuat jalur akses dari URL dasar.

define('urlBase', $urlBase);
// Konstan URL dasar.

/////////////////////////////////////////////////

$locDir  = dirname(__FILE__);
$dirBase = (DIRECTORY_SEPARATOR == '/') 
? $locDir : str_replace('\\', '/', $locDir);
//	Membuat jalur akses dari direktori dasar.

define('dirBase', $dirBase.'/');
// Konstan direktori dasar.