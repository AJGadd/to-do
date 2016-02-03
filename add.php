<?php
    //
    require_once 'SQLcon.php';
    
?>

<?php
                
                //check if the POST request method has been used
                if($_SERVER["REQUEST_METHOD"] == 'POST'){
                
                //check if the POST array 'name' element contains anything
                if(!empty($_POST['name'])){
                      
                       //create a vraiable and set it equal to the result of calling test_input function on contents of POST name 
                       $x = test_input($_POST['name']);

                       //create a vraiable named $user and set it equal to the contents of the SESSION array 'user' element.
                       $user = $_SESSION['user'];
                   
                       //create a variable called $addQuery and use it to store an SQL query
                       $addQuery = " INSERT INTO items (user,done,item)
                       VALUES ('$user',0,'$x')";

                       //run the query using mysqli_query method, passing it the database connection and query as parameters.store the results in a variable
                       $addResult = mysqli_query($con,$addQuery);

                            //check if response query ran
                            if($addResult){
                                echo "Sucessfully added item to database";
                            }
                            else{
                                echo"Item could not be added to database";
                            }

                     }
                   else{
                            echo "No Item has been Entered!";
                            //redirect back to the list.php page
                            header("Location:list.php");
                            die();
                     }

                     header("Location:list.php");
                     die();
                  
                }
                
                //function formats the user input
                function test_input($item) {
                    $item = trim($item);
                    $item = stripslashes($item);
                    $item = htmlspecialchars($item);
                    return $item;
                }

              
?>
