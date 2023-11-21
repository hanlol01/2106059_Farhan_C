<?php

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "pendaftaran_siswa2";


$koneksi = mysqli_connect($host, $username, $password, $database);


if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
