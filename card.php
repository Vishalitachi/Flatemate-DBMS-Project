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
  <title>DBMS MINI PROJECT</title>
  <head></head>
  <style>
   header{
        background: dodgerblue;
      }</style>
  <body>
  <?=require_once("./nav.php")?>
  
  <?php
  include('db_connect.php');
  ?>

  <div class="container">
      <h2>DATABASE</h2>
      <div class="row">
          <div class="col s12 l4">
              <div class="card">
                  <div class="card-image">
                      <img src="img/6.png" alt="">
                  </div>
                  <div class="card-content">
                      <span class="card-title">MEMBER</span>
                      <p>Here all the details of the members staying in the flat is stored......</p>
                  </div>
                  <div class="card-action">
                      <a href="insmem.php"class="btn-floating pulse"><i class="material-icons">person_add</i></a>
                      <a href="viewmem.php"class="btn-floating pulse"><i class="material-icons">view_carousel</i>></a>
                    </div>
              </div>
          </div>
          <div class="col s12 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="img/7.png" alt="">
                    </div>
                    <div class="card-content">
                        <span class="card-title">APARTMENT</span>
                        <p>Here all the details of the apartment where members are staying is stored......</p>
                    </div>
                    <div class="card-action">
                        <a href="insapt.php"class="btn-floating pulse"><i class="material-icons">add</i></a>
                        <a href="viewapt.php"class="btn-floating pulse"><i class="material-icons">view_carousel</i>></a>
                      </div>
                </div>
            </div>
            <div class="col s12 l4">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/8.png" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title">PARENT DETAILS</span>
                            <p>Here all the details of the member's respetive parent details are stored......</p>
                        </div>
                        <div class="card-action">
                            <a href="inspar.php"class="btn-floating pulse"><i class="material-icons">add</i></a>
                            <a href="viewpar.php"class="btn-floating pulse"><i class="material-icons">view_carousel</i>></a>
                          </div>
                    </div>
                </div>
                <div class="col s12 l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="img/9.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">OCCUPATION</span>
                                <p>Here all the details of the member's occupation details are  stored......</p>
                            </div>
                            <div class="card-action">
                                <a href="insocc.php"class="btn-floating pulse"><i class="material-icons">add</i></a>
                                <a href="viewocc.php"class="btn-floating pulse"><i class="material-icons">view_carousel</i>></a>
                              </div>
                        </div>
                    </div>
                    <div class="col s12 l4">
                            <div class="card">
                                <div class="card-image">
                                    <img src="img/10.png" alt="">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">GROCERY</span>
                                    <p>Here  details of the groceries purchased date wise is stored......</p>
                                </div>
                                <div class="card-action">
                                    <a href="insgro.php"class="btn-floating pulse"><i class="material-icons">add</i></a>
                                    <a href="viewgro.php"class="btn-floating pulse"><i class="material-icons">view_carousel</i>></a>
                                  </div>
                            </div>
                        </div>
                        <div class="col s12 l4">
                                <div class="card">
                                    <div class="card-image">
                                        <img src="img/11.jpg" alt="">
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title">COMMON EXPENSES</span>
                                        <p>Here all the expenses are stored month wise......</p>
                                    </div>
                                    <div class="card-action">
                                        <a href="inscom.php"class="btn-floating pulse"><i class="material-icons">add</i></a>
                                        <a href="viewcom.php"class="btn-floating pulse"><i class="material-icons">view_carousel</i>></a>
                                      </div>
                                </div>
                            </div>
      </div>

  </div>
  <?php include("copyright.php")?>
  </body>
  </html>
    