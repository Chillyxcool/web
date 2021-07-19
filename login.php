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
<body>    
    <div class="content">
      <div>LOGIN</div>

     <center>
         <table border="1">
             <form method="POST" action="proseslogin.php">
                 <tr><td colspan="2" align="center"> FORM LOGIN </td></tr>
                 <tr><td>User Name<td><input type="text" name="username"></td></tr>
                 <tr><td>Password<td><input type="password" name="password"></td></tr>
                 <tr><td colspan="2" align="right">
                     <input type="submit" value="LOGIN">
                 </td></tr>
             </form>
         </table>
     </center>
     </div>
</body>
</html>
