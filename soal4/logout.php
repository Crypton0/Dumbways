<html>
<head>
<title> Logout </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body bgcolor="black">
<?php
session_start();
unset($_SESSION['id']);
echo "<script> location.replace('index.php') </script>";
?>

</body>
</html>