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
                            <h3 class="text-center text-light font-weight-bold"> 200 Level Student Payement Verification</h3> <!-- registartion for New/fresher student -->

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
  <h5 class="text-danger text-center">Enter the ePIN given to you at the admission office after verifying your teller for payement TO store in your record for verification to register courses. Note, the ePIN does not in any way replace your official school receipt and thus, further verification may be demanded of you at any point with your receipt.</h5>
  <hr class="my-4">  
<div class="form-row justify-content-center">
          <form  method="POST" action="payementverify.php">    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input class="form-control" name="epin" 
                        placeholder="ENTER ePIN HERE">
                    </div>
                    <div class="form-group col-md-6">
                        <button  class="btn btn-primary btn-md" name="verifybtn">Click to verify and Store</button>
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
        $epin = mysqli_real_escape_string($conn, $_POST['epin']);            

//check if pin exist in the Bursery Database
        $sqlv="SELECT * FROM payementpin WHERE epin ='$epin'";
        $resultv = mysqli_query($conn, $sqlv);
        $resultCheckv = mysqli_num_rows($resultv);

     if ($resultCheckv < 1)
     {
        echo  "<script>alert('Wrong pin Try again! OR visit admission unit with your reciept for reverification!')</script>"; 
        echo  "<script>window.location.href='payementverify.php'</script>";
        exit();
      }else
      {

//Check if pin has been used by another
        $sqlpc="SELECT * FROM studentinformation1 WHERE epin ='$epin'";
        $resultpc = mysqli_query($conn, $sqlpc);
        $resultCheckpc = mysqli_num_rows($resultpc);
        $rowpc=mysqli_fetch_assoc($resultpc);

if ($resultCheckpc > 0)
     {  
          
        echo  "<script>alert('WARNING!!!Pin used by another Person,!!!')</script>"; 
        echo  "<script>window.location.href='payementverify.php'</script>";
        exit();
      }else{
      //check if user has a pin already
      if ($rowpc['epin']=='') {        
        //if empty, save the current pin
        $sql3 = "UPDATE studentinformation1 SET epin='$epin' WHERE studentid=$studentid";
        $result3 = mysqli_query($conn, $sql3);
        if ($result3) {
        echo  "<script>alert('Welcome! You are verified, Go back and proceed to register courses')</script>"; 
        echo  "<script>window.location.href='studentpanel.php'</script>";
        exit();
        }else {
          echo  "<script>alert('Error saving to Database!'</script>";
        }
        }else{
          echo  "<script>alert('You have registered a pin to your profile, Go and register your courses with your registered pin')</script>"; 
        echo  "<script>window.location.href='studentpanel.php'</script>";
        exit();
        }
                  
      } 
}
}
?>

<?php }else{
  echo "Acess Denied!";
}
?>
