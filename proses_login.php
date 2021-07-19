<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <nav>
    <div class="logo">Tokyo Olympics</div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
  </nav>

	<title>LOGIN</title>
</head>
</html>
<?php 
include"koneksi2.php";
$user=$_POST['username'];
$pass=$_POST['password'];



$sql=mysqli_query($koneksi, "Select * from admin where username = '$user' and password ='$pass'");

$cek=mysqli_num_rows($sql);

if ($cek >0){
    session_start();
    $_SESSION['username']=$user;
    $_SESSION['password']=$pass;
    echo "<center> Welcome silahkan klik <a href=index.html>halaman utama</a> <b></center>";
}else{
    echo "Username or Password Salah";
    echo "Silahkan <a href=login.php>login</a> Kembali";
}

?>
