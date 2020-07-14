<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];


// menginput data ke database
mysqli_query($koneksi, "insert into wisata values('','$nama','$deskripsi')");

// mengalihkan halaman kembali ke index.php
header("location:wisata.php");
