<?php 
session_start();

if (isset($_SESSION['studentid'])) {

$studentid=$_SESSION['studentid'];
$regno=$_SESSION['regno'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<script src="js/bootstrapjquerry.js"></script>
<script src ="js/bootstrap.js"></script>
<title>Student Pay Verify</title>
</head>
<body class="container">
    <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Student Payement Verification</h3> <!-- registartion for New/fresher student -->

                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
  <div class ="row">
    <div class="col-12">
      <ul class="nav nav-pills nav-fill">
   
  </ul>
    </div>
    
</div>
<div class="jumbotron">
   <hr class="my-4">
  <h5 class="text-danger text-center">Enter the ePIN you've already entered and verified to register your courses.</h5>
  <hr class="my-4">  
<div class="form-row justify-content-center">
          <form  method="POST" action="validatetoregister.php">    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" name="epin" 
                        placeholder="ENTER ePIN HERE">
                    </div>
                    <div class="form-group col-md-6">
                        <button  class="btn btn-primary btn-md" name="validreg">Click to proceed to register</button>
                    </div>                  
                </div>                                               
            </form>           
     </div>
  </div>
</br>

<nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fill">
                        
                        <li>
                            <div class ="col-12">
  <h3 class="text-center text-light font-weight-bold"> 
  <footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    
      </footer>
                            </h3> <!-- registartion for New/fresher student -->

                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
        <button class="btn btn-default btn-md pull-xs-left">
          <a href="studentpanel.php"><h6>Back to Student Corner</h6></a>
                   
        </button>                   
      </nav><br> 

  <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
                
    </div>
  </body>



<?php 
include_once 'includes/connector.inc.php';
$STATUS="REGISTERED";
if  (isset($_POST['validreg']))  {  
        $epin = mysqli_real_escape_string($conn, $_POST['epin']);            

      $sqlpc ="SELECT * FROM studentinformation1 WHERE epin ='$epin' AND studentid='$studentid'";

        $resultpc = mysqli_query($conn, $sqlpc);
        $resultCheckpc = mysqli_num_rows($resultpc);
        $rowpc=mysqli_fetch_assoc($resultpc);
if ($resultCheckpc > 0)
     {  
        // cHECK IF REEGISTRED
      $sqlREG ="SELECT * FROM 200levelcourses WHERE studid='$studentid'";

        $resultREG = mysqli_query($conn, $sqlREG);
        $resultCheckREG = mysqli_num_rows($resultREG);
        
    if ($resultCheckREG > 0)
    {
        echo  "<script>alert('Welcome! You have been verified,and Registered for 200 Level Courses, proceed to register for 300 Level courses')</script>"; 
        echo  "<script>window.location.href='studentpanel.php'</script>";       
    }else
        {
            echo  "<script>alert('Welcome! You have been verified, proceed to register courses')</script>"; 
            echo  "<script>window.location.href='courseregistration.php'</script>";
            exit();          
        }

     } else{      
        echo  "<script>alert('Wrong Pin, insert correct pin or go back and reverify your pin!!!')</script>"; 
        echo  "<script>window.location.href='validatetoregister.php'</script>";
        exit();
            }
    }            
?>

<?php }else{
  echo "Acess Denied!";
}
?>