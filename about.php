<?php
include_once('header.php');
?>

<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>



 <section>
    <div class="row clearmargin clearpadding row-image-txt" style="
    background-color:#d4c6c6;padding: 35px">
    
    <div class="col-xs-12 col-sm-6 col-md-6 col-sm-pull-6" style="padding:20px;">
        <h1 style="text-align: center;">Employee Info</h1>
        <hr />
     </div>
     <?php
    include_once('skill.php');

    ?>

</div>

</section>
