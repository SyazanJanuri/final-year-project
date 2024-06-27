<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #3B3131;">
     
 <?php if(isset($_SESSION['userID'])) { ?>
        <?php if($_SESSION['userID'] == 999) { ?>
          <a class="navbar-brand ml-5" href="./adminDashboard.php">
        <img src="./assets/images/logo.png" width="80" height="80" alt="CCSA">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart"> 
          <a href="#Account" onclick="showAccount()" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
         <a href="./controller/logoutController.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>
          <?php
        } else {
            ?>
            <a class="navbar-brand ml-5" href="./staffDashboard.php">
        <img src="./assets/images/staff.png" width="80" height="80" alt="CCSA">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart"> 
    <a href="#Account" onclick="showAccount()" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
            <a href="./controller/logoutController.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
        
    </div>  
    <?php
        } else {
            ?>
            <a class="navbar-brand ml-5" href="./userDashboard.php">
        <img src="./assets/images/customer.png" width="80" height="80" alt="CCSA">
    </a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart"> 
            <a href="./controller/logoutController.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
        
    </div>  
</nav>
