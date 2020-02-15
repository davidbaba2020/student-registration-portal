<?php
include_once 'includes/header.inc.php';
?>
  <title>Admin Information Page</title>
</head>
<body >
  <section class="container" style="background-color: #cbcd">
     <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> JUST ADMITED ?</h3> <!-- registartion for New/fresher student -->
                            <small><h5 class="text-center text-light font-weight-bold"> Read through and Know the following..Just Admitted ?</h5></small>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
    
 <div class="jumbotron">
 <h4>   Welcome to the School of science Undergraduate Online Registration Portal.</h4>
<h5 class = "text text-justify text-primary">
  The following instructions are very vital when it comes to your registration process. Every neccessary information you need before starting you registration are clearly described here and furhter information can be gotten by visiting the student hand book. Read through thoroughly before you go ahead to register.
  New Student implies the new 200 level students since we are yet to commence the 100 Level programme.</h5><br>
  <strong class="list-unstyled text-primary"><u>Note the following:</u></strong>
   <ul class="text-primary">
      <li>Check your admission Status</li>
      <li>Open an account to progress for registration</li>
      <li> Go through Your requirements and make sure you meetup to standard by visiting the student hand book</li>
      <li>Make sure you fill every information and submit.</li>
      <li>Log in again to confirm you are registered and proceed to register your courses which you can see by visiting the student hand book</li>
  </ul>

<?php
    include_once 'includes/allstudents.php';
?>
    
</div>
 </section>
 <div class="container">
   <button class="btn btn-warning"><a  href="studentverifysignup.php">Click Here to verify your Admission </a></button>
 </div> 
 <br>
<br>
 
 
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
</body>
</html>
