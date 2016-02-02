<?php 

session_start();

//$_SESSION['user'] = "Andrew";

define('DB_USER', 'root');
define('DB_PASSWORD','root');
define('DB_HOST','localhost');
define('DB_NAME','todo');


$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$con) {
    
die("Failed to connect to Database". mysqli_connect_error());

}  
    
?>


