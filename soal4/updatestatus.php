<?php
session_start();
$id = $_SESSION['id']; //memanggil variabel id yg login dari Session
//id yg bisa update status kan yg sudah login
$content = $_POST['update']; //menampung isi status dari textarea
if (empty($_POST['update'])) die ("<script>alert('Anda Belum Mengisikan status');window.location='javascript:history.go(-1)';</script>");
//kalau isi textarea updatestatus kosong maka ga bisa update
  
include "library.php"; // memanggil file library
$link=koneksi_db(); // membuat link koneksi ke database, koneksi_db adalah function yang ada dalam library
$eksekusi=mysql_query("INSERT INTO post_tb VALUE(NULL,'$id','$content',NOW(),'t')",$link) ;
//eksekusi query insert ke dalam database tabel post_tb. Kalau sudah di hosting hati2 dengan nama tabelnya, karena case sensitive

if($eksekusi){  //jika eksekusi berhasil, maka
	echo "<script>location.replace('home.php')</script>"; //redirect ke home.php (refresh halaman)
}else{ //kalau gagal update
	echo "gagal update".mysql_error();  // menampilkan error
}
?>