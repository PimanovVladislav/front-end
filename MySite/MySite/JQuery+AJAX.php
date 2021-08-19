<!DOCTYPE html>
<html>
    <head>
        <title>Perfect weight</title>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>



<body align = "center">
    <div>
        <div>
          <h1 align="center">Твой идеальный вес</h1>
          <p id="weight"> </p>
        </div>
        
        <form id="form1">

           <label>
            <input type="radio" id = "sexid" name="sex" value="мужской">мужской
          </label>
          <label>
            <input type="radio" id = "sexid" name="sex" value="женский">женский
          </label>

          <label for="height">Рост
          <input id = "hhhh" type="" name="height">
        </label>
          <br>
          <button type="submit" >Показать идеальный вес</button> 
        </form> 
       
      </div>
  <script src="js/getdetails.js"></script>
</body>
</html>