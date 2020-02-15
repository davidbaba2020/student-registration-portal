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
<title>Student Course Registration</title>
</head>
<body>
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
        var departementName = $(this).val();
        if(departementName){
            $.ajax({
                type:'POST',
                url:'courseadd.php',
                data:'departement='+departementName,
                success:function(html){
                    $('#level').html(html);
                    {
                      console.log(html);
                      $('#level').html(html);
                    }                    
                }
            }); 
        }else{
            $('#level').html('<option value="">Select departement first</option>');
            $('#courses').html('<option value="">Select level first</option>'); 
        }
    });
    
    $('#level').on('change',function(){
        var levelName = $(this).val();
        if(levelName){
            $.ajax({
                type:'POST',
                url:'courseadd.php',
                data:'level='+levelName,
                success:function(html)
                {
                    console.log(html);
                    $('.coursech1').html(html);

                },
            }); 
        }else{
            $('#courses').html('<option value="">Select level first</option>'); 
        }
    });
});
 
</script>

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
               <input  value="<?= date('d'."/".'m'."/"."20".'y'); ?>" name="regdate"class="form-control" placeholder="Dateofbirth" required>
            </div>

     </div>

<form action="includes/courseregistration300.inc.php" method="POST">

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
<!--// Courses Registration -->
<div class="jumbotron">
    <h3>Courses Register</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
            <div class="col-md-5">
                <h4><label for="inputAddress">First Semester</label></h4>
                <select  name="fscourse1"  class="form-control coursech1" required> 
                </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">
                <h4><label for="inputAddress">Second Semester</label></h4>
                <select id="sscourse1" name="sscourse1" class="form-control coursech1">                                      
                </select>
            </div>           
      </div>
      <br>
      <!--Course 2 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse2" name="fscourse2" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse2" name="sscourse2" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 3 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse3" name="fscourse3" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse3" name="sscourse3" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 4 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse4" name="fscourse4" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse4" name="sscourse4" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 5 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse5" name="fscourse5" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse5" name="sscourse5" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 6 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse6" name="fscourse6" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse6" name="sscourse6" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 7 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse7" name="fscourse7" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse2" name="sscourse7" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 8 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse8" name="fscourse8" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse8" name="sscourse8" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 9 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse9" name="fscourse9" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="fscourse9" name="sscourse9" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 10 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="fscourse10" name="fscourse10" class="form-control coursech1">
                                        
                  </select>
              </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="sscourse10" name="sscourse10" class="form-control coursech1">
                                        
                  </select>
            </div>    
      </div>
      <div class="form-row">
              <div class="col-md-5">                
                <label>Course Registration Date</label>
                <input value="<?= "20".date("y/m/d"); ?>" type="text" name="cregdate" class="form-control">                                                    
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