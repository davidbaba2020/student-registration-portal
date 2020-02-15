<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<link rel="stylesheet" a href="css/mystyle.css"/>
<link rel="stylesheet" a href="css/Styles.css"/>
<script src="js/bootstrapjquerry.js"></script>
<script src="js/proper.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>HOME</title>
</head>
<body style="background-color: bisque;">
<div class="container">
    <div >
        <div class=" container jumbotron-fluid row text-center"> <!-- Tittle and logo section at the home page -->
                    <div class="col-sm-2">
                    <img src= "images/fce.png" class="img-fluid" alt= "Responsive image">
                    </div>
              <div class="col-sm-8 mycolor ">
                        <h3>SCHOOL OF UNDERGRADUATE</h3>
                        <h4>FEDERAL COLLEGE OF EDUCATION (TECHNICAL) GOMBE,</h4>
                        <h4> GOMBE STATE</h4>
                        <h5>In Affiliation With</h5> 
                        <h4>ABUBAKAR TAFAWABALEWA UNIVERSITY BAUCHI,</h4>
                        <h4>BAUCHI STATE</h4>
              </div>
        <div class="col-sm-2">
        <img src= "images/atbu.png" class="img-fluid" alt= "Responsive image">
        </div>
    </div>
</div> 

<!-- Navigation bar  -->
<div class="container sticky-top ">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark btn-lg ">
                        <a class="navbar-brand " href="#">Nav Menu</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav ">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">About School</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" 
                          aria-haspopup="true" aria-expanded="false"> Info For Registration</a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="newstudentinfo.php">New Students</a>
                          <a class="dropdown-item" href="studentinfo.php">Returning Students</a>
                          <a class="dropdown-item" href="Admininfo.php">Admin Oficcer</a>            
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" 
                          aria-haspopup="true" aria-expanded="false">Open/Sign-up Here
                      </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="adminlogin.php">Admin</a>
                          <a class="dropdown-item" href="studentverifysignup.php">New Student</a>
                          <a class="dropdown-item" href="studentlogin.php">Returning Student</a>
                          <a class="dropdown-item" href="studentverifysignup.php">Check Admission Satus</a>          
                </div>
              </li>
            </ul>
          </div>
        </nav>
</div>
<!-- Side menu at the home page -->
<div class=" row container-fluid border-up">
      <aside class="col-md-4">
          <div class="list-group">                         
                <a href="" class="list-group-item active"> Information To</a> <!-- just information to each category-->
                <a href="newstudentinfo.php" class ="list-group-item"> New Students</a>
                <a href="studentinfo.php" class ="list-group-item"> Returning Students</a>
                <a href="Admininfo.php" class ="list-group-item"> Admin Officer(s)</a>
                <br>
                <a href="" class="list-group-item active"> Categories</a>  <!-- to login-->
                <a href="adminlogin.php" class ="list-group-item"> Admin Login</a>
                <a href="studentlogin.php" class ="list-group-item"> Student Login</a>
                <a href="studentverifysignup.php" class ="list-group-item"> New Student Account Sign up</a>
          </div>
<br>
<br>  
        <div class="card text-white bg-warning mb-3"> <!-- success conner-->
          <div class="card-header text-danger font-weight-bold text-center">SUCCESS</div>
          <div class="card-body">
            <h5 class="card-title text-center">Success Achievemnets</h5>
            <p class="card-text text-justify">Succes comes to only those whom after failing strife to win again, seing failure as the only ladder to success.</p>
          </div>
</div>
      </aside>  
      <!-- welcome section using at the home page -->
                 
      <div class ="container col-md-8 jumbotron text-center" style="background:url('images/12ab.jpg') no-repeat; bachground-size:container; width: cover; height:cover">
            <div class="card card-body" style="background-color:whitesmoke; opacity: 0.5; border: solid black;">
          <h3 class="display-7 text-danger font-weight-bold">Welcome to School Of Science <br> Registration Portal</h3>
          <p class="lead text-justify text-primary fontweight ">Welcome To School Of Science, Undergraduate Online Registration Portal. Here, you have 
            every information you need to register yourself as a new student and also a returning student. Follow each 
            procedure carefully and check each requirement for your course of study before proceeding for Registration. 
            Each course of study as well as its requirements are carefully spelt out for your information and necessary 
            perusal and usage. Make sure you thoroughly go through each of the requirements before registration. Any mistake 
            after final submission will incure some financial penalty which can only be ratified at the admin 
            office/unit.<br> Happy Registration
          </p>          
          <hr class="my-4">
          <h5 class="fontweight text-success">To commence your registration login or open an account:</h5>
          </div>
          <a class="btn btn-danger btn-lg" href="studentlogin.php" role="button">Click Here</a>
          </div>           
   </div>

  <footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        <button class="btn btn-default btn-md pull-xs-left">
          <a href="#"><h6>Back to Top</h6></a>
                   
        </button>      
    </div>
      </footer>
</div>
</body>
</html>