<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
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
	<br>
	<form method="post" action="formproses.php">
    	Nama : <input type="text" name="nama" /><br />
    	Alamat : <input type="text" name="alamat" /><br />
    	Telepon : <input type="text" name="telp" /><br />
    	<input type="submit" value="Submit" />
  	</form>
</body>
</html>