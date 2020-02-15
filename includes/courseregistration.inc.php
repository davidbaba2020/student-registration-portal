<?php
session_start();
include_once 'connector.inc.php';

   if(isset($_POST['course_submit'])){
    
        
        $jambno = $_SESSION['jambno'];
        $studid = $_SESSION['studentid'];
        $clevel=$_SESSION['clevel'];
        $regno=$_SESSION['regno'];
        $STATUS = "REGISTERED";
        $fisrtsemcourse1 ="Teaching Practice" ;
        $fisrtsemcourse2="IT" ;

//validate and check
        $fscourse1=filter_input(INPUT_POST, 'fscourse1');
        $sscourse1 =filter_input(INPUT_POST, 'sscourse1');
        $fscourse2 =filter_input(INPUT_POST, 'fscourse2');
        $sscourse2 =filter_input(INPUT_POST, 'sscourse2');
        $fscourse3 =filter_input(INPUT_POST, 'fscourse3');
        $scourse3 =filter_input(INPUT_POST, 'scourse3');
        $fscourse4 =filter_input(INPUT_POST, 'fscourse4');
        $sscourse4 =filter_input(INPUT_POST, 'sscourse4');
        $fscourse5 =filter_input(INPUT_POST, 'fscourse5');
        $sscourse5 =filter_input(INPUT_POST, 'sscourse5');
        $fscourse6 =filter_input(INPUT_POST, 'fscourse6');
        $sscourse6 =filter_input(INPUT_POST, 'sscourse6');
        $fscourse7 =filter_input(INPUT_POST, 'fscourse7');
        $sscourse7 =filter_input(INPUT_POST, 'sscourse7');
        $fscourse8 =filter_input(INPUT_POST, 'fscourse8');
        $sscourse8 =filter_input(INPUT_POST, 'sscourse8');
        $fscourse9 =filter_input(INPUT_POST, 'fscourse9');
        $sscourse9 =filter_input(INPUT_POST, 'sscourse9');
        $fscourse10 =filter_input(INPUT_POST, 'fscourse10');
        $sscourse10=filter_input(INPUT_POST, 'sscourse10');
        $cregdate=filter_input(INPUT_POST, 'cregdate');
        

        $sql="SELECT * FROM 200levelcourses WHERE jambno ='$jambno'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
     
     if ($resultCheck > 0){
        echo  "<script>alert('Your are registered for 200Level!')</script>";             
        echo  "<script>window.location.href='../studentpanel.php'</script>";  
        exit();

    }else{
        $sql = "INSERT INTO 200levelcourses (studid,Reg_No,jambno,reg_date,200first_sem_course1,200first_sem_course2,200first_sem_course3,200first_sem_course4,200first_sem_course5,200first_sem_course6,200first_sem_course7,200first_sem_course8,200first_sem_course9,200first_sem_course10,200Second_sem_course1,200Second_sem_course2,200Second_sem_course3,200Second_sem_course4,200Second_sem_course5,200Second_sem_course6,200Second_sem_course7,200Second_sem_course8,200Second_sem_course9,200Second_sem_course10,STATUS) values ('$studid','$regno','$jambno','$cregdate','$fscourse1','$fscourse2','$fscourse3','$fscourse4','$fscourse5','$fscourse6','$fscourse7','$fscourse8','$fscourse9','$fscourse10','$sscourse1','$sscourse2','$sscourse3','$sscourse4','$sscourse5','$sscourse6','$sscourse7','$sscourse8','$sscourse9','$sscourse10','$STATUS')";                        
         $courseinsert200=mysqli_query($conn,$sql);
        if ($courseinsert200)
            {
            echo '<script type ="text/javascript">alert("Courses Registered Successfully!")</script>';
            echo  "<script>window.location.href='../studentpanel.php'</script>";   
                exit(); 
            }else
            {
                echo '<script type ="text/javascript">alert("An error occured while saving your courses, try again")</script>';
                echo  "<script>window.location.href='../courseregistration.php'</script>";   
                exit();            
             }
            }
}

