<?php
session_start();
include "library.php";// menggukan library
if(isset($_SESSION['id'])){  //jika session sudah ada isinya atau sudah login
  
	if(isset($_GET['id'])){
	//jika ada variabel get['id'], variabel ini dikirim ke halaman ini dengan menggunakan fungsi ?id= yg nantinya akan menempel pada link action.
		$id=$_GET['id'];
	}

	if(empty($_GET['id'])){ // jika tidak ada nilai GET yang dikirim ke halaman ini maka variabel $id nilainya adalah = $_SESSION
		$id=$_SESSION['id'];
	}

	$link=koneksi_db();//buka koneksi database
	//query eksekusi mencari data array
	$query=mysql_fetch_array(mysql_query("select * from user where id='$id'",$link));
	//menyimpan hasil query pada variabel
	$nama = $query['nama'];
	$photos = $query['photo'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HOME | SOSMED GADUNGAN</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>

<?php echo include "header.php";?>
<div class="container">
  <div class="jumbotron"></div>
    <div class="row" style="background-color:#0C9">
    <div class="col-md-2"><!--mulai colmd 2-->
            
	<div class="row">
        <div class="col-md-12">
            <div class="thumbnail">
                <img src="foto/<?php echo $photos;?>" class="thumbnail">
                <div class="caption">
                    <h4><?php echo $nama;?></h4>
                </div>
            </div>
        </div>
<?php include "bagiankiri.php";?>  
	</div>
    </div> <!--akhir colmd 2-->
    
	<div class="col-md-6"> <!--mulai colmd 6-->
    <div class="row">
		<div class="col-md-1"></div>               
	<div class="col-md-9"> <!-- Kode Form Update Status -->           
		<form action="updatestatus.php" method="post"> <!-- form update status -->                                              
			<div class="row">
			<div class="form-group">
				<textarea maxlength="255" cols="40" rows="4" name="update" class="form-control" placeholder="Tulis status.."></textarea>
				<button type="submit" class="btn btn-primary pull-left" value="POST" name="kirim">POST</button>
			</div> 
			</div>                           
		</form>  <!-- end form update status -->
		
<?php
$query1 = mysql_query("SELECT * FROM status JOIN user USING(id) WHERE dihapus = 't' ORDER BY id_user DESC");
// query join antara tabel status dan tabel user
while($row=mysql_fetch_array($query1)){ //kalau array dari hasil query ada nilainya
  $id_user=$row['id_user']; //menyimpan id_user
  $id_us=$row['id'];//menyimpan id yang punya status
  $content=$row['content'];//menyimpan isi status
  $tanggal_status=$row['tanggal_status'];//menyimpan tanggal status
  $nm=$row['nama']; //menyimpan nama pemilik status
  $fot=$row['photo'];//menyimpan foto pemilik status
  
?>
		
		<hr>
		<div class="row" style="background-color:#9F3">
		  <div class="media"><!-- class media sudah disediakan bootstrap lho -->
			<a href="#" class="pull-left"><!-- Sementara href nya kosong dulu,ntar diganti link ke profil-->
			<img src="foto/default.jpg" class="media-object img-rounded" width="50" height="50" alt="Sample Image"></a>
			<div class="media-body"><!-- isi media nama, tanggal, ama status -->
				<h4 class="media-heading"> NAMA USER <small><i>January 10, 2014</i></small></h4>
				<p>ini isi status nya nanti disini. </p>
			</div> <!-- akhir media-body-->
		  </div><!-- akhir media -->
		<div class="row">
			<!--kode komentar disni ntar-->
		</div>
		</div>
<?php
} //tutup while
?>
		
		</div>  <!-- Akhir Kode Form Update Status -->
	
	<div class="col-md-2"></div>                                       
	</div><!--/.STATUS-->
    </div><!--akhir colmd 6-->
    
	<div class="col-md-4"><!--mulai colmd 4-->
	</div><!--akhir colmd 4-->
</div>

<?php  
footer();
?>
</div> <!-- END CONTAINER -->

</body>
</html>

<?php
}else{
	header("Location:index.php");
}
?>
