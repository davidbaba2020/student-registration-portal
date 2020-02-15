<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
<script src="js/bootstrapjquerry.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>Creat a new account after verifying </title>
</head>
<body>
<div class=container>
  
      <br>
      <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Create New Student Account</h3>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="jumbotron">
     <!--Add admitted student addmission code and name-->
    
  <div class ="row">
      
    <div class = "col-4">
      
    </div>
    <div class = "col-4">
      
        <div class="card-body col-12 card text-white bg-info">
        <div class ="card-header">To Create a new Student Account`</div>       
             <form class="form-group" action="studentsignup.php" method="POST"> <!-- insert new student -->
                <div class="form-group">
                    <label>User Name</label><br>
                    <input type="text" name="studentusername" class="form-control"  placeholder="Please, enter your intended username" required><br>                  
                    <label>Jamb No</label><br>
                    <input type="text" name="jambno" class="form-control"  placeholder="Please, enter your Jamb number" required><br>
                    <label>Password</label><br>
                    <input type="password" name="psd" class="form-control"  placeholder="Please, enter your password" required><br>

                    <label>Confirm password</label><br>
                    <input type="password" name="cpsd" class="form-control"  placeholder="Please, enter your password" required><br>
                    
                    <button type="submit" class="btn btn-primary" name="studaccsubmit">Create Account!</button>                   
                </div>
            </form>        
          </div>       

      </div>
      <div class = "col-4">
          
      </div>
      
  </div>


        <div >
      <br>
      <nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll text-right">
                        <li class="nav-item">
                            <a class="nav-link active text-right text-light font-weight-bold" href="studentlogin.php">Proceed to Login</a>
                        </li>                        
                </ul>
      </nav><br>
      
    
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
</body>
</html>

<?php
session_start();
include_once 'includes/connector.inc.php';
//student account creation!!
         if (isset($_POST['studaccsubmit'])){

        $studentusername = filter_input(INPUT_POST, 'studentusername');
        $jambno = filter_input(INPUT_POST, 'jambno');
        $passwordstudent = filter_input(INPUT_POST,'psd');
        $confirmpsdstudent = filter_input(INPUT_POST,'cpsd');


        //Check if username exist
        $sql2="SELECT * FROM studentlogin WHERE usernamestudent='$studentusername'";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck = mysqli_num_rows($result2);
            
              
        if ($resultCheck > 0){
        	echo  "<script>alert('Student User already exist!')</script>"; 
        	echo  "<script>window.open('Locatiuon: studentsignup.php')</script>";
        }else{ 
        	if($passwordstudent!=$confirmpsdstudent){
  			
  			echo  "<script>alert('password does not match!')</script>"; 
        	echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";

        	}else{

        	//Create account
       		$sql3 = "INSERT INTO studentlogin(usernamestudent, passwordstudent,jambno) values ('$studentusername','$passwordstudent','$jambno')";
                         
                }

    		if(mysqli_query($conn, $sql3)){
        	
        	echo  "<script>alert('Student Account Created Successfully!')</script>"; 
        	echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";

        } 
    }
}
        ?>