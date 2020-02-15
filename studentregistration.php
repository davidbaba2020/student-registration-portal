<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrapjquerry.js"></script>
<script src="js/proper.mini.js"></script>
<script src ="js/bootstrap.js"></script>


<?php
session_start();
include 'includes/connector.inc.php';
$email=$_SESSION['email'];
$surename=$_SESSION['surename'];
$jambno=$_SESSION['jambno'];
$name=$_SESSION['name'];
$othername=$_SESSION['othername'];
$ccstudy=$_SESSION['ccstudy'];
$cschool=$_SESSION['cschool'];
$clevel=$_SESSION['clevel'];
$studentid=$_SESSION['studentid'];
$sdepartment=$_SESSION['cdepartement'];
$yadmited=$_SESSION['yadmited'];

?>
<title>Student Bio Data Completion Registration </title>
</head>
<body>
<section class ="container" style="background-color: cornsilk">
  <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
<div class ="col-12">
      <h4 class="text-center text-light font-weight-bold"> Student Bio Data Completion Registration</h4> <!-- registartion for New/fresher student -->
</div>
                        </li>
      <li class="nav-item">                        
      </li>
                   
      </nav><br>                    

<div class="jumbotron">

<div class="card text-center">
  <div class="card-header">
    <h2 class="text-danger">NOTE!!!</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <div><h4 class="text-warning"> Welcome back <?php echo $surename; ?></h4>
    <h5>Please complete your info recording before proceeding to get your Registration Numberand go ahead to register your courses!</h5></div>
      </div>
</div>
<!--main body -->            
<div class=" row form-row jumbotron" style="background: wheat">
                  
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-4">
                          <h5>Surname</h5>
                          <input type="text"  value="<?php echo $surename; ?>"  class="form-control" >                   
                        </div>
                        <div class="form-group col-md-4">
                        <h5>Name</h5>
                          <input type="text"  value="<?php echo $name; ?>"  class="form-control" >
                        </div>
                        <div class="form-group col-md-4">
                        <h5>Other Name</h5>
                          <input type="text"  value="<?php echo $othername; ?>"  class="form-control"  >
                        </div>
                        
                </div>
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-5">
                          <h5>Registration Number</h5>
                          <input type="text"  value="<?php echo $yadmited.'/00'.$studentid.'/'.'D'.'/'.'GM'.'/'.'06'; ?>"  class="form-control" >                   
                        </div>
                        <div class="form-group col-md-3">
                        <h5>Jamb Number</h5>
                          <input type="text"  value="<?php echo $jambno; ?>"  class="form-control"  >
                        </div>
                        
                </div>
</div>
  <div class="card-footer text-muted">
    <h5 class="text-dark">Fill out the information and proceed to submit.</h5>
  </div>
<form action ="studentregistration.php" method = "POST" enctype="multipart/form-data">
  <br>
  <h3>Academic Information</h3>  <!-- Accademic Information table 3-->        

<br>
    <div class="row"><small><h4>Primary & Post Primary Education</h4></small></div>
<div class=" row form-row jumbotron" style="background: powderblue">
                  
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-8">
                      <label for="inputAddress">Name Of Primary School </label>
                      <input type="text" name="primaryschoolname" class="form-control" placeholder="primary School" required>                          
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">Starting year/From</label>
                        <input type="number"  name="primaryStartyear" class="form-control" placeholder="From" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">Finishing Year/To</label>    
                        <input type="number"  name="primaryfinishyear" class="form-control" placeholder="To" required>
                        </div>
                </div>
</div>

<div class=" row form-row jumbotron" style="background: powderblue">
                  
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-8">
                       <label for="inputAddress">Name Of Secondary School </label>
                        <input type="text"  name="secondaryname" class="form-control" placeholder="Secondary School" required>                          
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">Starting year/From</label>
                        <input type="number"  name="secondarystart" class="form-control" placeholder="From" required>
                        </div>
                        <div class="form-group col-md-2">
                       <label for="inputAddress">Finishing Year/To</label>       
                        <input type="number"  name="secondaryfinish" class="form-control" placeholder="To" required>
                        </div>
                </div>
</div>

