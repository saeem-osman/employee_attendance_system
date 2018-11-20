<?php 
	include('functions.php');

	if (!isLoggedIn()) {
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
</head>
<body>
	
	<?php
    include_once('body.php');
    ?>
</body>
<?php
include_once('footer.php');
?>


</html>