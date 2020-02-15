<?php 
session_start();
include 'includes/connector.inc.php';
if (isset($_SESSION['studentid'])) {

$studentid=$_SESSION['studentid'];
$regno=$_SESSION['regno'];

// check if user has a opin registered
  $sqlchk4="SELECT * FROM  studentinformation1 WHERE studentid ='$studentid'";
  $resulchk4 = mysqli_query($conn, $sqlchk4);
  $resultCheckv4 = mysqli_num_rows($resulchk4);
  $qout4=mysqli_fetch_assoc($resulchk4);
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
                            <h3 class="text-center text-light font-weight-bold"> 400 Level Student Payement Verification</h3> <!-- registartion for New/fresher student -->

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
  <h4 class="text-danger text-center">NOTE!</h4>
  <hr class="my-4">
  <h5 class="text-danger text-center">Enter ePIN for verification & store to Profile & register courses. If you have entered before but have not registered, use the down option of "Enter ePIN and Register" Note, the ePIN does not in any way replace your official school receipt and thus, further verification may be demanded of you at any point with your receipt.</h5>
  <hr class="my-4">  
<div class="form-row justify-content-center">
          <form  method="POST" action="payementverify400level.php">    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" name="epin4001" 
                        placeholder="ENTER ePIN HERE">
                    </div>
                    <div class="form-group col-md-6">
                        <button  class="btn btn-block btn-primary btn-md" name="verifybtn">Click to verify & register</button>
                    </div>                  
                </div>                                               
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" name="epin400" 
                        placeholder="ENTER ePIN HERE TO REGISTER!">
                    </div>

                    <div class="form-group col-md-6">
                        <button  class="btn btn-block btn-success btn-md" name="verifyregbtn">Enter ePIN & Register</button>
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
if  (isset($_POST['verifybtn']))  {  
        $epin = mysqli_real_escape_string($conn, $_POST['epin4001']);            
 
 if (empty($qout4['epin400Level']))
  {

  //check if pin exist in the Bursery Database
        $sqlv="SELECT * FROM  epin400level WHERE epin ='$epin'";
        $resultv = mysqli_query($conn, $sqlv);
        $resultCheckv = mysqli_num_rows($resultv);
  if ($resultCheckv > 0) 
      {
      // Check if someone is using ePIN
            $sqlpc="SELECT * FROM studentinformation1 WHERE epin400Level ='$epin'";
            $resultpc = mysqli_query($conn, $sqlpc);
            $resultCheckpc = mysqli_num_rows($resultpc);
            if ($resultCheckpc > 0) 
            {
              echo  "<script>alert('WARNING!!!Pin used by another Person,!!!')</script>"; 
              echo  "<script>window.location.href='payementverify400level.php'</script>";
              exit();
            }else
            {
              $sql400 = "UPDATE studentinformation1 SET epin400Level='$epin' WHERE studentid=$studentid";
              $result400 = mysqli_query($conn, $sql400);
              if ($result400) 
              {
                  echo  "<script>alert('Verified, proceed to register courses')</script>"; 
                  echo  "<script>window.location.href='courseregistration400.php'</script>";
                  exit();
              }else 
              {
                  echo  "<script>alert('Error saving to Database!'</script>";
              }

            }
      }else
      {
        echo  "<script>alert('Wrong pin Try again! OR visit admission unit with your reciept for reverification!')</script>"; 
        echo  "<script>window.location.href='payementverify400level.php'</script>";
            exit();
      }

  }else 
  {
    echo  "<script>alert('You have registered a pin to your profile, login below to registered pin')</script>"; 
    echo  "<script>window.location.href='payementverify400level.php'</script>";
        exit();
  }

}

// To Register if entered pin already!
if (isset($_POST['verifyregbtn']))
{
    $epin4 = mysqli_real_escape_string($conn, $_POST['epin400']);

      $sql4="SELECT * FROM studentinformation1 WHERE epin400Level='$epin4'|| studentid=$studentid";
      $result4 = mysqli_query($conn, $sql4);
      $resultCheck4 = mysqli_num_rows($result4);
      $row4ck=mysqli_fetch_assoc($result4);
    if ($resultCheck4 > 0)
    {  
       $epin400=$row4ck['epin400Level'];
       if ($epin400!=$epin4) {          
          echo  "<script>alert('WARNING!!! This ePIN is not yours, enter your correct ePIN!!')</script>";
          echo  "<script>window.location.href='payementverify400level.php'</script>";
          exit();
        }else{
        echo  "<script>alert('You are verified, Proceed to register courses')</script>"; 
        echo  "<script>window.location.href='courseregistration400.php'</script>";        
        exit();
        } 

    }else
    {
        echo  "<script>alert('WRONG ePIN!!!')</script>"; 
        echo  "<script>window.location.href='payementverify400level.php'</script>";
        exit();
    }

}

?>

<?php }else{
  echo "Acess Denied!";
}
?>