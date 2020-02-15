<?php 
include_once 'includes/connector.inc.php';
$studid=$_GET['studentid'];
       
           $sqldb= "SELECT * FROM `studentinformation1` WHERE studentid='$studid'";          
            $resultdb=mysqli_query($conn, $sqldb);
            $rowdb=mysqli_fetch_assoc($resultdb);          

            $_SESSION['surename']=$rowdb['sname'];
            $_SESSION['email']=$rowdb['studemail'];
            $_SESSION['jambno']=$rowdb['jambno'];
            $_SESSION['othername']=$rowdb['othername'];
            $_SESSION['name']=$rowdb['name'];
            $_SESSION['ccstudy']=$rowdb['ccstudy'];
            $_SESSION['cschool']=$rowdb['cschool'];
            $_SESSION['clevel']=$rowdb['clevel'];
            $_SESSION['studentid']=$rowdb['studentid'];
            $_SESSION['cdepartement']=$rowdb['cdepartement'];
            $_SESSION['yadmited']=$rowdb['yadmited'];
            $_SESSION['regno']=$rowdb['regno'];
            $_SESSION['studimg']=$rowdb['studimg'];
            $_SESSION['studsignature']=$rowdb['studsignature'];
            $_SESSION['sex']=$rowdb['sex'];
            $_SESSION['mstatus']=$rowdb['mstatus'];
            $_SESSION['dob']=$rowdb['dob'];
            $_SESSION['nationality']=$rowdb['nationality'];
            $_SESSION['stateoorigin']=$rowdb['stateoorigin'];
            $_SESSION['lga']=$rowdb['lga'];
            $_SESSION['phone1']=$rowdb['phone1'];
            $_SESSION['phone2']=$rowdb['phone2'];
            $_SESSION['permaddress']=$rowdb['permaddress'];
            $_SESSION['postaddress']=$rowdb['postaddress'];
            $_SESSION['cbiodataregdate']=$rowdb['cbiodataregdate'];
            $_SESSION['epin']=$rowdb['epin'];            
            $_SESSION['cduration']=$rowdb['cduration'];
            $_SESSION['primaryschoolname']=$rowdb['primaryschoolname'];
            $_SESSION['primaryStartyear']=$rowdb['primaryStartyear'];
            $_SESSION['primaryfinishyear']=$rowdb['primaryfinishyear'];
            $_SESSION['secondaryname']=$rowdb['secondaryname'];
            $_SESSION['secondarystart']=$rowdb['secondarystart'];
            $_SESSION['secondaryfinish']=$rowdb['secondaryfinish'];
            $_SESSION['kinname1']=$rowdb['kinname1'];
            $_SESSION['kinname2']=$rowdb['kinname2'];
            $_SESSION['kinaddnnum1']=$rowdb['kinaddnnum1'];
            $_SESSION['kinaddnnum2']=$rowdb['kinaddnnum2'];
            $_SESSION['olschoolname']=$rowdb['olschoolname'];
            $_SESSION['olsubject1']=$rowdb['olsubject1'];
            $_SESSION['olgrade1']=$rowdb['olgrade1'];
            $_SESSION['olsubject2']=$rowdb['olsubject2'];
            $_SESSION['olgrade2']=$rowdb['olgrade2'];
            $_SESSION['olsubject3']=$rowdb['olsubject3'];
            $_SESSION['olgrade3']=$rowdb['olgrade3'];
            $_SESSION['olsubject4']=$rowdb['olsubject4'];
            $_SESSION['olgrade4']=$rowdb['olgrade4'];
            $_SESSION['olsubject5']=$rowdb['olsubject5'];
            $_SESSION['olgrade5']=$rowdb['olgrade5'];
            $_SESSION['hqualification']=$rowdb['hqualification'];
            $_SESSION['hqinstitutionname']=$rowdb['hqinstitutionname'];
            $_SESSION['hqyobtained']=$rowdb['hqyobtained'];
            $_SESSION['alsubject1']=$rowdb['alsubject1'];
            $_SESSION['algrade1']=$rowdb['algrade1'];
            $_SESSION['alsubject2']=$rowdb['alsubject2'];
            $_SESSION['algrade2']=$rowdb['algrade2'];
            $_SESSION['olgrade3']=$rowdb['olgrade3'];
            $_SESSION['alsubject3']=$rowdb['alsubject3'];
            $_SESSION['algrade3']=$rowdb['algrade3'];
            $_SESSION['alsubject4']=$rowdb['alsubject4'];
            $_SESSION['algrade4']=$rowdb['algrade4'];
            $_SESSION['cbiodataregdate']=$rowdb['cbiodataregdate'];
