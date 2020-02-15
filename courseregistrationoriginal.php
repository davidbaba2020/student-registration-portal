<?php session_start(); ?>
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
<title>Student Course Registration</title>
</head>
<body>
  <?php
    //Include database configuration file
    include('includes/pdo_connect.inc.php');
    
    //Get all DEPARTMENT data
    $query = $db->query("SELECT * FROM  departement WHERE status = 1 ORDER BY departement_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;


?>
<script type="text/javascript">
$(document).ready(function(){
    $('#departement').on('change',function(){
        var departementID = $(this).val();
        if(departementID){
            $.ajax({
                type:'POST',
                url:'courseadd.php',
                data:'departement_id='+departementID,
                success:function(html){
                    $('#level').html(html);
                    $('#courses').html('<option value="">Select level first</option>'); 
                }
            }); 
        }else{
            $('#level').html('<option value="">Select departement first</option>');
            $('#courses').html('<option value="">Select level first</option>'); 
        }
    });
    
    $('#level').on('change',function(){
        var levelID = $(this).val();
        if(levelID){
            $.ajax({
                type:'POST',
                url:'courseadd.php',
                data:'level_id='+levelID,
                success:function(html){
                    $('.coursech1').html(html);

                }
            }); 
        }else{
            $('#courses').html('<option value="">Select level first</option>'); 
        }
    });
});
 
</script>
<section class ="container" style="background-color: #ccc">
  <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
      <ul class="nav nav-pills nav-fi ll">
                        
          <li>
             <div class ="col-12">
             <h3 class="text-center text-light font-weight-bold"> Student Course Registeration Page</h3> <!-- registartion for New/fresher student -->
             </div>
          </li>
          <li class="nav-item"></li>
                   
  </nav>
  <br>
            <br>                    
  
<div class="jumbotron">
<form action="includes/courseregistration.inc.php" method="POST">
    <h3>Basic Info</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
      
    <div class="form-group col-md-3">
                <label for="inputEmail4">Surname</label>
                <input type="text" name="surname" class="form-control" value="<?= $_SESSION['surename']; ?>">
           </div>
           <div class="form-group col-md-3">
              <label for="inputEmail4">Other names</label>
              <input class="form-control" style="background: white" name="othernames" type="text" value="<?=$_SESSION['name'].''.$_SESSION['othername']; ?>" disabled>
           </div>
           <div class="form-group col-md-3">
             <label for="inputEmail4">Jamb Number</label>
             <input type="text" name="jambno" class="form-control" value="<?= $_SESSION['jambno']; ?>" disabled>
           </div>
           <div class="form-group col-md-3 date" data-provide="datepicker">
              <label for="inputEmail4">Registration Date</label>
               <input  value="<?= date('d'."/".'m'."/"."20".'y'); ?>" name="regdate"class="form-control" placeholder="Dateofbirth" required>
            </div>

     </div>

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
                        <option value="">Select Department first</option>
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

</div>
<br>
<!--// Courses Registration -->
<div class="jumbotron">
    <h3>Courses Register</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
            <div class="col-md-5">
                <h4><label for="inputAddress">First Semester</label></h4>
                <select id="coursech1" name="fscourse1" class="form-control coursech1" required> 
                </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">
                <h4><label for="inputAddress">Second Semester</label></h4>
                <select id="inputDepartement" name="sscourse1" class="form-control coursech1">                                      
                </select>
            </div>           
      </div>
      <br>
      <!--Course 2 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse2" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse2" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 3 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse3" class="form-control coursech1" >
                                   
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse3" class="form-control coursech1">
                                      
                  </select>
              </div>    
        </div>
        <br>
        <!--Course 4 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse4" class="form-control coursech1" >
                                  
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse4" class="form-control coursech1">
                                   
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 5 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse5" class="form-control coursech1">
                                     
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse5" class="form-control coursech1">
                                
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 6 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse6" class="form-control coursech1">
                                   
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse6" class="form-control coursech1">
                                  
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 7 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse7" class="form-control coursech1">
                                     
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse7" class="form-control coursech1">
                        
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 8 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse8" class="form-control coursech1">
                                      
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse8" class="form-control coursech1">
                                      
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 9 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse9" class="form-control coursech1">
                                 
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse9" class="form-control coursech1">
                                       
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 10 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="fscourse10" class="form-control coursech1">
                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="sscourse10" class="form-control coursech1">
                           
                  </select>
            </div>    
        </div>

        <br>
        
<div class ="row">
              <div class ="col-md-4" >
              <button name="course_submit" class="btn btn-primary">Registar</button>
              </div>
               
</div>

</div>
</section>
</form>
<br> 
<div class="container">
        <div class="col-md-4"><a class=" btn btn-primary btn btn-outline-info" href="studentpanel.php" role="button">To go back to Profile</a></div>
</div>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>

</footer>
<?php
include_once 'includes/footer.inc.php';
?>   
    

