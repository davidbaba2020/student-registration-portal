<?php session_start();
if (isset($_SESSION['useradmin'])) {
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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
 <title>Add new Admitted Students</title>
</head>
<body>
<div class=container>
  
      <br>
      <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Add New Student</h3>
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
        <div class ="card-header">To Add a new admitted Student</div>       
             <form class="form-group" action="addadmitedstud2.php" method="POST"> <!-- insert new student -->
                <div class="form-group">
                    <label>Surename</label><br>
                    <input type="text" name="studentSurename" class="form-control"  placeholder="Please, enter student Surename" required><br>                  
                    <label>Name</label><br>
                    <input type="text" name="studentname" class="form-control"  placeholder="Please, enter student name" required><br>
                    <label>Other Name</label><br>
                    <input type="text" name="othername" class="form-control"  placeholder="Please, enter student Other name" ><br>

                    <label>Jamb No.</label><br>
                    <input type="text" name="jambno" class="form-control"  placeholder="Please, student Jamb number" required><br>
                    
                    <button type="submit" class="btn btn-primary" name="admsubmit">Add admited student</button>                   
                </div>
            </form>        
          </div>       

      </div>
      <div class = "col-4">
          
      </div>
      
  </div>


        <div >
      <br>
      
      
    
</div>
</div>
<!-- Add admitted students -->
<!--starting-->
<div class="container">

       </br>
  
<br>
      
<nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
    <ul class="nav nav-pills nav-fi ll text-right">
         <li class="nav-item">
        <a class="nav-link active text-right text-light font-weight-bold" href="superadminpanel.php">Back to Admin Panel</a>
         </li>                        
    </ul>
      </nav>
    </br>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
</br>
<!--end below-->
</body>
</html>


<?php

include_once 'includes/connector.inc.php';
//student addition panel
  if (isset($_POST['admsubmit'])){

   $studentSurename = filter_input(INPUT_POST, 'studentSurename');
   $studentname = filter_input(INPUT_POST, 'studentname');
   $othername = filter_input(INPUT_POST, 'othername');
   $jambno = filter_input(INPUT_POST,'jambno');
         
          //Check if jamb number exist
        $sql="SELECT * FROM admittedstudents WHERE jambno='$jambno'";
        $result=mysqli_query($conn,$sql);
        $resultcheck=mysqli_num_rows($result);
                        
        if ($resultcheck> 0){
          echo  "<script>alert('Jamb Number already exist!')</script>";
          exit();         
        }else{
    
       // insert student
       $sql3 = "INSERT INTO admittedstudents (studentSurename,studentname,othername,jambno) values ('$studentSurename','$studentname','$othername','$jambno')";                   
                }

   if(mysqli_query($conn,$sql3))
    {
       echo  "<script>alert('Student Inserted Successfully!, Continue to Open an account')</script>";        
       exit();

    } else {
       echo  "<script>alert('Error occured!')</script>"; 
       echo  "<script>window.open('Locatiuon: ../addadmitedstud2.php')</script>";
       exit();      
    }

}
?>
<?php }else{
echo "Access Deneid!";
}
?>