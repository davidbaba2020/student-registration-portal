<?php
include_once 'includes/connector.inc.php';
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
<script src="js/bootstrapjquerry.js"></script>
<script src ="js/bootstrap.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery-3.3.1.js"></script>

<!--<script type="text/javascript">

  // function populate(s1, s2){
  //   var s1 = document.getElementById(s1);
  //   var s2 = document.getElementById(s2);
  //   s2.innerHTML = "";
  //   if (s1.value == "BTechMath200L")
  //   {
  //       var optionArray = ["slct|Choose First Semester Math Courses","|",  " MATH211| Linear Algebra 1    3CU ", " MATH 212| Mathematics Methods 1    3CU", " MATH 213| Analysis 1     3CU", " ST 271| Introductory Statistics     4CU", " EDU 211| Intro to Education Psychology    3CU", " EDU 221| Foundation of Education 1   3CU", " GNS 201|Information Science 2CU", " GNS 101| Use of English Language 1 (For DE Candidates)  2CU ", "Bio|Biology 2Cu", "Chem|Chemistry  2CU", "Phy|Physics  2CU", "|", " MATH221| Linear Algebra 2  3CU", " MATH222|Mathematics Methods 2     3CU", " MATH223| Analysis 2  3CU", " ST281| Descriptive Statistics    3CU ", " SED 201|  Classroom Observation   1CU", " SCI231|Integrated Science     3CU", " EDU222| Foundation of Education 2 3CU", " GNS202  | African History and Culture 2CU", " GNS 222| Peace and Conflict Resolution Studies  2CU ", " GNS 101| Use of English Language 2 (For DE Candidates)     2CU", "Bio|Biology   3Cu", "Chem|Chemistry  3CU", "Phy|Physics  3CU"];
  //   }else if(s1.value == "BTechComputer200L")
  //   {
  //     var optionArray = ["slct|Choose First Semester Computer Courses"];

  //   }else if(s1.value == "BTechPhysics200L")

  //   {
  //       var optionArray = ["slct|Choose First Semester Physics Courses"];

  //   }else if (s1.value =="BTechChemistry200L")
  //   {

  //     var optionArray = ["slct|Choose First Semester Chemistry Courses"];

  //   }else if (s1.value =="BTechBiology200L")
  //   {

  //     var optionArray = ["slct|Choose First Semester Biology Courses"];

  //   }else if (s1.value =="BTechIntegrated200L") 
  //   {

  //     var optionArray = ["slct|Choose First Semester Integrated Scienece Courses"];
  //   }


  //   for (var option in optionArray){

  //     var pair = optionArray[option].split("|");
  //     var newOption = document.createElement("option")
  //     newOption.value = pair[0];
  //     newOption.innerHTML = pair[1];
  //     s2.options.add(newOption);
  //   }
  // }  

</script> -->
<title>Student Registration</title>
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
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="jumbotron">
    <form>
    <h3>Basic Info</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
              <div class="form-group col-md-3">
                <label for="inputEmail4">Surname</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Surename">
              </div>
              <div class="form-group col-md-3">
              <label for="inputEmail4">Other names</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Othernames">
              </div>
              <div class="form-group col-md-3">
              <label for="inputEmail4">Jamb Number</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Jambno">
              </div>
              <div class="form-group col-md-3 date" data-provide="datepicker">
              <label for="inputEmail4">Registration Date</label>
                <input type="date" name="dob"class="form-control" placeholder="Dateofbirth" required>
              </div>
      </div>
      <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputLevel">Choose Level</label>
                    <select id="level" name="level" class="form-control">   
                                       
                  </select>
              </div>

              <div class="col-md-4">
                <label for="inputAddress">Current Course of study</label>                
                  <select id="ccstudy" name="ccstudy" class="form-control ccstudy2" onchange = "//populate('ccstudy2', 'coursech1')">
                  // this.id means the id of the selcted i.e course1
                  
                    <option selected>Course</option>
                    <option value="BTechMath200L">B. Tech Mathematics Edu.2ooL</option>
                    <option value="BTechComputer200L">B. Tech Computer Science Edu.</option>            
                    <option value="BTechPhysics200L">B. Tech Physics Edu.</option>            
                    <option value="BTechChemistry200L">B. Tech Chemistry Edu.</option>
                    <option value="BTechBiology200L">B. Tech Biology Edu.</option>
                    <option value="BTechIntegrated200L">B. Tech Integrated Science Edu.</option>                    
                  </select>

            </div>

            <div class="col-md-4">
                <label for="inputAddress">Departement</label>
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          

                         
      </div>

