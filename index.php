<?php
session_start();

		 
?>
<!DOCTYPE html>
<html>
<!-- AZZA ELGENDY LOG In page APRIL 25,2018-->
<head>
	<title>login page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="main.js"></script>
</head>
<body>
	    <div class="container">
        <div class="main">
			<h1>ConeSoft<h1>
			<form  name "submit" action="orders.php" method="post">
				User Name:<input type="text" name="fName"><br>
				Password: <input type="text" name="psd"></br></br>
				<button id="button" type="submit">Log in</button>
			   
			</form>
		</div>
		</div>
</body>
</html>