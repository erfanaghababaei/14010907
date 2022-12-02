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
      <title> login</title>
    <link rel="stylesheet" href="css/loginstyle.css" />
  </head>

  <body>
    <div class="container">
        <img src="http://localhost/14010907/image/logo%20white.png" alt="logo">
      <div class="form">
          <p class="titr"><b> LOGIN FORM </b><p>
            <form method='POST'>
                  <label for="user">User name:</label><br>
	                <input type='number' name ='user'/ ><br><br>
                    <label for="pass">password:</label><br>
                    <input type='number' name ='pass'/ ><br><br>
	              <input type='submit' name='submit' value='Submit'/><br><br>
            </form>
            <p>Don't have an account? <a href="register.php">  Register</a></p>
        </div>
      </div>
  </body>
</html>
