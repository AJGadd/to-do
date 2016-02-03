 <?php    

//bring in SQLcon.php file
require_once 'SQLcon.php';

//create a vraible named $user, set it equal to whats stored in the session array 'user' element.
$user = $_SESSION['user'];

//create a variable called $itemsQuery and store in it an SQL query.
$itemsQuery = " SELECT id, user, item, done
    FROM items
    WHERE user = '$user' ";

//create a variable named $list_items and store the results of calling the above query in it
$list_items = mysqli_query($con,$itemsQuery);

?>


<!DOCTYPE html> 
<html lang="en">

	<head>
		<title>TODO</title>
		<link type ="text/css" rel = "stylesheet" href = "style.css"/>
	</head>
	
	<body>
      <div class = "list">

		<div class = "header">

            <!--Logout button links user back to loginIndexx.php-->
             <div class="logoutBut"><a href = "loginIndex.php">Logout</a></div>

			<h1>ToDo List</h1>
            
        </div>        
            
		<ul class = "items">
            <!--iterate through each element of the $list_items SQL object returned above-->
             <?php foreach($list_items as $list_item):?>

			    <li>
				    
                    <!--terneary statement which checks if the current list item is marked as done, if it is then echo out "done" so that the done class gets applied to this item, if not then echo out a blank whitespace. Then echo out each item from above foreach loop.-->
                    <span class = " item <?php echo $list_item['done'] ? 'done': ' ' ;?> "><?php echo $list_item['item'];?>
				   
                    <!--check to see if current item is done. if its not then display the "mark as done button" which links to mark.php with $user and $$list_items appended to the url.--> 
                    <?php if(!$list_item['done']):?>
                        <a href = "mark.php?user=<?php echo $user; ?>&item=<?php echo $list_item['id']; ?>" class = "doneBut">Mark as Done?</a>
                    <?php else:?>
                        <a href= "delete.php?item=<?php echo $list_item['id'];?>" class= "delBut">Delete?</a>
                    <?php endif;?>
                    
                          	
                    										
		        </li>

            <?php endforeach;?>
   
		</ul>
             
          <!--create a form to gather user inputs and send them to add.php using the http POST method-->
          <form class="enter" action = "add.php" method = "post">
			    <input class ="input" type = "text" name = "name" placeholder = "Enter List Item" autocomplete="off">
			    <input type = "submit" name = "submit" value = "ADD" class="submit" autocomplete="off">
	      </form>

        </div>
    </body>
</html>
