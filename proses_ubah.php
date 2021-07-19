<?php

include "koneksi.php";

$id = $_GET['id'];

$nama = $_POST['nama'];
$negara = $_POST['negara'];
$waktu = $_POST['waktu'];
$ciri = $_POST['ciri'];

$sql = $pdo->prepare("UPDATE data SET nama=:nama, negara=:negara, waktu=:waktu, ciri=:ciri WHERE id=:id");
$sql->bindParam(':nama', $nama);
$sql->bindParam(':negara', $negara);
$sql->bindParam(':waktu', $waktu);
$sql->bindParam(':ciri', $ciri);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  
  header("location: data.php"); 
}else{
  
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>