?>
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

<title>Student Complete Registered Profile</title>
</head>
<body>  
<section class ="container-fluid" style="background-color: cornsilk">
  <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
              
      <h4 class="text-center text-light font-weight-bold"> Student Master Profile</h4> <!-- registartion for New/fresher student -->
</div>                 
                   
</nav><br>                    
<form class="form-group" action="includes/editmasterstudentprofiledisplay.inc.php" method="POST">
<div class="jumbotron">

<!--main body -->            
<div class="container-fluid">
      <div class="row jumbotron" style="background: seashell">
          <div class="col-md-3 " style="border-color: orangered">            
                                    
                <div class="form-group">
                 <h5 class="text-center">PassPort</h5>
                 <img src="<?=$_SESSION['studimg']; ?>" id="sigdisplay" style="display: block; width: 70%; margin: 5px auto; border-radius: 70%;"/>                 
               </div>        
                <div class="form-group">
                 <h5 class="text-center">SignatureUpload</h5>
                 <img src="<?=$_SESSION['studsignature']; ?>" id="sigdisplay" style="display: block; width: 50%; margin: 5px auto; border-radius: 70%;"/>                 
               </div>
            
          </div>          
          <div class="col-md-9"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-4">
                          <label for="inputEmail4">Surname</label>
                          <input type="text" name="sname" class="form-control" value="<?= $_SESSION['surename']; ?>" disabled>                          
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputEmail4">Names</label>
                          <input type="text" name="name"class="form-control" value="<?= $_SESSION['name']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputEmail4">Other name</label>
                          <input type="text" name="othername"class="form-control" value="<?= $_SESSION['othername']; ?>" disabled>                       
                        </div>
                  </div>
                  <div class="group-list">                
                        <div class="row">                          
                              <div class="form-group col-md-4" >                        
                                  <label>Registration Number</label>
                                  <input type="text"  value="<?= $_SESSION['regno']; ?>" class="form-control" disabled>                   
                              </div>
                              <div class="form-group col-md-4" >
                                  <label>Jamb Number</label>
                                  <input type="text"  value="<?= $_SESSION['jambno']; ?>"   class="form-control" disabled>
                              </div>
                              
                              <div class="form-group col-md-4">                           
                                    <label for="inputAddress">School</label>
                                      <input id="inputSchool" name="cschool" value="<?= $_SESSION['cschool']; ?>" class="form-control" disabled>                                               
                              </div>
                      </div>
                  </div>
                   <div class="group-list">                
                        <div class="row">                          
                              <div class="form-group col-md-4" >                        
                                  <label>Sex</label>
                                  <input type="text"  name="sex"  class="form-control" value="<?= $_SESSION['sex']; ?>" >                   
                              </div>
                              <div class="form-group col-md-4" >
                                  <label>Marital Status</label>
                                  <input type="text" name="mstatus" value="<?= $_SESSION['mstatus']; ?>"  class="form-control" >
                              </div>                              
                                                         
                              <div class="form-group col-md-4" data-provide="datepicker">                   
                                      <label >Date Of Birth</label>
                                      <input type="date" name="dob"class="form-control" value="<?= $_SESSION['dob']; ?>" disabled>
                                                                        
                              </div>
                      </div>
                  </div>
                  <div class="group-list">                
                        <div class="row">                          
                              <div class="form-group col-md-4" >                        
                                  <label for="inputAddress">Current Course of study</label>       
                                  <input type="text" name="cstudy" value="<?= $_SESSION['ccstudy']; ?>" class="form-control" > 
                                          
                              </div>
                              <div class="form-group col-md-4" >
                                  <label for="inputAddress">Level</label>
                                  <input id="inputLevel" value="<?= $_SESSION['clevel']; ?>" name="clevel" class="form-control" >                                                
                              </div>
                              
                              <div class="form-group col-md-4">                           
                                    <label for="inputAddress">Departement</label>
                            <input id="inputDepartement" name="cdepartment" value="<?= $_SESSION['cdepartement']; ?>" class="form-control" >                                                                       
                              </div>
                      </div>
                  </div>
              </div>         
          </div>                      
      </div>  
