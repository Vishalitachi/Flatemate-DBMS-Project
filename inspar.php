<?php
session_start();
if(!isset($_SESSION['user'])) {
    header("location: ./login.php");
    exit;
}
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
  <title>ADD PARENT DETAILS </title>
  <style>
     body { 
      background: url(img/4.jpg);
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
</style>
  <body>
  <?=require_once("./nav.php")?>
 <?php
 include('db_connect.php');
      ?>
      

<?php

 if(isset($_POST['save']))
{
    extract($_POST);
   $sql = "INSERT INTO parent_details (M_ID,NAME,ADDRESS,PHONE_NO)
   VALUES ($mid', '$name', '$loc', '$pho')";
   $result = mysqli_query($conn,$sql);
   
}

?>

<form action="./inspar.php" method="post"> 

<label>Member ID</label><br/>
<input type="text" name="mid"><br/>

<label>Parent's Name </label><br/>
<input type="text" name="name"><br/>

<label>Address</label><br/>
<input type="text" name="loc"><br/>

<label>Parent's Phone No</label><br/>
<input type="text" name="pho"><br/>


<button type="submit" class="btn" name="save" style="height:auto">Insert</button>



</form>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</body>
</html>
  
