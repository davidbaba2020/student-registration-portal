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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
 <title>Add new Admitted Students</title>
</head>
<body>
<div class=container>
  
      <br>
      <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> <!-- To sign up for a new adminb -->
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Add New Student(s)</h3>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
<div class="jumbotron">
     <!--Add admitted student addmission code and name-->
    
  <div class ="row">
      
    <div class = "col-2">
      
    </div>
    <div class = "col-8">
      
        <div class="card-body col-12 card text-white bg-info">
        <div class ="card-header text-center"><strong>To Add New Admitted Student(s)</strong> </div>   
                <div> <!--No of insertion poin/Students -->
                  <form method="POSt" action="addadmitedstudtodb.php">
                    <table class="table">
                      <thead>
                        <tr>
                          <td scope="col"><h4 class="text-warning" >How many Students?</h4></td>
                          <td scope="col"><input type="text" name="noofstudents" class="form-control"  placeholder="Please, Enter no of students" required></td>
                        </tr>
                        <tr>
                          <td><input class="btn btn-success" type="submit" name="noOfRecords" value="DisplayInput"/> </td>
                        </tr>
                      </thead>
                    </table><br>     
                  </form>
                </div>

                                 
          </div>       

      </div>
      <div class = "col-2">
          
      </div>
      
  </div> 

<br>
<!--end below-->
</div>
<nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
    <ul class="nav nav-pills nav-fi ll text-right">
         <li class="nav-item">
        <a class="nav-link active text-right text-light font-weight-bold" href="superadminpanel.php">Back to Admin Panel</a>
         </li>                        
    </ul>
</nav>
    </br>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
</body>
</html>
