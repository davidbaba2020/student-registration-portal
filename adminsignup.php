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
<link rel="stylesheet" a href="css/mystyle.css"/>
<link rel="stylesheet" a href="css/Styles.css"/>
<script src="js/bootstrapjquerry.js"></script>
<script src="js/proper.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>Admin Signup</title>
</head>
<body>
<div class=container>
  
      <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Add New Admin</h3>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="jumbotron text-white bg-info ">
    <div class ="card-header text-center"><h3>To Add a new admitted Student</h3></div>  
        <form action="adminsignup.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label >AdminUser</label>
                        <input class="form-control" name="useradmin" placeholder="User id" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label >Password</label>
                        <input class="form-control" name="psdAdmin" type="password"    placeholder="Password" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label >Email</label>
                        <input class="form-control" name="emailAdmin" type="email"    placeholder="email" required>
                    </div>
                </div>
                <hr>
                           
                <button type="submit" name="adminsubmit" class="btn btn-primary">Sign Up </button>
                <hr>
        </form>
</div>
        <div>
      <nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll text-right">
                        <li class="nav-item">
                            <a class="nav-link active text-right text-light font-weight-bold" href="superadminpanel.php">Back to Admin Panel</a>
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
include_once 'includes/connector.inc.php';
if (isset($_SESSION['useradmin'])) {
    $useradmin = filter_input(INPUT_POST, 'useradmin');
    $emailAdmin = filter_input(INPUT_POST,'emailAdmin');
    $password = filter_input(INPUT_POST,'psdAdmin');
    
  
    //Check if Admin exists.
        
        $sql="SELECT * FROM admin WHERE userAdmin='$useradmin' OR emailAdmin='$emailAdmin'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
           
              
        if ($resultCheck > 0){
            echo  "<script>alert('Admin with these credentials exist, try another one!')</script>";
            exit(); 
          }else{
    
        $sql = "INSERT INTO admin (userAdmin,emailAdmin,passAdmin) values ('$useradmin','$emailAdmin','$password')";
                                    }

    if(mysqli_query($conn,$sql))
    {
        echo  "<script>alert('Admin added Successfully!')</script>"; 
         exit();
        }
    
}
?>

<?php }else{
    echo "Access Deneid!";
} ?>