
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>LOGIN</title>
		<link type ="text/css" rel = "stylesheet" href = "style.css"/>
	</head>
	
	<body>
      <div class = "list">

		<div class = "header">

            <div class="newUserBut"><a href = "newUserIndex.php">Create Account</a></div>
			
            <h1>LOGIN</h1>
            
        </div>        
            
		<ul class = "items">

   
		</ul>
            
          <!--Create a form to collect user information, specifically "user" and "password" inputs. Send this information to login.php using the http POST method when the submit button is pressed.-->
          <form class="enter" action = "login.php" method = "post">
			    <input class = "input" type = "text" name = "user" placeholder = "Enter Username" autocomplete="off">
   			    <input class = "input" type = "password" name = "password" placeholder = "Enter Password" autocomplete="off">
                <input type = "submit" name = "submit" value = "Submit Login Info" class="submit">
	      </form>

        </div>
    </body>
</html>

