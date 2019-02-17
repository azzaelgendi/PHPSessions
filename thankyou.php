<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<!-- AZZA ELGENDY Thank You page APRIL 25,2018-->
<head>
	<title>Thank You Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="main.js"></script>
</head>
<body>
		<div class="container">
        <div class="main">
	<h1>ConeSoft<h1><br>
    <?php
        echo "  Thank You  " .$_SESSION ["name"]; 

		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
    ?>
	<h2> <a href="index.php" >Go back to log in page  </a></h2>
	</div>
	</div>
</body>