<div class="row"><small><h4>O Level Paper(WAEC, NECO, e.t.c)</h4></small></div>
<div class=" row form-row jumbotron" style="background: powderblue">
                  <div class="form-row text-dark col-12" >
                        <div class="col-md-8">
                        <label for="inputAddress">Name of O'Level Exam Type</label>
                        <input type="text"  name="olschoolname" class="form-control" placeholder="Olevel exam type" required>
                        </div>                       
                  </div>

                    <h3 class="text-center text-light">........................................................................................................................</h3>

                    <h3 class="text-center text-light">........................................................................................................................</h3>

                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <select id="inputState" name="olsubject1" class="form-control" required>
                        <option selected>Subject 1</option>
                        <option>Mathematics</option>
                        <option>English</option>            
                        <option>Chemistry</option>            
                        <option>Physics</option>
                        <option>Biology</option>
                        <option>Agriculture</option>
                        <option>Geography</option>
                        <option>Economics</option>
                        <option>Int. Science</option>
                      </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <select id="inputState" name="olgrade1" class="form-control" required>
                          <option selected>Grade</option>
                          <option>Excellent, A1</option>
                          <option>Good, B2</option>            
                          <option>Good, B3</option>            
                          <option>Credit, C4</option>
                          <option>Credit, C5</option>
                          <option>Credit, C6</option>
                          <option>Pass, D7</option>
                          <option>Fail, F9</option>                    
                        </select>
                        </div>                        
                </div>

                

                 <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <select id="inputState" name="olsubject2" class="form-control" required>
                        <option selected>Subject 1</option>
                        <option>Mathematics</option>
                        <option>English</option>            
                        <option>Chemistry</option>            
                        <option>Physics</option>
                        <option>Biology</option>
                        <option>Agriculture</option>
                        <option>Geography</option>
                        <option>Economics</option>
                        <option>Int. Science</option>
                      </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <select id="inputState" name="olgrade2" class="form-control" required>
                          <option selected>Grade</option>
                          <option>Excellent, A1</option>
                          <option>Good, B2</option>            
                          <option>Good, B3</option>            
                          <option>Credit, C4</option>
                          <option>Credit, C5</option>
                          <option>Credit, C6</option>
                          <option>Pass, D7</option>
                          <option>Fail, F9</option>                    
                        </select>
                        </div>                        
                </div>
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <select id="inputState" name="olsubject3" class="form-control" required>
                        <option selected>Subject 1</option>
                        <option>Mathematics</option>
                        <option>English</option>            
                        <option>Chemistry</option>            
                        <option>Physics</option>
                        <option>Biology</option>
                        <option>Agriculture</option>
                        <option>Geography</option>
                        <option>Economics</option>
                        <option>Int. Science</option>
                      </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <select id="inputState" name="olgrade3" class="form-control" required>
                          <option selected>Grade</option>
                          <option>Excellent, A1</option>
                          <option>Good, B2</option>            
                          <option>Good, B3</option>            
                          <option>Credit, C4</option>
                          <option>Credit, C5</option>
                          <option>Credit, C6</option>
                          <option>Pass, D7</option>
                          <option>Fail, F9</option>                    
                        </select>
                        </div>                        
                </div>

                

                 <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <select id="inputState" name="olsubject4" class="form-control" required>
                        <option selected>Subject 1</option>
                        <option>Mathematics</option>
                        <option>English</option>            
                        <option>Chemistry</option>            
                        <option>Physics</option>
                        <option>Biology</option>
                        <option>Agriculture</option>
                        <option>Geography</option>
                        <option>Economics</option>
                        <option>Int. Science</option>
                      </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <select id="inputState" name="olgrade4" class="form-control" required>
                          <option selected>Grade</option>
                          <option>Excellent, A1</option>
                          <option>Good, B2</option>            
                          <option>Good, B3</option>            
                          <option>Credit, C4</option>
                          <option>Credit, C5</option>
                          <option>Credit, C6</option>
                          <option>Pass, D7</option>
                          <option>Fail, F9</option>                    
                        </select>
                        </div>                        
                </div>

                 <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <select id="inputState" name="olsubject5" class="form-control" required>
                        <option selected>Subject 1</option>
                        <option>Mathematics</option>
                        <option>English</option>            
                        <option>Chemistry</option>            
                        <option>Physics</option>
                        <option>Biology</option>
                        <option>Agriculture</option>
                        <option>Geography</option>
                        <option>Economics</option>
                        <option>Int. Science</option>
                      </select>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <select id="inputState" name="olgrade5" class="form-control" required>
                          <option selected>Grade</option>
                          <option>Excellent, A1</option>
                          <option>Good, B2</option>            
                          <option>Good, B3</option>            
                          <option>Credit, C4</option>
                          <option>Credit, C5</option>
                          <option>Credit, C6</option>
                          <option>Pass, D7</option>
                          <option>Fail, F9</option>                    
                        </select>
                        </div>                        
                </div>
