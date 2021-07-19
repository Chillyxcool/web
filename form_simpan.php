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
        <li><a href="data.php">Data</a></li>
        <li><a href="form_simpan.php">Add</a></li>
        <li><a href="login.php">LOGOUT</a></li>
      </ul>
  </nav>
<body>
    <center>
  <h1>Tambah Data VIP</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Negara</td>
        <td><input type="text" name="negara"></td>
      </tr>
      <tr>
        <td>Waktu</td>
        <td><input type="text" name="waktu"></td>
      </tr>
      <tr>
        <td>Ciri</td>
        <td><textarea name="ciri"></textarea></td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="data.php"><input type="button" value="Batal"></a>
  </form>
   </center>
</body>
</html>
