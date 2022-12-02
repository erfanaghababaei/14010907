<?php
if( isset($_POST['sub']) ){
  if( !isset($_POST['num'])){
      $error = "لطفا  فیلد را کامل کنید.";
  }else{
  }
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title> REGISTER FORM</title>
    <link rel="stylesheet" href="css/loginstyle.css" />
  </head>

  <body>
    <div class="container">
        <img src="http://localhost/14010907/image/logo%20white.png" alt="logo">
      <div class="form">
          <p class="titr"><b> LOGIN FORM </b><p>
            <form method='POST'>
                  <label for="user">User name:</label><br>
	                <input type='text' name ='user'/ ><br>
                  <label for="user">Email:</label><br>
	                <input type='email' name ='email'/ ><br>
                    <label for="pass">password:</label><br>
                    <input type='number' name ='pass'/ ><br>
                    <label for="pass">password:(again)</label><br>
                    <input type='number' name ='pass2'/ ><br><br>
	              <input type='submit' name='submit' value='Submit'/><br>
            </form>
            <p>Do you have an account? <a href="login.php">  login</a></p>
        </div>
      </div>
  </body>
</html>
