<?php

include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM data WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  
  header("location: data.php"); 
}else{
  
  echo "Data gagal dihapus. <a href='data.php'>Kembali</a>";
}
?>
