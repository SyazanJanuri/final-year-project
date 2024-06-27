<!DOCTYPE html>
<html>
<head>
  <title>LOGIN|PARCEL MANAGEMENT SYSTEM</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
</head>
<body class="bg-dark bg-gradient">
    
        <?php
           
            include_once "./config/dbconnect.php";
  
        ?>

   <div class="h-100 d-flex jsutify-content-center align-items-center">
       <div class='w-100'>
        <h3 class="py-5 text-center text-light">Parcels  Management System</h3>
        <div class="card my-3 col-md-4 offset-md-4 ">
            <div class="card-body">
        <!-- Default form login -->
<form class="text-center border border-light p-5" method="post" action="./controller/loginController.php">

<p class="h4 mb-4">Sign in</p>

<!-- username -->
<input type="text" name="username" class="form-control mb-4" placeholder="username">

<!-- Password -->
<input type="password" name="password" class="form-control mb-4" placeholder="Password">

<!-- <div class="d-flex justify-content-around">
    <div>
         ---Remember me ----
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
        </div>
    </div>
    <div>
         ---Forgot password---
        <a href="">Forgot password?</a>
    </div>
</div> -->

<!-- Sign in button -->
<button class="btn btn-info btn-block my-4" type="submit" name="loginbtn" >Sign in</button>

<!-- Register -->
<p>
    <a href="./userDashboard.php">Log in as Customer</a>
</p>

<!-- Social login
<p>or sign in with:</p>

<a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
<a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a> -->

</form>
<!-- Default form login -->
</div>
</div>
</div>
</div>
    

    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>