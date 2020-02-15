<?php 
include('includes/pdo_connect.inc.php');
    
global $db;

	$coursesenter = $_POST['coursesenter'];
	$levelid = $_POST['levelid'];

	$save_course = "INSERT INTO  courses(course_id, courses_name, level_id,status)VALUES('', $coursesenter','$levelid', '')";
	$result = mysqli_query($db, $save_course);
	
 ?>