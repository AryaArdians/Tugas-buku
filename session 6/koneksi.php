<?php
	date_default_timezone_set("Asia/jakarta"); //tentatif

	$conn = mysqli_connect("localhost", "root", "", "dbs_buku");
	if (mysqli_connect_errno()){
	echo "Oops! Koneksi database gagal : --> " . mysqli_connect_error();
	}
?>

