<header>
        <nav class="nav-wrapper transparent">
          <!-- Logo -->
        
            <div class="container">
                
                <ul class="right-hide-on-mid-and-down">
        
          <li class="logo">
          <div>
            <a href="index.php"><h4 style="margin:0px;padding-top:5px">FLAT MANAGEMENT</h4></a>
          </div>
          </li>
          <?php
          if(isset($_SESSION['user'])) {
            ?>
            <li class=><a href="#"><?=$_SESSION['user']['name']?></a></li>
            <li><a href="./logout.php">Logout</a></li>
            <?php
          }else{
            ?>
            <ul class="right hide-on-med-and-down">
            <li class=><a href="login.php">Login</a></li>
            <li class=><a href="sign_up.php">Sign Up</a></li>
            </ul>
            <?php
          }
          ?>            
            
            <li><a href="#" class="tooltipped btn-floating btn-small grey darken-4" data-tooltip="Instagram">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li><a href="#" class="tooltipped btn-floating btn-small grey darken-4" data-tooltip="Facebook">
            <i class="fab fa-facebook"></i>
            </a></li>
          <li><a href="#" class="tooltipped btn-floating btn-small grey darken-4" data-tooltip="Twitter">
            <i class="fab fa-twitter"></i>
             </a></li>
                    
                   
                       
            </div>
        
        </nav>
        </header>