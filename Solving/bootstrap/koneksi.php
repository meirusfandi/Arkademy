<?php 
	$koneksi = mysqli_connect("localhost", "root", "", "arkademy");

	if (mysqli_connect_errno()) {
		echo "Koneksi gagal : ".mysqli_connect_errno();
	}

?>