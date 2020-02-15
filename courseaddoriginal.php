<?php
//Include database configuration file
include('includes/pdo_connect.inc.php');

if(isset($_POST["departement_id"]) && !empty($_POST["departement_id"])){
    //Get all state data
    $query = $db->query("SELECT * FROM level WHERE departement_id = ".$_POST['departement_id']." AND status = 1 ORDER BY level_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select Level</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['level_id'].'">'.$row['level_name'].'</option>';
        }
    }else{
        echo '<option value="">Level not available</option>';
    }
}

if(isset($_POST["level_id"]) && !empty($_POST["level_id"])){
    //Get all city data
    $query = $db->query("SELECT * FROM courses WHERE level_id = ".$_POST['level_id']." AND status = 1 ORDER BY courses_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select Courses</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['courses_id'].'">'.$row['courses_name'].'</option>';
        }
    }else{
        echo '<option value="">courses not available</option>';
    }
}
?>