<?php
session_start();
include_once 'connector.inc.php';

    $studentname = filter_input(INPUT_POST, 'studentname');
    $jambno = filter_input(INPUT_POST,'jambno');
    
  
    //Check ifJamb no exist
        
        $sql="SELECT * FROM admittedstudents WHERE jambno ='$jambno'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
           
              
        if ($resultCheck > 0){
        header("Location: ../superadminpanel.php?signup=jamb no exist");
        exit();
        }else{
    
        $sql = "INSERT INTO admin (studentname, jambno) values ('$studentname','$jambno')";
                    
                }

    if(mysqli_query($conn,$sql))
    {
        echo "student Inserted!";

        }
    
?>