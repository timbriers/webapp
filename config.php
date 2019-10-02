 
<?php
$server = "localhost";
$user = "root";
$password = "toor";
$name_database = "pxl";
$db = mysqli_connect($server, $user, $password, $name_database);
if( !$db ){
    die("Failed to connect to database: " . mysqli_connect_error());
}
?>