<div class="row"><small><h4>Previous Institution Info</h4></small></div>

<div class=" container justify-content-center">

        <div class=" row form-group">  
        
            <div class="col-md-3">
                <label for="inputAddress">Highest Qualification</label>
                <input type="text" class="form-control" name="hqualification" placeholder="Highest Qualification" required>
            </div>
            
            <div class="col-md-7">
                <label for="inputAddress">Institution Obtaned From</label>
                <input type="text" class="form-control" name="hqinstitution" placeholder="Institution obtained from" required>
            </div>

            <div class="col-md-2">
                <label for="inputAddress">Year Obtained</label>                
                <input type="text" class="form-control" name="hqyobtained" placeholder="Year obtained" required>
            </div>

        </div>
<br>

    <div class="row"><small><h4>A Level Paper(NCE, ND, e.t.c)</h4></small></div>
        <div class=" row form-group">          
            <div class="col-md-4">
                <label for="inputAddress">SUBJECTS</label>
                <input type="text" class="form-control" name="alsubject1" placeholder="subject 1" required>
            </div>
            
            <div class="col-md-5">
                <label for="inputAddress">Grades Obtaned</label>
                <input type="text" class="form-control" name="algrade1" placeholder="grade obtained 1 " required>
            </div>               

        </div>

        <div class=" row form-group">          
            <div class="col-md-4">                
                <input type="text" class="form-control" name="alsubject2" placeholder="subject 2">
            </div>
            
            <div class="col-md-5">                
                <input type="text" class="form-control" name="algrade2" placeholder="grade obtained 2 ">
            </div>               

        </div>

         <div class=" row form-group">          
            <div class="col-md-4">                
                <input type="text" class="form-control" name="alsubject3" placeholder="subject 3">
            </div>
            
            <div class="col-md-5">                
                <input type="text" class="form-control" name="algrade3" placeholder="grade obtained 3 ">
            </div>
          </div>   

           <div class=" row form-group">          
            <div class="col-md-4">                
                <input type="text" class="form-control" name="alsubject4" placeholder="subject 4">
            </div>
            
            <div class="col-md-5">                
                <input type="text" class="form-control" name="algrade4" placeholder="grade obtained 4 ">
            </div>
          </div>
  
</div> 

            <div class="col-5">              
                        <label for="inputAddress">Current Date Concluding Data Registration</label>           
                        <input type="text" class="form-control" value="<?= "20".date("y/m/d"); ?>" name="cbiodataregdate" placeholder="todays date" required>
            </div>
            <div class="form-group col-md-5">
                          <h5>Your Generated Registration Number</h5>
                          <input type="text"  name="regno" value="<?php echo $yadmited.'/00'.$studentid.'/'.'D'.'/'.'GM'.'/'.'06'; ?>"  class="form-control" >                   
            </div>   

</div>

<!--Signature Corner -->
            
<hr>
            <div class="col-4">              
                <div class="form-group">
                 <h4 class="text-center">SignatureUpload</h4>
                 <img src="images/sign.jpg" id="sigdisplay" style="display: block; width: 50%; margin: 5px auto; border-radius: 50%;"/>
                 <input type="file" name="signatureUpload" id="signatureUpload" accept=".jpg, .jpeg, .png, .gif" onchange="previewSig();" >
               </div>
            </div>
<hr>
<br>
<div class ="container">
        <div class="container">
        <div class="col-md-4"><a class=" btn btn-primary btn btn-outline-info" href="#" role="button">To go back to the top for any correction</a></div>
        </div>  
        <br>
</div>
<div class ="container" >
      <div class ="col-md-4" >
        <button type="submit" name ="submitdata1" class="btn btn-primary">Proceed to Finish Registration Registar</button>
      </div>
</div>
<br>           
</form>
<br>
                
      

</div>
</section>
<br> 
<br>
    <div class ="col-md-4 btn btn-default">
            <div class ="col-md-4" >
        <a class=" btn btn-primary btn btn-outline-info" href="studentpanel.php" role="button"><button type="submit" name ="submitdata" class="btn btn-primary">Back to Student Corner</button></a>
      </div> 
        </div> 
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>        
    </div>
</footer>
<script type="text/javascript">
  function previewSig() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("signatureUpload").files[0]);
    oFReader.onload = function(oFREvent){
      document.getElementById("sigdisplay").src = oFREvent.target.result; 
    };
  };

</script>
<?php
include_once 'includes/footer.inc.php';
?>
<?php
if(isset($_POST['submitdata1']))

