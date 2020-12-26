<?php
session_start();
include("library.php");
if(empty($_SESSION['id'])){ //fungsi jika session kosong, belum login
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SOSMED GADUNGAN</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
navbarindex(); //memanggil function navbar
modallogin(); //memanggil function modallogin
?>

<div class="container">
        <div class="jumbotron">
            <h2>SOSMED GADUNGAN</h2>
            <p>AWAS... INI SOSMED GADUNGAN</p>
        </div>
		
<?php  
register(); // memanggil form untuk registrasi
footer(); // memanggil footer dari web
?>
</div>

</body>
</html>

<?php
}else{
	header("Location:home.php"); // fungsi jika session sudah login
}
?>