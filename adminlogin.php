<<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<script src="js/bootstrapjquerry.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>Admin Signin Page</title>
</head>
<body style ="background:url('images/10.jpg'); background-size:cover;">  <!-- Gives the admin login unit a background image-->
<nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Admin Login</h3> 

                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
</nav><br>
<div class=" row container-fluid">
  <div class="col-md-4"></div>
  <div class="card col-md-4 " style= "margin-top:100px;">
  <a href="admininfo.html" class="btn btn-primary btn-sm " tabindex="-1" role="button" aria-disabled="true">For Information to login as Admin</a>
  
            <img src= "images/stud.jpg" class ="card-img-top "> <!-- Gives the admin login card-top a background image-->
      <div class="card-body">
         <form class="form-group" action= "includes/adminlogin.inc.php" method="POST"> <!-- creates the login form -->
                <div class="form-group">
                    <label>Username/Email</label><br>
                    <input type="text" name="useradmin" class="form-control"  placeholder="Please, enter username or email" required><br>                  
                    <label >Password</label><br>
                    <input type="password" name="passadmin" class="form-control" placeholder="Please, enter Password" required><br>
                    <button href="#" type="submit" class="btn btn-primary" name="submitin">Sign In</button>                   
                </div>
        </form>        
      </div>
  </div>  
</div> <br>
<div class="row"><!-- Creates a return button to the Home page-->
<div class="col-md-4"></div>   
<div class=" col-md-4">          
          <a href="index.php" class="btn btn-primary btn-sm " tabindex="-1" role="button" aria-disabled="true">Click to go back to Home Page</a> 
<div class="col-md-4"></div>
</div>
</div>
</body>
</html>
