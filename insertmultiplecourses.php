<?php session_start(); 
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
<title>Multiple Course input</title>
</head>
<body>
</body>
</html>
<!--starting-->
<div class="container">

       </br>
      <nav class="navbar navbar-expand-lg bg-info justify-content-center"> 
                      <ul class="nav nav-pills nav-fi ll">
                              
                              <li>
                                  <div class ="col-12">
                                  <h3 class="text-center text-light font-weight-bold"> Multiple Course input</h3> <!-- registartion for New/fresher student -->
                                  </div>
                              </li>
                              <li class="nav-item">                         
                              </li>
                      </ul>
                         
      </nav>
      </br>

      <table class="table table-bordered" id="crud_table">

                <thead>
                <tr>
                  <th width=30%">Course_name</th>
                  <th width="30%">Level_ID</th>
                  <th width="5%"></th>
                </tr>
        
                </thead>
                <tr>
                    <td contenteditable="true" class="course_name"></td>
                    <td contenteditable="true" class="level_id"></td>
                    <td></td>   
                </tr>
      </table>     
       
      <div align="right">
        <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
      </div>
      <div align="center">
        <button type="button" name="save" id="save" class="btn btn-info">SAVE TO DB</button>
      </div>
      <br/>
      <div id="inserted_item_data"></div>
      </br>
      </br>
</div>
  <div align="center">
    <button> 
        <a class="btn btn-danger btn-bg" href="superadminpanel.php">Back to Admin Panel</a>
    </button> 
  </div>
  <br>
<footer class="col=sm-12 text-muted"> <!-- footer at the home page -->
    <div class="container">
        <h6 class="text-center text-success">&copy; copyright November, 2018<br><small class="text-warning">Coded by David Baba</small></h6>
        
    </div>
</footer>

<!--end below-->
</body>
</html>

<script>
  $(document).ready(function(){

    var count = 1;
    $('#add').click(function(){
      var html_code ="<tr id='row"+count+"'>";
      html_code += "<td contenteditable = 'true' class='course_name'></td>";
      html_code += "<td contenteditable = 'true' class='level_id'></td>";
      html_code += 
      "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'> - </button></td>";
      html_code += "</tr>";
      $('#crud_table').append(html_code);
       
    });
    $(document).on('click', '.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();
    });

    $('#save').click(function(){

      var course_name= [];
      var level_id= [];

      $('.course_name').each(function(){
        course_name.push($(this).text()); 
      });

      $('.level_id').each(function(){
        level_id.push($(this).text()); 
      });
      $.ajax({

          url: "includes/insert_multiple_courses.php",
          method: "POST",
          data: {course_name: course_name, level_id: level_id},
          success:function(data)
          {
              $("td[c ontenteditable='true']").text("");
              for (var i=2; i<=count; i++)
              {
                $('tr#'+i+'').remove();
              }
          }

      });
    });
  });
</script>

<?php }else{
  echo "Access Denied!";
}
 ?>