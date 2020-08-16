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
  <title>Member Details </title>
  <style>
  
      header{
        background: dodgerblue;
      }
      nav{
        position: relative;
        padding:0px 20px;
      }
      .section{
        padding-top: 4vw;
        padding-bottom:4vw ;
      }
      .tabs .indicator{
      background: #0d47a1;
      }

      .tabs .tab a:focus, .tabs .tab a:focus.active {
      background-color: transparent;
      }
      @media screen and (max-width: 670px){
          header{
              min-height: 500px;
          }
      }

  *{
      box-sizing: border-box;
  }
  table.stripped tr:first-child {
      background : lightgray;
  }
  table.stripped th, table.stripped td {
      padding: 20px;
      border:none;
      border-radius: 0px;
      cursor:pointer;
      transition : all .2s ease-in-out;
  }
  table.stripped tr {
    transition : all .2s ease-in-out;
  }
  table.stripped tr:not(:first-child):hover {
    background: rgba(218,218,218, .3);
  }
  </style>
  </head>
  <body>
  <?=require_once("./nav.php")?>
 <?php
 include('db_connect.php');
      ?>
      <?php

      $sql='SELECT * FROM member';
      $result = mysqli_query($conn,$sql);
      ?>
      <table class="stripped" style="width:1000px;margin:50px auto;">
      
        <tr>
          <th>Member_id</th>
          <th>First_Name</th>
          <th>Last_Name</th>
          <th>Aadhaar_No</th>
          <th>Address</th>
          <th>Date_of_birth</th>
          <th>Gender</th>
          <th>Blood_Group</th>
          <th></th>
        </tr>
      
      
        <?php
          while($row = mysqli_fetch_assoc( $result) ){
            
            echo "<tr>";
              echo "<td>".$row['M_ID']."</td>";
              echo "<td>".$row['M_FNAME']."</td>";
              echo "<td>".$row['M_LNAME']."</td>";
              echo "<td>".$row['AADHAAR_NO']."</td>";
              echo "<td>".$row['ADDRESS']."</td>";
              echo "<td>".$row['DOB']."</td>";
              echo "<td>".$row['GENDER']."</td>";
              echo "<td>".$row['BLOOD_GROUP']."</td>";
              echo "<td class='del'><a class='btn-floating pulse'><i class='material-icons' style='height:auto;'>delete</i></a></td>";
              
            echo "</tr>";
          }
          ?>
     
    </table>
    <script type="text/javascript" src="del.js">

    </script>
    </body>
    </html>