{
$primaryschoolname=filter_input(INPUT_POST, 'primaryschoolname'); 
$primaryStartyear=filter_input(INPUT_POST, 'primaryStartyear'); 
$primaryfinishyear=filter_input(INPUT_POST, 'primaryfinishyear'); 
$secondaryname=filter_input(INPUT_POST, 'secondaryname'); 
$secondarystart=filter_input(INPUT_POST, 'secondarystart'); 
$secondaryfinish=filter_input(INPUT_POST, 'secondaryfinish'); 
$olschoolname=filter_input(INPUT_POST, 'olschoolname'); 
$olsubject1=filter_input(INPUT_POST, 'olsubject1'); 
$olgrade1=filter_input(INPUT_POST, 'olgrade1');
$olsubject2=filter_input(INPUT_POST, 'olsubject2'); 
$olgrade2=filter_input(INPUT_POST, 'olgrade2'); 
$olsubject3=filter_input(INPUT_POST, 'olsubject3'); 
$olgrade3=filter_input(INPUT_POST, 'olgrade3'); 
$olsubject4=filter_input(INPUT_POST, 'olsubject4'); 
$olgrade4=filter_input(INPUT_POST, 'olgrade4'); 
$olsubject5=filter_input(INPUT_POST, 'olsubject5'); 
$olgrade5=filter_input(INPUT_POST, 'olgrade5'); 
$hqualification=filter_input(INPUT_POST, 'hqualification'); 
$hqinstitution=filter_input(INPUT_POST, 'hqinstitution'); 
$hqyobtained=filter_input(INPUT_POST, 'hqyobtained'); 
$alsubject1=filter_input(INPUT_POST, 'alsubject1'); 
$algrade1=filter_input(INPUT_POST, 'algrade1'); 
$alsubject2=filter_input(INPUT_POST, 'alsubject2'); 
$algrade2=filter_input(INPUT_POST, 'algrade2');
$alsubject3=filter_input(INPUT_POST, 'alsubject3'); 
$algrade3=filter_input(INPUT_POST, 'algrade3'); 
$alsubject4=filter_input(INPUT_POST, 'alsubject4'); 
$algrade4=filter_input(INPUT_POST, 'algrade4'); 
$cbiodataregdate=filter_input(INPUT_POST, 'cbiodataregdate'); 
$regno =filter_input(INPUT_POST, 'regno');
  // Process Signature
    $FILESig = $_FILES['signatureUpload'];
    $fileSigName = $_FILES['signatureUpload']['name'];
    $fileSigTmpName = $_FILES['signatureUpload']['tmp_name'];
    $fileSigSize = $_FILES['signatureUpload']['size'];

    $fileSigExt = explode('.', $fileSigName);
    $fileSigActualExt = strtolower(end($fileSigExt));

        if ($fileSigSize < 2097152) {
          $fileSigNew = uniqid('',true).".".$fileSigActualExt;
          $fileSigDestination ='signature/'.$fileSigNew;
          if (copy($fileSigTmpName, $fileSigDestination)){
//data saving processing             
$sqrStudentinfo = "UPDATE studentinformation1 SET studsignature='$fileSigDestination',regno='$regno',primaryschoolname='$primaryschoolname',primaryStartyear='$primaryStartyear',primaryfinishyear='$primaryfinishyear',
 secondaryname='$secondaryname',secondarystart='$secondarystart',secondaryfinish='$secondaryfinish',olschoolname='$olschoolname',olsubject1='$olsubject1',olgrade1='$olgrade1',olsubject2='$olsubject2',olgrade2='$olgrade2',olsubject3='$olsubject3',olgrade3='$olgrade3',olsubject4='$olsubject4',olgrade4='$olgrade4',olsubject5='$olsubject5',olgrade5='$olgrade5',hqualification='$hqualification',hqinstitutionname='$hqinstitution',hqyobtained='$hqyobtained',
 alsubject1='$alsubject1',algrade1='$algrade1',alsubject2='$alsubject2',algrade2='$algrade2',alsubject3='$alsubject3',algrade3='$algrade3',alsubject4='$alsubject4',algrade4='$algrade4',cbiodataregdate='$cbiodataregdate' WHERE studentid=$studentid";
  
  $run =mysqli_query($conn,$sqrStudentinfo);
            }
  if ($run) {
    echo '<script type ="text/javascript">alert("Information saved successfully!")</script>'; 
  }else{
   echo '<script type ="text/javascript">alert("An error occured while saving your information")</script>';
 }


            //Signature else
        }else{
          echo "You Signature is bigger than 2MB Resize or Upload another one!";
        } 


//  Passport else
}
?>