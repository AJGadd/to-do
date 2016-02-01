<?php
    
require_once 'SQLcon.php';
    
    //check if the POST request method has been used
    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        //create variables named $newUser and $newPassword, set it equal to whats stored in the POST array 'newUser' and 'newPassword' elements.
        $newUser = $_POST['newUser'];

        $newPassword = $_POST['newPassword'];

        //create a variable called $alreadyExistsQuery and use it to store an SQL query
        $alreadyExistsQuery = "SELECT user, password
        FROM users
        WHERE user = '$newUser'";

        //run the query using mysqli_query method, passing it the database connection and query as parameters
        $alreadyExistsResponse = mysqli_query($con,$alreadyExistsQuery);

        //create a variable called $newUserQuery and use it to store an SQL query
        $newUserQuery = " INSERT INTO users (user,password)
                        VALUES ('$newUser', '$newPassword')";

        //run the query using mysqli_query method, passing it the database connection and query as parameters.store the results in a variable
        $newUserResponse = mysqli_query($con,$newUserQuery);

        if(mysqli_num_rows($alreadyExistsResponse)==0){
            
            header("Location:list.php");
            
            $_SESSION['user']=$newUser;

            $_SESSION['password']=$newPassword;
           
        }
        else{
            
            echo "Account details already exist";
            

        }
        
    }


?>


