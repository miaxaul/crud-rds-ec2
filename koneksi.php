<?php
	$user  = 'root';
	$pass = '';
	try {
		// buat koneksi dengan database
		$koneksi = new PDO('mysql:host=localhost;dbname=;',$user,$pass);
		// set error mode
		$koneksi->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}catch (PDOException $e) {
		// tampilkan pesan kesalahan jika koneksi gagal
		print "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
		die();
	}
	
?>