</div>
<br>
<!--// Courses Registration -->
<div class="jumbotron">
    <form>
    <h3>Courses Register</h3>  <!-- Segmnet for basic info -->
    <div class="form-row">
              <div class="col-md-5">
                <h4><label for="inputAddress">First Semester</label></h4>
                <select id="fscourse1" name="fscourse1" class="form-control coursech1" required>
                </select>


            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">
                <h4><label for="inputAddress">Second Semester</label></h4>
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>           
      </div>
      <br>
      <!--Course 2 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
      </div>
      <br>
      <!--Course 3 -->
      <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 4 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 5 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 6 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 7 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 8 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 9 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <!--Course 10 -->
        <div class="form-row">
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control coursech1" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>          
              <div class="form-group col-md-2">
              </div>
              <div class="col-md-5">                
                <select id="inputDepartement" name="cdepartment" class="form-control" required>
                    <option selected>Departement</option>
                    <option>Mathematics Departement</option>
                    <option>Computer Science Departement</option>            
                    <option>Physics Departement</option>            
                    <option>Chemistry Departement</option>
                    <option>Biology Departement</option>
                    <option>Integrated Science Departement</option>                    
                  </select>
            </div>    
        </div>
        <br>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <img  src="images/sign.jpg" id="profiledisplay" style="display: block; width: 30%; margin: 5px auto; border-radius: 50%;" />
              <label for="upload2" class=" text-danger center" >Upload Signature</label>
                <input type="file" name="upload2" class="form-control" onclick = "trigerClick()" id="upload2" onchange="previewImage(this);" />
              </div>
        </div>

        <div class ="row">
              <div class ="col-md-4" >
              <button type="course_submit" class="btn btn-primary">Registar</button>
              </div>
        
        

</div>

</div>
</form>
</section>
<br> 
<div class="container">
        <div class="col-md-4"><a class=" btn btn-primary btn btn-outline-info" href="studentpanel.php" role="button">To go back to Profile</a></div>
</div>
<script type="text/javascript">


  $(document).ready(function(){
      //   if (s1.value == "BTechMath200L")

    var optionArray = ["slct|Choose First Semester Math Courses","|",  " MATH211| Linear Algebra 1    3CU ", " MATH 212| Mathematics Methods 1    3CU", " MATH 213| Analysis 1     3CU", " ST 271| Introductory Statistics     4CU", " EDU 211| Intro to Education Psychology    3CU", " EDU 221| Foundation of Education 1   3CU", " GNS 201|Information Science 2CU", " GNS 101| Use of English Language 1 (For DE Candidates)  2CU ", "Bio|Biology 2Cu", "Chem|Chemistry  2CU", "Phy|Physics  2CU", "|", " MATH221| Linear Algebra 2  3CU", " MATH222|Mathematics Methods 2     3CU", " MATH223| Analysis 2  3CU", " ST281| Descriptive Statistics    3CU ", " SED 201|  Classroom Observation   1CU", " SCI231|Integrated Science     3CU", " EDU222| Foundation of Education 2 3CU", " GNS202  | African History and Culture 2CU", " GNS 222| Peace and Conflict Resolution Studies  2CU ", " GNS 101| Use of English Language 2 (For DE Candidates)     2CU", "Bio|Biology   3Cu", "Chem|Chemistry  3CU", "Phy|Physics  3CU"];
    
    $('#ccstudy').on('change', function(){
      alert($(this).val());

      for (var option in optionArray){
      var pair = optionArray[option].split("|");
      var newOption = document.createElement("option")
      newOption.value = pair[0];
      newOption.innerHTML = pair[1];
      $(".coursech1").append(newOption);
    
      }
});

    });
</script>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
<?php
include_once 'includes/footer.inc.php';
?>   
    
</diV>
