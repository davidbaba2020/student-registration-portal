<?php 
include_once 'includes/connector.inc.php';
session_start();
if (!isset($_SESSION['regno'])) {
            echo "Access denied!!!";
          }else{

$regno=$_SESSION['regno'];

      // for 200 Level courses
      $SqlCreg200= "SELECT * FROM `200levelcourses` WHERE Reg_No='$regno'";          
      $resultCreg200=mysqli_query($conn, $SqlCreg200);
      $rowCreg200=mysqli_fetch_assoc($resultCreg200);          

      // for 300 Level courses
      $SqlCreg300= "SELECT * FROM `300levelcourses` WHERE Reg_No='$regno'";          
      $resultCreg300=mysqli_query($conn, $SqlCreg300);
      $rowCreg300=mysqli_fetch_assoc($resultCreg300);

      // for 400 Level courses
      $SqlCreg400= "SELECT * FROM `300levelcourses` WHERE Reg_No='$regno'";          
      $resultCreg400=mysqli_query($conn, $SqlCreg400);
      $rowCreg400=mysqli_fetch_assoc($resultCreg400);

      // for 500 Level courses
      $SqlCreg500= "SELECT * FROM `500levelcourses` WHERE Reg_No='$regno'";          
      $resultCreg500=mysqli_query($conn, $SqlCreg500);
      $rowCreg500=mysqli_fetch_assoc($resultCreg500);
      

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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
<script src="js/printThis.js"></script>
<script src ="js/bootstrap.js"></script>
	<title>Student Profile</title>
</head>
<body>
<!-- main Div-->
<div class="container" style="background-color:#e9ecef">
		
		<div class="card text-center ">
          <div class="card-header"><h5>SCHOOL OF UNDERGRADUATE
          FEDERAL COLLEGE OF EDUCATION (TECHNICAL) GOMBE, GOMBE STATE</h5></div>
          <div>In Affiliation With</div>
            
          <div class="row col-12">
          <div class="col-3 ">
                <img  src="images/fce.png" class="img-fluid img-thumbnail" id="profiledisplay" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
          </div>
          <div class="col-6"><h5>ABUBAKAR TAFAWABALEWA UNIVERSITY BAUCHI, BAUCHI STATE</h5></div>
          <div class="col-3">
                <img  src="images/atbu.png" class="img-fluid img-thumbnail" id="profiledisplay" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
          </div>  
          </div>  
          </div>

		<div class=" container row">
		        <div class="col-md-4"></div>
		        <div class="col-4">
		                 
                        <div class="form-group">
                 <h5 class="text-center">My Pic</h5>
                 <img src="<?=$_SESSION['studimg']; ?>" id="sigdisplay" style="display: block; width: 70%; margin: 5px auto; border-radius: 70%;"/>                 
               </div>
		        </div>
		        <div class="col-4"></div>
    	</div> 

<div class="card">
	<div class=" col-3"></div>
        <div class="card col-12 text-center"><h3><?php echo $_SESSION['name']."  ".$_SESSION['surename']."  ".$_SESSION['othername']; ?></h3></div> 
		<table class="table table-bordered sma" id="">
          <div class="table-responsive-md" >
              <tr>
                <th >Reg. No.</th>
                <td><div ><?php echo $_SESSION['regno'];?></td>
                <th >Date Registered: </th>
                <td><div ><?php echo $_SESSION['cbiodataregdate'];?></td>
                <th >Jamb No.</th>
                <td><div><?php echo $_SESSION['jambno'];?></td>
              </tr>
          <tbody>
              <tr>
                <th>Email</th>
                <td><div><?php echo $_SESSION['email'];?></div></td>
                <th >Country</th>
                <td ><div><?php echo $_SESSION['nationality'];?></div></td>
                <th >State Of Origin</th>
                <td ><div"><?php echo $_SESSION['stateoorigin'];?></div></td>
              </tr>
                <tr>
                <th >L.G.A</th>
                <td><div ><?php echo $_SESSION['lga'];?></div></td>
                <th >Gender</th>
                <td ><div ><?php echo $_SESSION['sex'];?></div></td>
                <th >Phone No.</th>
                <td ><div><?php echo $_SESSION['phone1'];?></div></td>
              </tr>   
              <tr>
                <th>Departement</th>
                <td><div><?php echo $_SESSION['cdepartement'];?></div></td>
                <th >Course of Study</th>
                <td ><div><?php echo $_SESSION['ccstudy'];?></div></td>
                <th >Semester</th>
                <td ><div ><?php echo $_SESSION['cdepartement'];?></div></td>
              </tr> 

              <tr>
                <th>Next Of Kin</th>
                <td><div></div></td>
                <th ></th>
                <td ><div></div></td>
                <th ></th>
                <td ><div></div></td>
              </tr>  
          </tbody>

          </div>      
    </table>


<br>
<!-- For Courses Registered-->
    <table class="table table-bordered card">
          <tr>
          <th >Contact Address</th>          
        </tr>      
        <tr>
        	<th><div><?php echo $_SESSION['permaddress'];?></div></th>
        </tr>
    </table>
    
    <div >
      <h4>Courses Registered For</h4>
      
      <!--To Display Level-->
  
   <div class="row">
     <div class="col-6">
      <h5 class="text-center text-warning">First Semester</h5>
        <table class="table table-bordered">
          <tr >
          <th >S/No.</th>
          <th class="col-2">Course Details</th>      
        </tr>       
        <tbody>
        <tr>
          <th >1</th>
          <td><?= $rowCreg200['200first_sem_course1']; ?></td>      
        </tr>
        <tr>
          <th >2</th>
          <td><?= $rowCreg200['200first_sem_course2']; ?></td>      
        </tr>
        <tr>
          <th >3</th>
          <td><?= $rowCreg200['200first_sem_course3']; ?></td>      
        </tr>
        <tr>
          <th >4</th>
          <td><?= $rowCreg200['200first_sem_course4']; ?></td>      
        </tr>
        <tr>
          <th >5</th>
          <td><?= $rowCreg200['200first_sem_course5']; ?></td>      
        </tr>
        <tr>
          <th >6</th>
          <td><?= $rowCreg200['200first_sem_course6']; ?></td>      
        </tr>
        <tr>
          <th >7</th>
          <td><?= $rowCreg200['200first_sem_course7']; ?></td>      
        </tr>
        <tr>
          <th >8</th>
          <td><?= $rowCreg200['200first_sem_course8']; ?></td>      
        </tr>
        <tr>
          <th >9</th>
          <td><?= $rowCreg200['200first_sem_course9']; ?></td>      
        </tr>
        <tr>
          <th >10</th>
          <td><?= $rowCreg200['200first_sem_course10']; ?></td>      
        </tr>
      </tbody>
    </table>   
     </div>

      <div class="col-6">
        <h5 class="text-center text-primary">Second Semester</h5>
        


        <table class="table table-bordered">
          <tr>
          <th >S/No.</th>
          <th class="col-2">Course Details</th>      
        </tr>       
        <tbody>
        <tr>
          <th scope="row-6">1</th>
          <td><?= $rowCreg200['200Second_sem_course1']; ?></td>      
        </tr>
        <tr>
          <th >2</th>
          <td><?= $rowCreg200['200Second_sem_course2']; ?></td>      
        </tr>
        <tr>
          <th >3</th>
          <td><?= $rowCreg200['200Second_sem_course3']; ?></td>      
        </tr>
        <tr>
          <th >4</th>
          <td><?= $rowCreg200['200Second_sem_course4']; ?></td>      
        </tr>
        <tr>
          <th >5</th>
          <td><?= $rowCreg200['200Second_sem_course5']; ?></td>      
        </tr>
        <tr>
          <th >6</th>
          <td><?= $rowCreg200['200Second_sem_course6']; ?></td>      
        </tr>
        <tr>
          <th >7</th>
          <td><?= $rowCreg200['200Second_sem_course7']; ?></td>      
        </tr>
        <tr>
          <th >8</th>
          <td><?= $rowCreg200['200Second_sem_course8']; ?></td>      
        </tr>
        <tr>
          <th >9</th>
          <td><?= $rowCreg200['200Second_sem_course9']; ?></td>      
        </tr>
        <tr>
          <th >10</th>
          <td><?= $rowCreg200['200Second_sem_course10']; ?></td>      
        </tr>
      </tbody>
    </table>   
     </div>     
   </div>
 
  </div>
<div class=" col-3"></div>
</div>
<br>
<div class=" container row">
            <div class="col-md-4">
                    <div class="form-group">
                        <img  src="<?= $_SESSION['studsignature']; ?>" class="img-fluid img-thumbnail" style="display: block; width: 35%; margin: 10px auto; border-radius: 50%;" />
                        </div>

            </div>
            <div class="col-4"> </div>
            <div class="col-4"></div>
      </div> 
<br>  


<!-- For Middling my print button-->
<div class ="row col-md-12" >
	<div class="col-5">
   <div class="container">
        <div class="col-md-4"><a class=" btn btn-primary btn btn-outline-info" href="studentpanel.php" role="button">To go back to Profile</a></div>
</div> 
  </div>
        
        <button type="submit" id="printProfile" name ="printProfile" class="btn btn-success col-2">Print Profile</button>
        
    	<div class="col-5"></div>
</div>
<!-- End For Middling my print button-->
<br>

</div> <!-- End of main Div-->
</br>

<script> // Script for printing
	$('#printProfile').click(function(){
		$('.container').printThis({
			debug: true,               // show the iframe for debugging
	        importCSS: true,            // import parent page css
	        importStyle: true,         // import style tags
	        printContainer: true,       // print outer container/$.selector
	        loadCSS: "MyProject22018/css/bootstrap.css",// path to additional css file - use an array [] for multiple
	        pageTitle: "My Registered Profile Info",              // add title to print page
	        removeInline: false,        // remove inline styles from print elements
	        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
	        printDelay: 333,            // variable print delay
	        header: null,               // prefix to html
	        footer: null,               // postfix to html
	        base: false,                // preserve the BASE tag or accept a string for the URL
	        formValues: true,           // preserve input/form values
	        canvas: false,              // copy canvas content
	        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
	        removeScripts: false,       // remove script tags from print content
	        copyTagClasses: false,      // copy classes from the html & body tag
	        beforePrintEvent: null,     // callback function for printEvent in iframe
	        beforePrint: null,          // function called before iframe is filled
	        afterPrint: null            // function called before iframe is removed
			});
	})
</script>
</body>
</html>

<?php } ?>