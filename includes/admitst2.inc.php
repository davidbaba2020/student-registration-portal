<?php
session_start();
include_once 'connector.inc.php';
//student addition panel
         if (isset($_POST['admsubmit'])){

        $studentname = filter_input(INPUT_POST, 'studentname');
        $jambno = filter_input(INPUT_POST,'jambno');
         
          //Check if jamb number exist
        $sql2="SELECT * FROM admittedstudents WHERE jambno='$jambno'";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck2 = mysqli_num_rows($result2);
            }
              
        if ($resultCheck2 > 0){
        header("Location: ../addadmitedstud.php?signup=Jambnoexist");
        exit();
        }else{
    
        //insert student
        $sql3 = "INSERT INTO admittedstudents (studentname, jambno) values ('$studentname','$jambno')";
                    
                }

    if(mysqli_query($conn,$sql3))
    {
        echo  "<script>alert('Student Inserted Successfully!')</script>"; 
        echo  "<script>window.open('Locatiuon:../adminpanel.php')</script>";

        }