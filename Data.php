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
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="sorting.php">Data</a></li>
        <li><a href="data.php">Edit</a></li>
        <li><a href="form_simpan.php">Add</a></li>
        <li><a href="login.php">LOGOUT</a></li>
      </ul>
  </nav>
</head>
<body>
  <h1>Data VIP</h1>
  <table border="1" width="100%">
  <tr>
    <th>Nama</th>
    <th>Negara</th>
    <th>Waktu</th>
    <th>Ciri</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  // Include / load file koneksi.php
  include "koneksi.php";

  $sql = $pdo->prepare("SELECT * FROM data");
  $sql->execute(); 
  while($data = $sql->fetch()){ 
    echo "<tr>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['negara']."</td>";
    echo "<td>".$data['waktu']."</td>";
    echo "<td>".$data['ciri']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Edit</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Delete</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>
