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
<?php $number =$_POST['noofstudents']; ?>
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
    
    <div class = "container col-12">
      
        <div class="card-body col-12 card text-white bg-info">             
           
                <table class="table"><!--Header side -->
                                <thead class="thead-dark text-center">
                                  <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Jamb No.</th>
                                  </tr>
                                </thead>
                </table>    
                
          </div>       

      </div>
      <div class="justify-content-center card-body col-12">        
      <form class="form-group" action="includes/admitst.inc.php" method="POST"> <!-- insert new student -->
        <tr><th><input type="hidden" value="<?php echo $number;?>" name="number"></th></tr> 
        <?php 
            for($i=1; $i<=$number; $i++){
          ?>             
                 
                <div class="form-group">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row"><input type="text" name="studentname[]" class="form-control"  placeholder="Please, enter student name"></th>
                          <td><input type="text" name="jambno[]" class="form-control"  placeholder="Please, student Jamb number"></td>
                        </tr>                    
                      </tbody>
                    </table>
                    <?php } ?>                                 
                    <div class=" row justify-content-center"><button type="submit" class="btn btn-primary" name="admsubmit">Add admited student</button>     
        
                    </div>                   
                </div>
            </form>     
      </div>     
      
  </div>
<br>  
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg bg-success justify-content-center"> 
                      <ul class="nav nav-pills nav-fill">
                              
                              <li>
      <div class ="container">
        <h3 class="text-center text-light font-weight-bold"> Add Multiple Students at Once</h3>
</nav>
        
<br>    
<nav class="navbar navbar-expand-lg bg-dark"> <!-- To sign up for a new adminb -->
    <ul class="nav nav-pills nav-fi ll text-right">
         <li class="nav-item">
        <a class="nav-link active text-right text-light font-weight-bold" href="addadmitedstud.php">Back to Number Page</a>
         </li>                        
    </ul>
      </nav>
    </br>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
</br>
<!--end below-->
</body>
</html>
