<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<!-- AZZA ELGENDY Orders Page APRIL 25,2018-->
<head>
	<title>Order Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="main.js"></script>
    
    
</head>
<body>
		<div class="container">
        <div class="main">
    <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		 {
			$name="";
			$name=$_POST['fName'];
			$_SESSION ["name"] = $name;
		 }
    ?>
	<h1>ConeSoft<h1><br>
	<h2> <a href="thankyou.php" >Go to Thank You Page  </a></h2>
	<a href = "javascript:history.back()">Go to log in page </a>
	
	</div>
	</div>
</body>
