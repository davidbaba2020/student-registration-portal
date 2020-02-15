
<?php
include 'includes/connector.inc.php';
session_start();
$email=$_SESSION['email'];
?>
        <?php

        
           $sqldb= "SELECT * FROM `studentinformation1` WHERE studemail='$email'";          
            $resultdb=mysqli_query($conn, $sqldb);
            $rowdb=mysqli_fetch_assoc($resultdb);          

            $_SESSION['surename']=$rowdb['sname'];
            $_SESSION['email']=$rowdb['studemail'];
            $_SESSION['jambno']=$rowdb['jambno'];
            $_SESSION['othername']=$rowdb['othername'];
            $_SESSION['name']=$rowdb['name'];
            $_SESSION['ccstudy']=$rowdb['ccstudy'];
            $_SESSION['cschool']=$rowdb['cschool'];
            $_SESSION['clevel']=$rowdb['clevel'];
            $_SESSION['studentid']=$rowdb['studentid'];
            $_SESSION['cdepartement']=$rowdb['cdepartement'];
            $_SESSION['yadmited']=$rowdb['yadmited'];
            $_SESSION['regno']=$rowdb['regno'];
            $_SESSION['studimg']=$rowdb['studimg'];
            $_SESSION['studsignature']=$rowdb['studsignature'];
            $_SESSION['sex']=$rowdb['sex'];
            $_SESSION['mstatus']=$rowdb['mstatus'];
            $_SESSION['dob']=$rowdb['dob'];
            $_SESSION['nationality']=$rowdb['nationality'];
            $_SESSION['stateoorigin']=$rowdb['stateoorigin'];
            $_SESSION['lga']=$rowdb['lga'];
            $_SESSION['phone1']=$rowdb['phone1'];
            $_SESSION['phone2']=$rowdb['phone2'];
            $_SESSION['permaddress']=$rowdb['permaddress'];
            $_SESSION['cbiodataregdate']=$rowdb['cbiodataregdate'];
            $_SESSION['epin']=$rowdb['epin'];            
            $_SESSION['epin300']=$rowdb['epin300Level'];
            $_SESSION['epin400']=$rowdb['epin400Level'];
            $_SESSION['epin500']=$rowdb['epin500Level'];
    ?>
<?php 
if (!isset($_SESSION['email'])) {
            echo "Access denied!!!";
          }else{ 
?>
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
<title>Student Corner</title>
</head>
<body class="container">  
    <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Student Panel </h3> <!-- registartion for New/fresher student -->

                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
  <div class ="row">
    <div class="col-12">
      <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <?php 

      if ($_SESSION['regno']=$rowdb['regno']) {
        echo "<h5>You have registered already!!</h5>";
      }else{
        echo '<a class="nav-link btn-danger"  href=studentregistration.php>Complete your bio data registration Here!</a>';
      }
    ?>
    
  </li>
  <li class="nav-item">
    <a class="nav-link active btn-success" href="studentprofiledisplay.php">To View Your profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active btn-primary" href="payementverify.php">Verify 200 Level ePIN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active btn-success btn-block" href="validatetoregister.php">Register 200 Level Courses</a>
  </li>
  </ul>
    </div>    
</div>
<div class="jumbotron">
        <div class="row col-12">
          <div class="col-4"></div>
          <div class="form-group col-4">
                <img  src="<?=$_SESSION['studimg']; ?>" class="img-fluid img-thumbnail" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
                <center><h4>Welcome  <?php echo $rowdb['sname']."  ".$rowdb['name'];?></h4></center>
                <h6 class="text-center text-success">Email:<?php echo $email; ?></h6>
                <h6 class="text-center text-danger">Registration No.:<?php echo $rowdb['regno']; ?></h6>
                <div class="col-4"></div>
          </div>
        </div>
<hr>         
  <div class="row">
    <div class="col-4">
      <a class="nav-link active btn-block btn-danger" href="payementverify300level.php">Register For 300 Level Course</a>      
    <hr>
    </div>
    <div class="col-4">
      <a class="nav-link active btn-block btn-warning" href="payementverify400level.php">Register For 400 Level Course</a>
      <hr>
    </div>
    <div class="col-4">
      <a class="nav-link active btn-block btn-primary" href="payementverify500level.php">Register For 500 Level Course</a>      
      <hr>
    </div>  
</div>
  <h5>Student Corner!</h5>: <br><h6>Kindly Finish registering your bio data before any other activity!</63>
  <hr class="my-4">
  <h2><p class="lead text-center text-danger">Do all you must do the right way to succeed.</p></h2>
  <hr class="my-4">    
</div>
</br>
<nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h5 class="text-center text-light font-weight-bold"> Student Panel</h5> <!-- registartion for New/fresher student -->

                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="col-2">
      <form action = "includes/studentsignout.inc.php" method ="POST">
      <button type="subit" name ="studout" class="btn btn-primary btn-block">Logout</button>
    </form>
    </div> 
     
<div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
                
    </div>
</body>
<?php } ?>