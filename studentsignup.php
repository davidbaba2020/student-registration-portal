<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
<script src="js/bootstrapjquerry.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>Creat a new account after verifying </title>
</head>
<script type="text/javascript">
                function previewImage() {
                  var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("upload").files[0]);
                  oFReader.onload = function(oFREvent){
                    document.getElementById("profiledisplay").src = oFREvent.target.result; 
                  };
                };

</script>
<body>
<div class=container>
  
      <br>
      <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Create New Student Account</h3>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="jumbotron">
     <!--Add admitted student addmission code and name-->
    
  <div class ="row">
      
     <div class = "col-12">      
        <div class="card-body col-12 card text-white bg-info" ">
        <div class ="card-header text-center" style="background: lime;"><h5>To Create a New Student Account $ Register Basic info</h5>
        </div>       
<form class="form-group" action="studentsignup.php" method="POST" enctype="multipart/form-data"> <!-- insert new student -->
              <div class="form-group col-4">
                <h6 class="text-dark">Passport should be of type jpg, jpeg or png</h6>
              <img  src="images/placeholder.jpg" id="profiledisplay" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
              <label for="upload" class=" text-dark"><h4>UploadPassport</h4></label>
                <input type="file" name="upload" class="form-control" id="upload" onchange="previewImage();" accept=".jpg, .jpeg, .png, .gif" required />
              </div>
                <div class="form-group jumbotron text-dark" style="background: skyblue;">
                  <h5 class="text-center text-danger"><b>NOTE: Your email and password is very vital for logging in to your account for any process as a student.</b></h5>
                    <label>Email</label><br>
                    <input type="email" name="studentemail" class="form-control"  placeholder="Please, enter your Valid email" required><br>          
                    <label>Jamb No</label><br>
                    <input type="text" name="jambno" class="form-control"  placeholder="Please, enter your Jamb number" required><br>
                    <label>Password</label><br>
                    <input type="password" name="psd" class="form-control"  placeholder="Please, enter your password" required><br>
                    <label>Confirm password</label><br>
                    <input type="password" name="cpsd" class="form-control"  placeholder="Please, enter your password" required><br>                    
                </div>
      <div class=" row form-row jumbotron" style="background: skyblue">
                  
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-4">
                          <label for="inputEmail4">Surname</label>
                          <input type="text" name="sname" class="form-control" id="surename" placeholder="Surname" required>                          
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputEmail4">Names</label>
                          <input type="text" name="name"class="form-control" id="othername" placeholder="name" required>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputEmail4">Other name</label>
                          <input type="text" name="othername"class="form-control" placeholder="othername" >
                        </div>
                </div>
                <div class="form-row col-12">
                          <div class="form-group col-md-4">
                          <label for="inputEmail4">Sex</label>
                          <select name="sex" id="sex" class="form-control" required>
                            <option selected>Sex</option>
                            <option>Male</option>
                            <option>Female</option>            
                          </select>
                          </div>
                          <div class="form-group col-md-4">
                          <label for="inputEmail4">Marital Status</label>
                          <select name="mstatus" id="mstatus" class="form-control" required>
                            <option selected>MaritalStatus</option>
                            <option>Single</option>
                            <option>Married</option>            
                            <option>Divorced</option>            
                          </select>
                          </div>
                      <div class="form-group col-md-4 date" data-provide="datepicker">
                      <label for="inputEmail4">Date Of Birth</label>
                        <input type="date" name="dob"class="form-control" placeholder="Dateofbirth" required>
                      </div>
                </div>
                <div class="form-row col-12 text-dark">
                      <div class="form-group col-md-4">
                        <label for="inputCity">Nationality</label>
                        <input type="text" name="nationality" class="form-control" placeholder="Nationality" required>
                      </div>
                      <div class="form-group col-md-4">
                      <label for="inputState">State Of Origin</label>
                      <select id="stateoforigin" name = "stateoorigin" class="form-control" required>
                        <option selected> State Of Origin</option>
                            <option>Abia</option>
                            <option>Adamawa</option>
                            <option>Akwa Ibom</option>
                            <option>Anambra</option>
                            <option>Bauchi</option>
                            <option>Bayelsa</option>
                            <option>Benue</option>
                            <option>Borno</option>
                            <option>Cross River</option>
                            <option>Delta</option>
                            <option>Ebonyi</option>
                            <option>Enugu</option>
                            <option>Edo</option>
                            <option>Ekiti</option>
                            <option>Gombe</option>
                            <option>Imo</option>
                            <option>Jigawa</option>
                            <option>Kaduna</option>
                            <option>Kano</option>
                            <option>Katsina</option>
                            <option>Kebbi</option>
                            <option>Kogi</option>
                            <option>Kwara</option>
                            <option>Lagos</option>
                            <option>Nasarawa</option>
                            <option>Niger</option>
                            <option>Ogun</option>
                            <option>Ondo</option>
                            <option>Osun</option>
                            <option>Oyo</option>
                            <option>Plateau</option>
                            <option>Rivers</option>
                            <option>Sokoto</option>
                            <option>Taraba</option>
                            <option>Yobe</option>
                            <option>Zamfara</option>

                  </select>
            </div>
            <div class="form-group col-md-4">
              <label for="inputZip">L.G.A</label>
              <input type="text" name="lga" class="form-control" placeholder="L.G.A" required>
            </div>                              
            </div>
            <div class="form-row col-12">
                          <div class="col-md-4">
                              <label for="inputAddress">Phone Number 1</label>
                                <input type="text"  name="phone1" class="form-control" placeholder="contact Number" required>
                          </div>
                           <div class="col-md-4">
                              <label for="inputAddress">Phone Number 2</label>
                              <input type="text"  name="phone2" class="form-control" placeholder="contact Number" >
                            </div>                      
            </div>
               
            <div class="form-row col-12 text-dark">
                     <div class="form-group col-6">
                        <label for="inputAddress">Permanent Address</label>
                        <textarea type="text" name="pmaddress" class="form-control" id="inputAddress" placeholder="Permanet Home address" required> </textarea>             
                    </div>
                    <br>
                     <div class="form-group col-6">
                        <label for="inputAddress2">Postal Address</label>
                        <textarea type="text" name="psaddress" class="form-control" id="inputAddress2"> </textarea>
                
                    </div>                                                 
            </div> 
            <div class="form-row text-dark col-12" >
                        <div class="col-md-4">
                        <label for="inputAddress">First Next Of Kin Name</label>
                        <input type="text"  name="kinname1" class="form-control" placeholder="Name of nextkin1" required>
                        </div>
                        <div class="col-md-8">
                        <label for="inputAddress">First Next Of Kin Address/Phone No.</label>
                        <textarea type="text"  name="addressnnumkin1" class="form-control" required> </textarea>
                        </div>                       
                </div>
                <div class="form-row text-dark col-12" >
                        <div class="col-md-4">
                        <label for="inputAddress">Second Next Of Kin Name</label>
                        <input type="text" name="kinname2" class="form-control" placeholder="Name of nextkin1">
                        </div>
                        <div class="col-md-8">
                        <label for="inputAddress">Second Next Of Kin Address/Phone No.</label>
                        <textarea type="text"  name="addressnnumkin2" class="form-control"></textarea>
                        </div>                       
                </div>
                
    </div>
    <div class="jumbotron" style="background: skyblue;">
      <div class="row"><small><h4>Current Institution Info</h4></small></div>
      <div class="form-row text-dark col-12" >
                        <div class="col-md-4">
                              <label for="inputAddress">Current Course of study</label>       <select id="inputcourse" name="ccstudy" class="form-control" required>
                            <option selected>Course</option>
                            <option>B. Tech Mathematics Edu.</option>
                            <option>B. Tech Computer Science Edu.</option>            
                            <option>B. Tech Physics Edu.</option>            
                            <option>B. Tech Chemistry Edu.</option>
                            <option>B. Tech Biology Edu.</option>
                            <option>B. Tech Integrated Science Edu.</option>                  
                            </select>

                        </div>
                        <div class="col-md-4">
                        <label for="inputAddress">School</label>
                          <select id="inputSchool" name="cschool" class="form-control" required>
                                <option selected="">School of Science</option>
                          </select>
                        </div>
                        <div class="col-md-4">
                         <label for="inputAddress">Level</label>
                            <select id="inputLevel" name="clevel" class="form-control" required>                                                    
                                <option selected>200 Level</option>                           
                          </select>
                        </div>                        
      </div>
      <div class="form-row text-dark col-12" >                                           
                        <div class="col-md-4">
                            <label for="inputAddress">Departement</label>
                            <select id="inputDepartement" name="cdepartment" class="form-control" required>
                                <option selected>Departement</option>
                                <option>Mathematics Dept</option>
                                <option>Computer Science Dept</option>            
                                <option>Physics Dept</option>            
                                <option>Chemistry Dept</option>
                                <option>Biology Dept</option>
                                <option>Integrated Science Dept</option>              
                            </select>
                            </div>
                            <div class="col-md-3">
                            <label for="inputAddress">Year Admited</label>                
                            <input type="text" class="form-control" name="cyadmited" placeholder="Year admited" required>
                            </div>
                            <div class="col-md-3">
                            <label for="inputAddress">Course Duration</label>                
                            <input type="text" class="form-control" name="cduration" placeholder="course duration" required>
                            
                            </div>
                            <div class="col-md-2">
                            <label for="inputAddress">Year</label>           
                            <input type="text" class="form-control" value="<?= date("20".'y'); ?>" name="cyregistering" placeholder="current year of registration" required>
                            </div>
                            
      </div>
                            <div class="col-md-3">
                            <label for="inputAddress">Date</label>           
                            <input type="text" class="form-control" value="<?= date("20".'y'."/".'m'."/".'d'); ?>" name="cdate" placeholder="todays date" required>
                            </div>
    </div>
                <button type="submit" class="btn btn-primary" name="studaccsubmit">Create Account!</button>                   
