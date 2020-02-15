<?php
//Include database configuration file
include('includes/pdo_connect.inc.php');

$departement=$_POST['departement'];

if(isset($_POST["departement"]))
{
    //Get all levels data
    $query = $db->query("SELECT * FROM level WHERE departement_id = ".$_POST["departement"]." AND status = 1 ORDER BY level_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display levels list
    if($rowCount > 0)
    {
        echo '<option value="">Select Level</option>';
        while($row = $query->fetch_assoc())
        { 
            echo '<option value="'.$row['level_id'].'">'.$row['level_name'].'</option>';
        }
    }else{
        echo '<option value="">Level  not available</option>';
    }
}

if(isset($_POST["level"]))
{
    //Get all courses data
    $level=$_POST['level'];
    $query = $db->query("SELECT * FROM courses WHERE level_id = ".$_POST['level']." AND status = 1 ORDER BY courses_name ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display courses list
    if($rowCount > 0){
        echo '<option value="">Select Courses</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['courses_name'].'">'.$row['courses_name'].'</option>';
        }
    }else{
        echo '<option value="">courses not available</option>';
    }
}
?>