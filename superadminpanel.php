<?php session_start(); 
include 'includes/connector.inc.php';
if (isset($_SESSION['useradmin'])) {           
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel ="stylesheet" a href="css/bootstrap.css"/>
<link rel="stylesheet" a href="css/fonts.css"/>
<script src="js/bootstrapjquerry.js"></script>
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/proper.mini.js"></script>
<script src ="js/bootstrap.js"></script>
<title>Super Admin</title>

<style type="text/css">
  .ListDisplay{
    display: none;
  }
</style>

</head>
<body class="container">
    <nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Super Admin Panel</h3> <!-- registartion for New/fresher student -->
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
      </nav><br>
      <div> <h3 class="text-warning text-center">Welcome: <?php echo $_SESSION['useradmin']; ?></h3></div>
  <div class ="row">
    <div class="col-12">
      <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active btn-primary" href="adminsignup.php">To signup a New Admin User</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link active btn-success" href="addadmitedstud2.php">To Add  New Admitted Student</a>
  </li>
  <li class="nav-item">
    <a class="nav-link btn-dark"  href="#">Home Page</a>    
  </li>
  </ul>
    </div>
    
</div>

<div class="jumbotron">
<!-- Button trigger modal -->
   <!--for mutiple insertion-->
  <div class="row ">
    
    <div class="col-2.5">
      <button type="button" class="btn btn-primary" id="showStudentsList" data-toggle="modal" data-target="">
      Show List of All Students
      </button>
    </div>
    <div class="col-4">
      <a type="submit" class="btn btn-primary btn-block" href="insertmultiplecourses.php" class="btn btn-primary">Add several Courses At Once</a>
    </div> 
    
    <div class="col-3">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#infosection">
  Click to know LEVEL ID
</button>

<!-- Modal -->
<div class="modal fade" id="infosection" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">NOTE FOR LEVEL IDs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="card text-center">
          <div class="card-header">
          LEVEl:/SUBJECT:/ID:
          </div>
              <div class="card-body">                            
              <ul class="card-text list-group">
                <li class="list-group-item active">200 LEVEL</li>
                <li class="list-group-item">SUBJECT: Mathematics ID: 1</li>
                <li class="list-group-item">SUBJECT: Computer ID: 6</li>
                <li class="list-group-item">SUBJECT: Physics ID: 22</li>
                <li class="list-group-item">SUBJECT: Chemistry ID: 10</li>
                <li class="list-group-item">SUBJECT: Biology ID: 14</li>
                <li class="list-group-item">SUBJECT: Integrated science ID: 18</li>
                <li class="list-group-item ">300 LEVEL</li>
                <li class="list-group-item">SUBJECT: Mathematics ID:2</li>
                <li class="list-group-item">SUBJECT: Computer ID: 7</li>
                <li class="list-group-item">SUBJECT: Physics ID: 23</li>
                <li class="list-group-item">SUBJECT: Chemistry ID: 11</li>
                <li class="list-group-item">SUBJECT: Biology ID: 15</li>
                <li class="list-group-item">SUBJECT: Integrated science ID: 19</li>
                <li class="list-group-item active">400 LEVEL</li>
                <li class="list-group-item">SUBJECT: Mathematics ID: 3</li>
                <li class="list-group-item">SUBJECT: Computer ID: 8</li>
                <li class="list-group-item">SUBJECT: Physics ID: 24</li>
                <li class="list-group-item">SUBJECT: Chemistry ID: 12</li>
                <li class="list-group-item">SUBJECT: Biology ID: 16 </li>
                <li class="list-group-item">SUBJECT: Integrated science ID: 20</li>
                <li class="list-group-item active">500 LEVEL</li>
                <li class="list-group-item">SUBJECT: Mathematics ID: 4</li>
                <li class="list-group-item">SUBJECT: Computer ID: 9 </li>
                <li class="list-group-item">SUBJECT: Physics ID: 25</li>
                <li class="list-group-item">SUBJECT: Chemistry ID: 13</li>
                <li class="list-group-item">SUBJECT: Biology ID: 17</li>
                <li class="list-group-item">SUBJECT: Integrated science ID: 21</li>                          
             </ul>
              
              </div>
            <div class="card-footer text-muted">
            One Or More Subjects
            </div>
        </div>
      </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>
 
    </div>  
    
  </div>
</br>
</div>
<!-- Modal -->
<div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post" >
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <div class="form-group">
                  <label>Enter course name</label>
                  <input class="form-control" type="text" name="coursesenter" id="coursesenter" placeholder="Enter course detail(code/Name/CU)">
                  <label id="cname" style="color:red"></label>
                </div>

                <div class="form-group">
                  <label>Enter level Id</label>
                  <input class="form-control" type="text" name="levelid" id="levelid" placeholder="Enter level id">
                  <label id="lid" style="color:red"></label>
                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="savecourse">Save</button>
              </div>
      </div>
      </form>
          </div>
        </div>
      </div>
     </div>
    </div>
        </br>
    <div class="col-12">
    <h3 class="text-danger justify-content-center">Student Summary List</h3>
    </div>
    <hr>
  <br>
<h4 class="ListDisplay">All Students Registered</h4>
<div class="container card border-warning ListDisplay">  
  <br>
  <table class="table table-bordered table-warning table-sm table-hover display" id="studenttable">
  <thead>    
    <tr>
      <th >S/No</th>
      <th >Jambno</th>
      <th >Surname</th>
      <th >name</th>
      <th >othername</th>
      <th >Level</th>
      <th >Year Admitted</th>
      <th >View </th>
      <th >Edit </th>
      <th >Delete</th>
    </tr>
  </thead>
 </table>
<br>
</div>
<hr>
 
<hr>  
<div class="col-2">
    <form action = "includes/adminsignout.inc.php" method ="POST">
              <button type="submit" name ="adminout" class="btn btn-primary btn-block">Logout</button>
    </form>
</div>
  <br>
<nav class="navbar navbar-expand-lg bg-dark justify-content-center"> 
                <ul class="nav nav-pills nav-fi ll">
                        
                        <li>
                            <div class ="col-12">
                            <h3 class="text-center text-light font-weight-bold"> Super Admin Panel</h3> <!-- registartion for New/fresher student -->
                            </div>
                        </li>
                        <li class="nav-item">
                            
                        </li>
                   
  </nav><br>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>
<link rel="stylesheet" a href="DataTables/css/dataTables.bootstrap4.min.css"/>

<script src="DataTables/js/jquery.dataTables.min.js"></script>
<script >
    $('#mydata').dataTable();
    $('#mydata2').dataTable();
    $('#mydata3').dataTable();
    $('#mydata4').dataTable();
</script>
<script >
  $(document).ready(function(){
    $("#showStudentsList").click(function(){
      $(".ListDisplay").toggle(1000);
    });
  });
</script>
<script>
   $(document).ready(function() {
    $('#studenttable').DataTable( {
        "ajax": 'studentinfo_ajax.php'
    } );
} );

</script>
<?php
include_once 'includes/footer.inc.php';
?>

<?php }else{
  echo "Acess Denied!!";
} ?>