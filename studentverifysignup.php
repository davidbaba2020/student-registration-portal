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
<script src="js/proper.mini.js"></script>
<script src ="js/bootstrap.js"></script>
  <title>New Student  Signup</title>
</head>
<body>
<div class=container>
  
      <br>
      <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> New Student Signup</h3>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="jumbotron" style ="background:url('images/2.jpg'); background-size:cover;">
        <form action="includes/verify.inc.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-1">
                        
                    </div>
                    <div class="form-group col-md-5">
                       <label class = "text-primary">SURE NAME/As in Admision Letter</label>
                        <input class="form-control" name="studentSurename" placeholder="SureNameonAdmissionletter" required>
                    </div>
                    <div class="form-group col-md-5">
                        <label class = "text-primary" >JAMB NUMBER</label>
                        <input type="text" name="jambno" class="form-control"  placeholder="JambNo" required>
                    </div>
                    <div class="form-group col-md-1">
                        
                    </div>
                </div>

                <button type="submit" name="verify_submit" class="btn btn-primary">Verify Your Admission</button>
        </form>
                <div class="form-group">
                </div>
                
                <div class="form-group">
                <div class="form-check">

    <div class="card text-center">
              <div class="card-header">
                <h4>NOTE!!!</h4>
              </div>
              <div class="card-body">
                <h5 class="card-title">Creating An Account</h5>
                <p class="card-text">If you have recieved your admission letter, you can log in with the name stated on the letter as userid  and your jamb number as password in the form above. For any issues, visit the ICT Unit of the admission Unit</p>
                <p>If your are a returning student, click below to login</p>
                <a href="studentlogin.php" class="btn btn-primary">Login if verified</a>
              </div>
              <div class="card-footer text-muted">
              </div>
    </div>
                    </div>
                </div>
                </div>
        <div >
      <br>
      <nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll text-right">
                        <li class="nav-item">
                            <a class="nav-link active text-right text-light font-weight-bold" href="index.php">Back to Home Page</a>
                        </li>   

                </ul>
      </nav><br>
</div>

</body>
</html>