<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<link rel="stylesheet" a href="css/mystyle.css"/>
<script src="js/bootstrapjquerry.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>Student Login</title>
</head>
<body style ="background:url('images/12ab.jpg'); background-size:cover;">  <!-- Gives the student login unit a background image-->
<nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Student Login</h3> 

                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
</nav><br>

<div class=" row container-fluid">
  <div class="col-md-4"></div>
  <div class="card col-md-4 " style= "margin-top:100px;">
  <a href="admininfo.html" class="btn btn-info btn-sm " tabindex="-1" role="button" aria-disabled="true">For Information to login</a>
            <img src= "images/11.jpg" class ="card-img-top" style = opacity:0.3;> <!-- Gives the student login card-top a background image-->
      <div class="card-body bg-info">
         <form class="form-group" action="includes/studentlogin.inc.php" method="POST"> <!-- creates the login form -->
                <div class="form-group">
                    <label>StudentEmail</label><br>
                    <input type="email" name="studentemail" class="form-control"  placeholder="Please, Enter Your Email"><br>                  
                    <label >Password</label><br>
                    <input type="password" name="studpassword" class="form-control" placeholder="Please, enter Password"><br>
                    <input type="submit" name ="stud_login_submit" class="btn btn-primary">                    
                </div>
        </form>        
      </div>
  </div>  
</div> <br>
<div class="row"><!-- Creates a return button to the Home page-->
<div class="col-md-4"></div>   
<div class=" col-md-4">          
          <a href="index.php" class="btn btn-info btn-sm " tabindex="-1" role="button" aria-disabled="true">Click to go back to Home Page</a>                   
<div class="col-md-4"></div>
</div>
</div>
</body>
</html>
