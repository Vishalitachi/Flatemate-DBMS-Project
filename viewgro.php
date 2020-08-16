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
  <title>Grocery Details </title>
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

      $sql='SELECT M_ID,ITEM_ID,ITEM_NAME,PRICE,QUANTITY,TOTAL,DATE_OF_PURCHASE FROM grocery';
      $result = mysqli_query($conn,$sql);
      ?>
      <table class="stripped" style="width:1000px;margin:50px auto;">
      
        <tr>
          <th>Member_id</th>
          <th>Item_id</th>
          <th>Item_Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Date_of_Purchase</th>
        </tr>
      
      
        <?php
          while($row = mysqli_fetch_assoc( $result) ){
            ?>
            <tr>
              <td><?php echo $row['M_ID'];?></td>
              <td><?php echo $row['ITEM_ID'];?></td>
              <td><?php echo $row['ITEM_NAME'];?></td>
              <td><?php echo $row['PRICE'];?></td>
              <td><?php echo $row['QUANTITY'];?></td>
              <td><?php echo $row['TOTAL'];?></td>
              <td><?php echo $row['DATE_OF_PURCHASE'];?></td>
              
            
              
            </tr>
            <?php
          }
          ?>
     
    </table>
    </body>
    </html>