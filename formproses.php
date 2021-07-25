<!DOCTYPE html>
<html>
<head>
  <title>Form Proses</title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
  <ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="forminput.php">Form</a></li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Dropdown</a>
    <div class="dropdown-content">
      <a href="page1.php">Page 1</a>
      <a href="page2.php">Page 2</a>
      <a href="page3.php">Page 3</a>
    </div>
  </li>
  </ul>
</body>
</html>

<?php
  include "formkoneksi.php";
  $name  = $_REQUEST['nama'];
  $alm  = $_REQUEST['alamat'];
  $telp  = $_REQUEST['telp'];
  $mysqli  = "INSERT INTO form (nama, alamat, telepon) VALUES ('$name', '$alm', '$telp')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "Input berhasil";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>