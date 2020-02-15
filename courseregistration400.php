<?php 
session_start(); 
$epin300=$_SESSION['epin300'];
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
<script src="js/jquery-3.3.1.js"></script>
<title>400 Level Student Course Registration</title>
</head>
<body>
<section class ="container" style="background-color: #ccc">
  <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
      <ul class="nav nav-pills nav-fi ll">
                        
          <li>
             <div class ="col-12">
             <h3 class="text-center text-light font-weight-bold"> 400 Level Student Course Registeration Page</h3> <!-- registartion for New/fresher student -->
             </div>
          </li>
          <li class="nav-item"></li>
                   
  </nav>
  <br>
    <?php
    //Include database configuration file
    include('includes/pdo_connect.inc.php');
    
    //Get all DEPARTMENT data
    $query = $db->query("SELECT * FROM  departement WHERE status = 1 ORDER BY departement_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;


?>
<br>                    
  
<div class="jumbotron">
    <h3>Basic Info</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
      
    <div class="form-group col-md-3">
                <label for="inputEmail4">Surname</label>
                <input type="text" name="surname" style="background: white" class="form-control" value="<?= $_SESSION['surename']; ?>" disabled>
           </div>
           <div class="form-group col-md-3">
              <label for="inputEmail4">Other names</label>
              <input class="form-control" style="background: white" name="othernames" type="text" value="<?=$_SESSION['name'].''.$_SESSION['othername']; ?>" disabled>
           </div>
           <div class="form-group col-md-3">
             <label for="inputEmail4">Jamb Number</label>
             <input type="text" name="jambno" style="background: white" class="form-control" value="<?= $_SESSION['jambno']; ?>" disabled>
           </div>
           <div class="form-group col-md-3 date" data-provide="datepicker">
              <label for="inputEmail4">Registration Date</label>
               <input  value="<?= "20".date("y/m/d"); ?>" name="regdate400"class="form-control" placeholder="Dateofbirth" required>
            </div>

     </div>

<form action="includes/courseregistration400.inc.php" method="POST">

    <div class="form-row">      
     <div class="col-md-4">
         <label for="inputAddress">Departement</label>
         <select id="departement" name="departement" class="form-control" required>
              <option value="">Select Departement</option>
             <?php  if($rowCount > 0){  while($row = $query->fetch_assoc()){ 
             echo '<option value="'.$row['departement_id'].'">'.$row['departement_name'].'</option>';            }
                          }else{
                           echo '<option value="">departement not available</option>';
                            }
                           ?>
                </select>                  
               
            </div>         
              <div class="form-group col-md-2">
                <label for="inputLevel">Choose Level</label>
                    <select id="level" name="level" class="form-control">   
                        <option >400 Level</option>
                    </select>
   
              </div>


              <div class="col-md-3">
                <label for="inputAddress">Current Course of study</label>                
                  <input id="courses" value="<?= $_SESSION['ccstudy']; ?>" class="form-control">                                                       
                  

            </div>           
            <div class="col-md-3">
                <label for="inputAddress">StudentReg No.</label>                
                  <input value="<?= $_SESSION['regno']; ?>" class="form-control">                                                                     

            </div>          
                         
      </div>
<!--// Courses Registration -->
<div class="jumbotron">
    <h3>Courses Register</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
            <div class="col-md-5">
                <h4><label for="inputAddress">First Semester</label></h4>
                <select  name="fscourse1"  class="form-control" required>
                <option>IT</option> 
                </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">
                <h4><label for="inputAddress">Second Semester</label></h4>
                <select  name="sscourse1" class="form-control">
                <option>Teaching Practice</option>                                      
                </select>
            </div>           
      </div>
      <br>
      
      <div class="form-row">
              <div class="col-md-5">                
                <label>Course Registration Date</label>
                <input value="<?= date("20".'y'."/".'d'."/".'m'); ?>" type="text" name="cregdate400" class="form-control">                                                    
                  </select>
              </div>                           
      </div>
      <br>
</div>
<div class ="row">
              <div class ="col-md-4" >
              <button name="course_submit" class="btn btn-primary">Registar</button>
              </div>
               
</div>
</form>
  
</div>
</section>

<br> 
<div class="container">
        <div class="col-md-4"><a class=" btn btn-primary btn btn-outline-info" href="studentpanel.php" role="button">To go back to Profile</a></div>
</div>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>

</footer>
</body>
</html>