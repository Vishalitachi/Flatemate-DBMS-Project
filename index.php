
  <?php 
    session_start();
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
      html,body{
  height:100%;
  }
        header{
          height: 100%;
          background: url(img/home.jpg);
          background-size: cover;
          background-position: center;
          
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

        img{
          z-index:10;
        }
        
        @media screen and (max-width: 670px){
            header{
                min-height: 500px;
            }
        }
    </style>
  </head>
  <body>
      <?=require_once("./nav.php")?>
          <div class="content">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
          <h3>
            <?php 
              echo $_SESSION['success']; 
              unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>

      <!-- logged in user information -->
      <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <?php endif ?>
  </div>
      
  <div class="container">
  <div class="row">
  <div class="col s12 l12">
  <h1 class="blue-text text-darken-1">ABSTRACT</h1>
  <p>The purpose of Flat Management system is to overlook and store the personal info and record of expenses for user.
  </p>
  <p>This system automate the data by the help of full-fledged computer software,fulfilling their requirements, so that valuable data/information can be stored for a longer period with easy accessing and manipulation of the same.</p>
  <p>This management system can lead to error free,secure,reliable and fast management system.</p>
  </div></div>
  </div>
    <div class="parallax-container">
    <div class="parallax">
    <img src="img/2.jpg" alt="img" class="responsive-img">
    </div>
    </div>
    <!-- services / tabs -->
    <section class="container section">
    <div class="row">
    <div class="col s12 l4">
    <h2 class="indigo-text text-darken-4"><a href="card.php"> What I do......</a></h2>
    <p>This system will involve devoloping a database to store data about member's information and monthly expenses. A user can keep track on expenses and provide a flexible solution to analyze the budget and overcome the shortcoming of the existing expenses.</p>
    <p>Click on the above link to redirect to database!!!!!!!!! </p>
    </div>
    <div class="col s12 l6 offset-l2" >
    <ul class="tabs">
    <li class="tab col s4 l4">
    <a href="#insert" class="indigo-text">INSERT</a>
    </li>
      <li class="tab col s4 l4">
    <a href="#delete" class="indigo-text">DELETE</a>
    </li>
    </ul>
    <div class="col s12" id="insert">
    <p class="flow-text indigo-text text-darken-4">INSERTING</p>
    <p>In this database, it has the fuctionality of inserting new data to the database. </p>
    </div>

    <div class="col s12" id="delete">
    <p class="flow-text indigo-text text-darken-4">DELETING</p>
    <p>In this database, it has the fuctionality of deleting specified data from the database.</p>
    </div>
    </div>
    </div></div>
    </section>
    <!-- parallax -->
    <div class="parallax-container">
    <div class="parallax">
    <img src="img/3.jpg" alt="img" class="responsive-img">
    </div>
    </div>
    <!-- footer -->
    <footer class="page-footer grey darken-4">
    <div class="container">
    <div class="row">
    <div class="col s12 l6">
    <h4 class="grey-text text-lighten-5">About Us</h4>
    <p>We Vishal and Shreyank, Student of RNS Institute of Technology developed this project for DBMS mini project  for the award of the degree Bachelor of Engineering in Information Science and Engineering under Visvesvaraya Technological University, Belagavi during academic year 2018 – 2019 </p>
    </div>
    <div class="col s12 l4 offset-l2">
    <h5>Connect</h5>
    <ul>
    <li><a href="" class="grey-text text-lighten-2">Facebook</a></li>
    <li><a href="" class="grey-text text-lighten-2">LinkedIn</a></li>
    <li><a href="" class="grey-text text-lighten-2">Github</a></li>
    <li><a href="" class="grey-text text-lighten-2">Instagram</a></li>
    <li><a href="" class="grey-text text-lighten-2">Twitter</a></li>
    </ul>
    </div>
    </div>
    </div>  
    <div class="footer-copyright">
  <div class="container center-align">&copy;2019 Flat Management</div>
  </div>
    </footer>
    <!-- Compiled and minified JavaScript -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
          $('.sidenav').sidenav();
          $('.tooltipped').tooltip();
          $('.parallax').parallax();
          $('.tabs').tabs();
      });
        
    </script>
  </body>
  </html>