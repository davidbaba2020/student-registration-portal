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
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
<script src="js/printThis.js"></script>
<script src ="js/bootstrap.js"></script>
<title>Student Profile</title>
</head>

<body>
  <script>
  $('#container').click(function(){
    $('.toprint').printThis();
  });
  
</script>
<section class ="container " style="background-color:#e9ecef">
    <div class="container toprint">
              
          <div class="card text-center">
          <div class="card-header"><h5>SCHOOL OF UNDERGRADUATE
          FEDERAL COLLEGE OF EDUCATION (TECHNICAL) GOMBE, GOMBE STATE</h5></div>
          <div>In Affiliation With</div>
            
          <div class="row col-12">
          <div class="col-3">
                <img  src="images/fce.png" id="profiledisplay" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
          </div>
          <div class="col-6"><h5>ABUBAKAR TAFAWABALEWA UNIVERSITY BAUCHI, BAUCHI STATE</h5></div>
          <div class="col-3">
                <img  src="images/atbu.png" id="profiledisplay" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
          </div>  
          </div>  
          </div>

    </div> 

     <div class=" container row">
        <div class="col-md-4"></div>
        <div class="col-4">
                    <div class="form-group">
                    <img  src="images/placeholder.jpg" id="profiledisplay" style="display: block; width: 50%; margin: 10px auto; border-radius: 50%;" />
                    </div>
        </div>
        <div class="col-4"></div>
    </div> 
    <div class="row card container">
        <div class=" col-3"></div>
        <div class="card col-12 text-center"><h3>STUDENT NAME</h3></div> 
    <table class="table table-bordered">
          <div class="table-responsive-md" >
              <tr>
                <th scope="col">Matric/No.</th>
                <td><div class="col-5"></td>
                <th scope="col">Name</th>
                <td><div class="col-5"></td>
                <th scope="col">Jamb No.</th>
                <td><div class="col-5"></td>
              </tr>
          <tbody>
              <tr>
                <th scope="col"">Email</th>
                <td><div class="col-4"></div></td>
                <th scope="col">Country</th>
                <td ><div class="col-4"></div></td>
                <th scope="col">State Of Origin</th>
                <td ><div class="col-4"></div></td>
              </tr>
                <tr>
                <th scope="col"">L.G.A</th>
                <td><div class="col-4"></div></td>
                <th scope="col">Gender</th>
                <td ><div class="col-4"></div></td>
                <th scope="col">Phone No.</th>
                <td ><div class="col-4"></div></td>
              </tr>   
              <tr>
                <th scope="col"">Departement</th>
                <td><div class="col-4"></div></td>
                <th scope="col">Course of Study</th>
                <td ><div class="col-4"></div></td>
                <th scope="col">Semester</th>
                <td ><div class="col-4"></div></td>
              </tr> 

              <tr>
                <th scope="col"">Next Of Kin</th>
                <td><div class="col-4"></div></td>
                <th scope="col"></th>
                <td ><div class="col-4"></div></td>
                <th scope="col"></th>
                <td ><div class="col-4"></div></td>
              </tr>  
          </tbody>

          </div>      
    </table>
    </br>
<!-- For Courses Registered-->
    <table class="table table-bordered toprint">
          <tr>
          <th scope="col"">Contact Address</th>
          <th><div class="col-8"></div></th>
        </tr>      
    </table>
    <div class="toprint">
      <h4>Courses Registered For</h4>
    <table class="table table-bordered">
          <tr>
          <th scope="col">#</th>
          <th scope="col">Course Details</th>      
        </tr>       
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>      
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jacob</td>      
        </tr>
        <tr>
        <th scope="row">4</th>
        <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Jacob</td>      
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Jacob</td>      
        </tr>
      </tbody>
    </table>
  </div>
<div class=" col-3"></div>
</br>
</br> 
<div class ="container col-12 toprint" >
        <button type="submit" id="printProfile" name ="printProfile" class="btn btn-success">Print Profile</button>
     
</div>
</br>
</div>
<br>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
</div>
</section>
</body>




<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>