<?php 

// $host = "mysql.idhostinger.com"; //Konfigurasi Host
// $user = "u608431999_aura"; //Konfigurasi User
// $pass = "123456"; //Konfigurasi Password Server
// $db = "u608431999_movie"; // //Konfigurasi Nama DB


$host="localhost";
$user="root";
$pass="";
$db="penjualanFilm";

$koneksi = new mysqli($host,$user,$pass,$db); //Koneksi ke db -> mysql

?>