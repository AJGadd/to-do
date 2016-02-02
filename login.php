<?php 
      //bring in SQLcon.php file
      require_once 'SQLcon.php';  

      //check if the POST request method has been used
      if($_SERVER["REQUEST_METHOD"] == 'POST' ){

          //create vraibles named $user and $password, set them equal to whats stored in the POST array 'user' and 'password' elements.
          $user = $_POST['user'];

          $password = $_POST['password'];

          //create a variable called $loginQuery and use it to store an SQL query
          $loginQuery = " SELECT user, password
          FROM users
          WHERE user = '$user' 
          AND  password = '$password'";

          //run the query using mysqli_query method, passing it the database connection and query as parameters.store the results in a variable
          $loginResult = mysqli_query($con,$loginQuery);

          //use mysqli_num_rows method to determine if $loginResult contains anything, if it does set $_SESSION array with user info and rediredct to list.php else redirect back to this page.
          if(mysqli_num_rows($loginResult)>0){
              
              echo "right";
              $_SESSION['user'] = $user;
              $_SESSION['password'] = $password;
              header("Location:list.php");
              die();
          }

          else{
              
              echo "wrong";
              echo mysqli_error_list($con);
              echo mysqli_error($con);
              header('Location:loginIndex.php');
              echo "Failed to login";
              die();
          }
          
      };

?>



