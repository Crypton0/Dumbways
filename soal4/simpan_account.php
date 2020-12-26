<?php
include"library.php";  // memanggil fungsi library
if(isset($_POST['kirim'])){ // kalau di klik daftar maka diproses
  
	$conn=koneksi_db(); //memanggil koneksi database
	//menampung variabel yg di POST dari form registrasi
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$userpass = $_POST['password'];
	  
	// Validasi jika isi registrasi kosong
	if (empty($_POST['nama'])) die ("<script>alert('Anda Belum Mengisikan Nama Anda');window.location='javascript:history.go(-1)';</script>"); 
	if (empty($_POST['email'])) die ("<script>alert('Anda Belum Mengisikan Email');window.location='javascript:history.go(-1)';</script>");
	if (empty($_POST['password'])) die ("<script>alert('Anda Belum Mengisikan Password');window.location='javascript:history.go(-1)';</script>");
	  
	//Proses query insert ke database. variabel yg diisi null nantinya akan di proses ketika user memilih menu edit informasi info user.
	  
	$query="insert into user (id,nama,email,password,photo)values(null,'$nama','$email','$userpass',null)";
	$exe=mysql_query($query, $conn); //eksekusi query insert ke database
	  
	//proses setelah eksekusi
	if ($exe){
		echo "<script>location.replace('daftar_sukses.php')</script>";
	}else{
		echo "<script>alert('daftar Gagal')
		location.replace('index.php')</script>";
	}
  
}else{ // else isset
	unset($_POST['kirim']);
}
?>