<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>
    </head>



<body>
    <div class="form-wrap">
        <div class="profile"><img src="img/user.png">
          <h1>Form1</h1>
          <p>  <?php echo $_SESSION['message'];
          			 unset($_SESSION['message']);
           ?></p>
        </div>
        <form method="POST" action="authorize.php">
            <label for="login">Login</label>
            <input type="text" name="login" id="login" pattern="^[a-zA-Z](.[a-zA-Z0-9_-]*)$" >
          </div>
              
          <div>
          <label for="password">Пароль</label>
          <input type="password" name="password" required>
        </div> 
          <button type="submit" >Show</button> 
        </form> 
      </div>
      
</body>