</div>


  <div class="row jumbotron" style="background: seashell">
          <div class="col-md-4 card" style="border-color: orangered">            
            <div class="form-group">              
              <label for="inputAddress">Year Admited</label>                
              <input type="text" name="yadmited" value="<?= $_SESSION['yadmited']; ?>" class="form-control" disabled>    
            </div>
              <label for="inputAddress">Course Duration</label>                
              <input type="text" class="form-control" name="cduration" value="<?= $_SESSION['cduration']; ?>" disabled>
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-8">
                          <label for="inputAddress">Name Of Primary School </label>
                      <input type="text" name="primaryschoolname" class="form-control" value="<?= $_SESSION['primaryschoolname']; ?>" disabled>                          
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">From</label>
                        <input type="text"  name="primaryStartyear" class="form-control" value="<?= $_SESSION['primaryStartyear']; ?>" disabled>                      
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">To</label>    
                        <input type="text"  name="primaryfinishyear" class="form-control" value="<?= $_SESSION['primaryfinishyear']; ?>" disabled>                       
                        </div>
                  </div>
                  <div class="group-list">                
                        <div class="row">                          
                        <div class="form-group col-md-8">
                          <label for="inputAddress">Name Of Secondary School</label>
                      <input type="text" name="secondaryprimaryschoolname" class="form-control"value="<?= $_SESSION['secondaryname']; ?>" disabled>                          
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">From</label>
                        <input type="text"  name="secondaryStartyear" class="form-control" value="<?= $_SESSION['secondarystart']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">To</label>    
                        <input type="text"  name="secondaryfinishyear" class="form-control" value="<?= $_SESSION['secondaryfinish']; ?>" disabled>                       
                        </div>
                  </div>
                  </div>
                </div>
              </div>         
          </div> 


      <div class="row jumbotron" style="background: seashell">
          <div class="col-md-4 card" style="border-color: orangered">            
               <div class="form-row col-12">
                          <div class="col-md-6">
                              <label for="inputAddress">Phone Number 1</label>
                                <input type="text"  name="phone1" class="form-control" value="<?= $_SESSION['phone1']; ?>" >
                          </div>
                           <div class="col-md-6">
                              <label for="inputAddress">Phone Number 2</label>
                              <input type="text"  name="phone2" class="form-control" value="<?= $_SESSION['phone2']; ?>" >
                            </div>
                            <div class="col-md-6">
                              <label for="inputAddress">State Of Origin</label>
                              <input type="text"  name="stateoorigin" class="form-control" value="<?= $_SESSION['stateoorigin']; ?>" disabled>
                            </div>
                            <div class="col-md-6">
                              <label for="inputAddress">L.G.A</label>
                              <input type="text"  name="lga" class="form-control" value="<?= $_SESSION['lga']; ?>" disabled>
                            </div>                      
            </div>           
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">Permanent Address</label>
                        <input  type="text" name="pmaddress" class="form-control" value="<?= $_SESSION['permaddress']; ?>" >
                        </div>
                  </div>
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">Postal Address</label>
                        <input  type="text" name="psaddress" class="form-control" id="inputAddress" value="<?= $_SESSION['postaddress']; ?>">

                        </div>
                  </div>

                                              
              </div>
            </div>
                  
          </div>


      <div class="row jumbotron" style="background: seashell">
          <div class="col-md-4 card" style="border-color: orangered">            
               <div class="form-row col-12">
                          <div class="col-md-12">
                              <label for="inputAddress">1st Kin Name</label>
                                <input type="text"   name="nokinname1" class="form-control" value="<?= $_SESSION['kinname1']; ?>" >
                          </div>                           
                            <div class="col-md-12">
                              <label for="inputAddress">2nd Kin Name</label>
                              <input type="text"  name="nokinname2" class="form-control" value="<?= $_SESSION['kinname2']; ?>" >
                            </div>                                                  
            </div>           
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">First Next Of Kin Address/Phone No.</label>
                        <input  type="text" name="pmaddress" class="form-control" value="<?= $_SESSION['kinaddnnum1']; ?>" >           
                        </div>
                  </div>
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">Seccond Next Of Kin Address/Phone No.</label>
                        <input type="text" name="psaddress" class="form-control" value="<?= $_SESSION['kinaddnnum2']; ?>" >           
                        </div>
                  </div>

                                              
              </div>
            </div>
                  
          </div>
                  </div>
                </div>
              </div>         
          </div>                              


      <div class="row jumbotron" style="background: wheat">
          <div class="col-md-6 group-list">
            <div class="col-md-10"><small><h4>O Level Paper(WAEC, NECO, e.t.c)</h4></small>
            </div>
                <div>
                  
                <label  for="inputAddress">Name of O'Level Exam Type</label>
                <input class="col-md-10" type="text"  name="olschoolname" class="form-control" value="<?= $_SESSION['olschoolname']; ?>" disabled>
                 
                </div>
                 <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <input  id="inputState" name="olsubject1" class="form-control" value="<?= $_SESSION['olsubject1']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <input  id="inputState" name="olgrade1" class="form-control" value="<?= $_SESSION['olgrade1']; ?>" disabled>
                        </div>                        
                </div>

                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <input  id="inputState" name="olsubject2" class="form-control" value="<?= $_SESSION['olsubject2']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <input  id="inputState" name="olgrade2" class="form-control" value="<?= $_SESSION['olgrade2']; ?>" disabled>
                        </div>                        
                </div>
                <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <input  id="inputState" name="olsubject3" class="form-control" value="<?= $_SESSION['olsubject3']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <input  id="inputState" name="olgrade3" class="form-control" value="<?= $_SESSION['olgrade3']; ?>" disabled>
                        </div>                        
                </div>
                 <div class="form-row text-dark col-12" >
                    <div class="form-group col-md-6">
                      <label for="inputAddress">SUBJECTS</label>
                      <input  id="inputState" name="olsubject4" class="form-control" value="<?= $_SESSION['olsubject4']; ?>" disabled>  
                    </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <input  id="inputState" name="olgrade4" class="form-control" value="<?= $_SESSION['olgrade4']; ?>" disabled>
                        </div>                        
                </div>

                 <div class="form-row text-dark col-12" >
                        <div class="form-group col-md-6">
                       <label for="inputAddress">SUBJECTS</label>
                      <input  id="inputState" name="olsubject5" class="form-control" value="<?= $_SESSION['olsubject5']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                         <label for="inputAddress">Grades Obtaned</label>
                        <input  id="inputState" name="olgrade5" class="form-control" value="<?= $_SESSION['olgrade5']; ?>" disabled>
                        </div>                        
                </div>
          </div>

  <div class="col-md-6">
          <div class="row"><small><h4>Previous Institution Info</h4></small></div>
          <div class="col-md-10">
                <label for="inputAddress">Highest Qualification</label>
                <input type="text" class="form-control" name="hqualification"  name="olsubject1" class="form-control" value="<?= $_SESSION['hqualification']; ?>" disabled>
          </div>            
          <div class="col-md-10">
                <label for="inputAddress">Institution Obtaned From</label>
                <input type="text" class="form-control" name="hqinstitution" name="olsubject1" class="form-control" value="<?= $_SESSION['hqinstitutionname']; ?>" disabled>
          </div>
           <div class="col-md-5">
                <label for="inputAddress">Year Obtained</label>                
                <input type="text" class="form-control" name="hqyobtained" name="olsubject1" class="form-control" value="<?= $_SESSION['hqyobtained']; ?>" disabled>
            </div>
             <div class="row"><small><h4>A Level Paper(NCE, ND, e.t.c)</h4></small></div>
        <div class=" row form-group">          
            <div class="col-md-4">
                <label for="inputAddress">SUBJECTS</label>
                <input type="text" class="form-control" name="alsubject1" name="olsubject1" class="form-control" value="<?= $_SESSION['alsubject1']; ?>" disabled>
            </div>
            
            <div class="col-md-5">
                <label for="inputAddress">Grades Obtaned</label>
                <input type="text" class="form-control" name="olsubject1" class="form-control" value="<?= $_SESSION['algrade1']; ?>" disabled>
            </div>               

        </div>
        <div class=" row form-group">          
            <div class="col-md-4">                
                <input type="text" class="form-control" name="alsubject2"class="form-control" value="<?= $_SESSION['alsubject2']; ?>" disabled>
            </div>
            
            <div class="col-md-5">                
                <input type="text" class="form-control" name="algrade2" name="olsubject1" class="form-control" value="<?= $_SESSION['algrade2']; ?>" disabled>            
              </div>               

        </div>

         <div class=" row form-group">          
            <div class="col-md-4">                
                <input type="text" class="form-control" name="alsubject3" name="olsubject1" class="form-control" value="<?= $_SESSION['alsubject3']; ?>" disabled>
            </div>
            
            <div class="col-md-5">                
                <input type="text" class="form-control" name="algrade3" name="olsubject1" class="form-control" value="<?= $_SESSION['algrade3']; ?>" disabled>
            </div>
          </div>   

           <div class=" row form-group">          
            <div class="col-md-4">                
                <input type="text" class="form-control" name="alsubject4" name="alsubject4" class="form-control" value="<?= $_SESSION['alsubject4']; ?>" disabled>
            </div>
            
            <div class="col-md-5">                
                <input type="text" class="form-control" name="algrade4" name="algrade4" class="form-control" value="<?= $_SESSION['algrade4']; ?>" disabled>
            </div>
          </div>
  <br>
           <div class="col-5">              
                        <label for="inputAddress">Current Date Concluding Data Registration</label>           
                        <input type="text" class="form-control" name="olsubject1" class="form-control" value="<?= $_SESSION['cbiodataregdate']; ?>" disabled>
            </div>
         <div class="col-5">              
                        <label for="inputAddress">Your Registered ePIN</label>           
                        <input type="text" class="form-control" name="epin" class="form-control" value="<?= $_SESSION['epin']; ?>" disabled>
            </div>




<!--Signature Corner -->
            
<hr>
            <div class="col-4">              
                <div class="form-group">
                 <h4 class="text-center">SignatureUpload</h4>
                 <img src="<?=$_SESSION['studsignature']; ?>" id="sigdisplay" style="display: block; width: 50%; margin: 5px auto; border-radius: 70%;"/>                 
               </div>
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
<div class ="container">
        <div class="container">
        <div class="col-md-4"><button class=" btn btn-primary ">Click Here to save changes</button></div>
        </div>  
        <br>
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
        <a class=" btn btn-primary btn btn-outline-info" href="superadminpanel.php" role="button"><button type="submit" name ="submitdata" class="btn btn-primary">Back to Admin Panel</button></a>
      </div> 
        </div> 
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>        
    </div>
</footer>
