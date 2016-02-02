<!DOCTYPE html>
<html lang="en">

	<head>
		<title>CREATE ACCOUNT</title>
		<link type ="text/css" rel = "stylesheet" href = "style.css"/>
	</head>
	
	<body>
      <div class = "list">

		<div class = "header">

			<h1>CREATE ACCOUNT</h1>
           
        </div>        
            
		<ul class = "items">

   
		</ul>
           
          <!--Create a form to collect user information. Send this information to newUser.php using the http POST method when the submit button is pressed.-->
          <form class="enter" action = "newUser.php" method = "post">
			    <input class = "input" type = "text" name = "newUser" placeholder = "Enter Username" autocomplete="off">
			    <input class = "input" type = "password" name = "newPassword" placeholder = "Enter Password" autocomplete="off">
                <input type = "submit" name = "submit" value = "Submit to Create Account" class="submit">
	      </form>

        </div>
    </body>
</html>

