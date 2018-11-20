<html>
   <head><title></title></head>
    <body>
<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect('localhost', 'id5313122_id5313122_root1', '12345', 'id5313122_id5313122_localhost1');

if(!$conn){
  die("Connection error: " . mysqli_connect_error());
}
        echo "Connected Successfully";

?>
</body>

</html>