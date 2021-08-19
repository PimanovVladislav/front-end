<!DOCTYPE html>

<html>
    <head>
        <title>Form</title>
    </head>



<body>
    <div class="form-wrap">
        <div class="profile"><img src="img/user.png">
          <h1>Form1</h1>
        </div>
        <!-- authorize.php -->
        <form method="POST" action="js/mobform.php">
          <!-- <div>
            <label for="login">Login</label>
            <input type="text" name="login" id="login" pattern="^[a-zA-Z](.[a-zA-Z0-9_-]*)$" >
          </div>
              
          <div>
          <label for="password">Пароль</label>
          <input type="password" name="password" required>
        </div> -->
        <div>
          <label for="mobphone">Введите телефон:</label>
          <input type="mobphone" name="mobphone" pattern="^\+7\(\d{3}-\d{3}-\d{2}-\d{2}\)$">
        </div>
          <button type="submit" >Show</button> 
        </form> 
      </div>
      
</body>









</html>