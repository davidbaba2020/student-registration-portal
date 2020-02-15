<?php
session_start();
include_once 'connector.inc.php';
//student addition panel
         for($n=1;$n<$_POST['number'];$n++){

        $sql3 = "INSERT INTO admittedstudents (studentname, jambno) values ('".$_POST['studentname'][$n]."','".$_POST['jambno'][$n]."')";
         }               
          
    if(mysqli_query($conn,$sql3))
        {
        echo  "<script>alert('Student Inserted Successfully!')</script>"; 
        echo  "<script>window.open('Locatiuon:../addadmitedstud.php')</script>";
        exit();
        }else
        {
            echo  "<script>alert('Error Inserting!')</script>";             
        } 