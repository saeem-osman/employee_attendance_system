

<?php 
	include('functions.php');

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

?>

<?php
include_once('header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.header {
		background: #003366;
	}
	button[name=register_btn] {
		background: #003366;
	}
	</style>
</head>
<body>
	
	

		

    <?php
    include_once('about-me.php');
    ?>
    <br />

    
    <br /><br><br><br><br><br><br>

		
</body>

<?php
include_once('footer.php');
?>

</html>