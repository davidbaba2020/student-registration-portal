<?php 
session_start();
include_once 'includes/connector.inc.php';
$sqlgen="SELECT * FROM `studentinformation1` JOIN `200levelcourses` ON `studentid`=`studid` JOIN `300levelcourses` ON `200L_id`=`200levelid` JOIN `500levelcourses` ON `300L_id`=`300levelid` WHERE `studentid`=".$_GET['studentid'];
$result=mysqli_query($conn,$sqlgen);
$th=mysqli_fetch_assoc($result); 
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

<div class="jumbotron">

<!--main body -->            
<div class="container-fluid">
      <div class="row jumbotron" style="background: seashell">
          <div class="col-md-4 card " style="border-color: orangered">            
                 <div class="form-group col-md-8">                  
                    <img  src="images/placeholder.jpg" id="profiledisplay" style="display: block; width:70%; height:70% margin: 20px auto; border-radius: 50%;" />
                  </div>                         
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
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
                  <div class="group-list">                
                        <div class="row">                          
                              <div class="form-group col-md-4" >                        
                                  <label>Registration Number</label>
                                  <input type="text"  value="<?php echo $yadmited.'/00'.$studentid.'/'.'D'.'/'.'GM'.'/'.'06'; ?>"  class="form-control" >                   
                              </div>
                              <div class="form-group col-md-4" >
                                  <label>Jamb Number</label>
                                  <input type="text"  value="<?php echo $jambno; ?>"  class="form-control"  >
                              </div>
                              
                              <div class="form-group col-md-4">                           
                                    <label for="inputAddress">School</label>
                                      <select id="inputSchool" name="cschool" class="form-control" required>
                                      <option selected="">School of Science</option>
                                </select>                                               
                              </div>
                      </div>
                  </div>
                   <div class="group-list">                
                        <div class="row">                          
                              <div class="form-group col-md-4" >                        
                                  <label>Sex</label>
                                  <input type="text"  name="sex"  class="form-control" >                   
                              </div>
                              <div class="form-group col-md-4" >
                                  <label>Marital Status</label>
                                  <input type="text" name="mstatus" value=""  class="form-control"  >
                              </div>                              
                                                         
                              <div class="form-group col-md-4" data-provide="datepicker">                   
                                      <label >Date Of Birth</label>
                                      <input type="date" name="dob"class="form-control" placeholder="Dateofbirth" required>
                                                                        
                              </div>
                      </div>
                  </div>
                  <div class="group-list">                
                        <div class="row">                          
                              <div class="form-group col-md-4" >                        
                                  <label for="inputAddress">Current Course of study</label>       
                                  <select id="inputcourse" name="ccstudy" class="form-control" required>
                                          <option selected>Course</option>
                                          <option>B. Tech Mathematics Edu.</option>
                                          <option>B. Tech Computer Science Edu.</option>            
                                          <option>B. Tech Physics Edu.</option>            
                                          <option>B. Tech Chemistry Edu.</option>
                                          <option>B. Tech Biology Edu.</option>
                                          <option>B. Tech Integrated Science Edu.</option>                  
                                  </select>

                              </div>
                              <div class="form-group col-md-4" >
                                  <label for="inputAddress">Level</label>
                                  <select id="inputLevel" name="clevel" class="form-control" required>          
                                      <option selected>200 Level</option>                           
                                  </select>
                              </div>
                              
                              <div class="form-group col-md-4">                           
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
              <input type="text" class="form-control" name="cyadmited" placeholder="Year admited" required>    
            </div>
              <label for="inputAddress">Course Duration</label>                
              <input type="text" class="form-control" name="cduration" placeholder="course duration" required>
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-8">
                          <label for="inputAddress">Name Of Primary School </label>
                      <input type="text" name="primaryschoolname" class="form-control" placeholder="primary School" required>                          
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">From</label>
                        <input type="text"  name="primaryStartyear" class="form-control" placeholder="From" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">To</label>    
                        <input type="text"  name="primaryfinishyear" class="form-control" placeholder="To" required>                       
                        </div>
                  </div>
                  <div class="group-list">                
                        <div class="row">                          
                        <div class="form-group col-md-8">
                          <label for="inputAddress">Name Of Secondary School</label>
                      <input type="text" name="secondaryprimaryschoolname" class="form-control" placeholder="primary School" required>                          
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">From</label>
                        <input type="text"  name="secondaryStartyear" class="form-control" placeholder="From" required>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputAddress">To</label>    
                        <input type="text"  name="secondaryfinishyear" class="form-control" placeholder="To" required>                       
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
                                <input type="text"  name="phone1" class="form-control" placeholder="contact Number" required>
                          </div>
                           <div class="col-md-6">
                              <label for="inputAddress">Phone Number 2</label>
                              <input type="text"  name="phone2" class="form-control" placeholder="contact Number" >
                            </div>
                            <div class="col-md-6">
                              <label for="inputAddress">State Of Origin</label>
                              <input type="text"  name="stateoorigin" class="form-control" placeholder="contact Number" >
                            </div>
                            <div class="col-md-6">
                              <label for="inputAddress">L.G.A</label>
                              <input type="text"  name="lga" class="form-control" placeholder="contact Number" >
                            </div>                      
            </div>           
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">Permanent Address</label>
                        <textarea type="text" name="pmaddress" class="form-control" id="inputAddress" placeholder="Permanet Home address" required> </textarea>             
                        </div>
                  </div>
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">Postal Address</label>
                        <textarea type="text" name="psaddress" class="form-control" id="inputAddress" placeholder="Permanet Home address" required> </textarea>             
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
                                <input type="text"  name="phone1" class="form-control" placeholder="contact Number" required>
                          </div>                           
                            <div class="col-md-12">
                              <label for="inputAddress">2nd Kin Name</label>
                              <input type="text"  name="stateoorigin" class="form-control" placeholder="contact Number" >
                            </div>                                                  
            </div>           
          </div>
          <div class="col-md-8"> 
              <div class="group-list">                
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">First Next Of Kin Address/Phone No.</label>
                        <textarea type="text" name="pmaddress" class="form-control" id="inputAddress" placeholder="Permanet Home address" required> </textarea>             
                        </div>
                  </div>
                  <div class="row">                          
                        <div class="form-group col-md-12">                          
                        <label for="inputAddress">Seccond Next Of Kin Address/Phone No.</label>
                        <textarea type="text" name="psaddress" class="form-control" id="inputAddress" placeholder="Permanet Home address" required> </textarea>             
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
            <div class="col-md-10"><small><h4>O Level Paper(WAEC, NECO, e.t.c)</h4></small></div>
                <label  for="inputAddress">Name of O'Level Exam Type</label>
                <input class="col-md-10" type="text"  name="olschoolname" class="form-control" placeholder="Olevel exam type" required>
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
          </div>

  <div class="col-md-6">
          <div class="row"><small><h4>Previous Institution Info</h4></small></div>
          <div class="col-md-10">
                <label for="inputAddress">Highest Qualification</label>
                <input type="text" class="form-control" name="hqualification" placeholder="Highest Qualification" required>
          </div>            
          <div class="col-md-10">
                <label for="inputAddress">Institution Obtaned From</label>
                <input type="text" class="form-control" name="hqinstitution" placeholder="Institution obtained from" required>
          </div>
           <div class="col-md-5">
                <label for="inputAddress">Year Obtained</label>                
                <input type="text" class="form-control" name="hqyobtained" placeholder="Year obtained" required>
            </div>
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
  <br>
           <div class="col-5">              
                        <label for="inputAddress">Current Date Concluding Data Registration</label>           
                        <input type="text" class="form-control" value="<?= "20".date("y/m/d"); ?>" name="cbiodataregdate" placeholder="todays date" required>
            </div>
         

<!--Signature Corner -->
            
<hr>
            <div class="col-4">              
                <div class="form-group">
                 <h4 class="text-center">SignatureUpload</h4>
                 <img src="images/sign.jpg" id="sigdisplay" style="display: block; width: 50%; margin: 5px auto; border-radius: 70%;"/>                 
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