</form>        
          </div>       

      </div>
      <div class = "col-4">
          
      </div>
      
  </div>


        <div >
      <br>
      <nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll text-right">
                        <li class="nav-item">
                            <a class="nav-link active text-right text-light font-weight-bold" href="studentlogin.php">Proceed to Login</a>
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
//student account creation!!
 if (isset($_POST['studaccsubmit'])){
        $_SESSION['studentemail'] = filter_input(INPUT_POST, 'studentemail');
        $_SESSION['jambno'] = filter_input(INPUT_POST, 'jambno');
        $_SESSION['passwordstudent'] = filter_input(INPUT_POST,'psd');
        $confirmpsdstudent = filter_input(INPUT_POST,'cpsd');
        $_SESSION['sname'] = filter_input(INPUT_POST,'sname');
        $_SESSION['name'] = filter_input(INPUT_POST,'name');
        $_SESSION['othername'] = filter_input(INPUT_POST,'othername');
        $_SESSION['regno'] = filter_input(INPUT_POST,'regno');
        $_SESSION['sex'] = filter_input(INPUT_POST,'sex');
        $mstatus = filter_input(INPUT_POST,'mstatus');
        $dob = filter_input(INPUT_POST,'dob');
        $nationality = filter_input(INPUT_POST,'nationality');
        $stateoorigin= filter_input(INPUT_POST,'stateoorigin');
        $lga = filter_input(INPUT_POST,'lga');
        $phone1 = filter_input(INPUT_POST,'phone1');
        $phone2 = filter_input(INPUT_POST,'phone2');
        $pmaddress = filter_input(INPUT_POST,'pmaddress');
        $psaddress= filter_input(INPUT_POST,'psaddress');
        $kinname1= filter_input(INPUT_POST,'kinname1');
        $addressnnumkin1= filter_input(INPUT_POST,'addressnnumkin1');
        $kinname2 = filter_input(INPUT_POST,'kinname2');
        $addressnnumkin2 = filter_input(INPUT_POST,'addressnnumkin2');
        $_SESSION['ccstudy'] = filter_input(INPUT_POST,'ccstudy');
        $_SESSION['cschool'] = filter_input(INPUT_POST,'cschool');
        $_SESSION['clevel'] = filter_input(INPUT_POST,'clevel');
        $cdepartment = filter_input(INPUT_POST,'cdepartment');
        $cyadmited = filter_input(INPUT_POST,'cyadmited');
        $cduration = filter_input(INPUT_POST,'cduration');
        $cyregistering = filter_input(INPUT_POST,'cyregistering');
        $cdate = filter_input(INPUT_POST,'cdate');

    // Process Passport
    $FILE = $_FILES['upload'];
    $filePassName = $_FILES['upload']['name'];
    $filePassTmpName = $_FILES['upload']['tmp_name'];
    $filePassSize = $_FILES['upload']['size'];

    $fileExt = explode('.', $filePassName);
    $fileActualExt = strtolower(end($fileExt));

    if ($filePassSize < 2097152) {
    $filePassNew = uniqid('',true).".".$fileActualExt;
    $filePassDestination ='passport/'.$filePassNew;
   move_uploaded_file($filePassTmpName, $filePassDestination);

    //Check if username exist
    $sql2="SELECT * FROM studentlogin WHERE studentemail='".$_SESSION['studentemail']."'";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck = mysqli_num_rows($result2);

    if ($resultCheck > 0){
        echo  "<script>alert('Student User already exist!')</script>"; 
        echo  "<script>window.open('Locatiuon: studentsignup.php')</script>";

    }else{ 
       if($_SESSION['passwordstudent']!=$confirmpsdstudent){

        echo  "<script>alert('password does not match!')</script>"; 
            echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";
 
    }else{
          //Create account
        $sql3 = "INSERT INTO studentlogin(studentemail,passwordstudent,jambno) values ('".$_SESSION['studentemail']."','".$_SESSION['passwordstudent']."','".$_SESSION['jambno']."')";          
        $sql4 = "INSERT INTO studentinformation1(studemail,studimg,jambno,psd,sname,name,othername,sex,mstatus,dob,nationality,stateoorigin,lga,phone1,phone2,permaddress,postaddress,kinname1,kinaddnnum1,kinname2,kinaddnnum2,ccstudy,cschool,clevel,cdepartement,yadmited,cduration,cyregistered,cdate) values ('".$_SESSION['studentemail']."','$filePassDestination','".$_SESSION['jambno']."','".$_SESSION['passwordstudent']."','".$_SESSION['sname']."','".$_SESSION['name']."','".$_SESSION['othername']."','".$_SESSION['sex']."','$mstatus','$dob','$nationality','$stateoorigin','$lga','$phone1','$phone2','$pmaddress','$psaddress','$kinname1','$addressnnumkin1','$kinname2','$addressnnumkin2','".$_SESSION['ccstudy']."','".$_SESSION['cschool']."','".$_SESSION['clevel']."','$cdepartment','$cyadmited','$cduration','$cyregistering','$cdate')";              
                }
         if(mysqli_query($conn, $sql3)  AND (mysqli_query($conn, $sql4))){
          
          echo  "<script>alert('Student Account Created Successfully, proceed to log in!')</script>"; 
          header("Location: ../studentlogin.php");
          exit();
        }else {
          echo  "<script>alert('Something went wrong while Creating Account!')</script>";
          exit();
        } 
}
//passportif
  }else{
      echo  "<script>alert('Your Pasport is bigger than 2MB, size or Upload another one!!!')</script>";      
    } 
}

?>