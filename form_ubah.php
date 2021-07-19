<html>
<head>
  <title></title>
</head>
<body>
  <h1>Ubah Data VIP</h1>
  <?php
  // Load file koneksi.php
  include "koneksi.php";
  // Ambil data ID yang dik
  $id = $_GET['id'];
  // Query untuk menampilka
  $sql = $pdo->prepare("SELECT * FROM data WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
      </tr>
      <tr>
        <td>Negara</td>
        <td><input type="text" name="negara" value="<?php echo $data['negara']; ?>"></td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td><input type="text" name="waktu" value="<?php echo $data['waktu']; ?>"></td>
      </tr>
      <tr>
        <td>Ciri</td>
        <td><textarea name="ciri"><?php echo $data['ciri']; ?></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="data.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>
