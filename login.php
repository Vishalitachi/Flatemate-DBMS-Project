<?php
require_once("./check_login.php");
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>DBMS MINI PROJECT</title>
  <style>
     body { 
        background: url(img/2.jpg);
        background-size: cover; ;
      }
      .header {
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
      .error {
       width: 92%; 
       margin: 0px auto; 
       padding: 10px; 
       border: 1px solid #a94442; 
       color: #a94442; 
       background: #f2dede; 
       border-radius: 5px; 
       text-align: left;
       }
       .success {
        color: #3c763d; 
        background: #dff0d8; 
        border: 1px solid #3c763d;
        margin-bottom: 20px;
       }

      
  </style>
  </head>
  <body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="validate_login.php">
  <div>
    <?php
    if(isset($_GET['error'])) {
      ?>
      <p style="padding:10px;background:rgba(255,0,0, .5);color:white;text-align:center;" id="warning"><?=$_GET['error']?></p>
      <?php
    }
    ?>
    </div>
  	<div class="input-group">
  		<label>User Id</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
    
  	<div class="input-group">
  		<input type="submit" class="btn" name="login_user" value ="Login" style="height:auto;"/>
  	</div>
  	<p>
  		Not yet a member? <a href="sign_up.php">Sign up</a>
  	</p>
  </form>

       <script>
       setTimeout(() => {
          document.getElementById("warning").style.display="none";
       }, 3000);
       </script>
  </body>
</html>