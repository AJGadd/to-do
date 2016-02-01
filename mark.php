<?php

//bring in SQLcon.php file
require_once 'SQLcon.php';

//check if the GET request method has been used
if($_SERVER["REQUEST_METHOD"] == 'GET'){
  
    //create a variable named $id, set it equal to whats stored in the GET array 'item' element.
    $id = $_GET['item'];

    //create an SQL query and store it in variable $markedQuery
    $markedQuery = "UPDATE items
               SET done = 1
               WHERE id = $id ";
             
    //run the query using mysqli_query method, passing it the database connection and query as parameters.store the results in a variable
    $markedResult = mysqli_query($con,$markedQuery);  
   
}


 header("Location:list.php");
 die();

?>

