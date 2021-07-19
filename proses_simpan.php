<?php

include "koneksi.php";

$nama = $_POST['nama'];
$negara = $_POST['negara'];
$waktu = $_POST['waktu'];
$ciri = $_POST['ciri'];

$sql = $pdo->prepare("INSERT INTO data(nama, negara, waktu, ciri) VALUES(:nama,:negara,:waktu,:ciri)");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':negara', $negara);
$sql->bindParam(':waktu', $waktu);
$sql->bindParam(':ciri', $ciri);
$sql->execute(); 
if($sql){ 
  :
  header("location: data.php"); 
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
