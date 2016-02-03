<?php
    
    require_once 'SQLcon.php';

    if($_SERVER["REQUEST_METHOD"] == 'GET'){

        $id = $_GET['item'];

        $deleteQuery ="DELETE FROM items
                       WHERE id = $id";

        $deleteQueryResult = mysqli_query($con,$deleteQuery);

    }

    header("Location:list.php");
    die();

?>

