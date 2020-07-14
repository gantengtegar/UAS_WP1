<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];

 
// update data ke database
mysqli_query($koneksi,"update wisata set nama='$nama', deskripsi='$deskripsi' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:wisata.php");
