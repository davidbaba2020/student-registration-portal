<?php
session_start();

if (isset($_POST['submitin'])){

include 'connector.inc.php';


	$useradmin = mysqli_real_escape_string($conn, $_POST['useradmin']);
	$passadmin = mysqli_real_escape_string($conn, $_POST['passadmin']);

	//Error handlers
	//check if inputs are empty

if (empty($useradmin)||empty($passadmin)){

		header("Location: ../adminlogin.php?login=error1a");
		exit();
}else{
	$sqladm ="SELECT * FROM admin WHERE userAdmin='$useradmin' OR emailAdmin='$useradmin'";
	$resultadm = mysqli_query($conn,$sqladm);
	$resultadmCheck = mysqli_num_rows($resultadm);

	if($resultadmCheck < 1){
		echo  "<script>alert('Wrong Credentials, try to login again!')</script>"; 
        echo  "<script>window.location.href='../adminlogin.php'</script>";
	}else{
		
		$sqladm2 ="SELECT * FROM admin WHERE userAdmin='$useradmin' OR emailAdmin='$useradmin' AND passAdmin='$passadmin'";
		$resultadm2 = mysqli_query($conn,$sqladm2);
		$resultcheckadm2 = mysqli_num_rows($resultadm2);

		if ($resultcheckadm2 < 1){
			echo  "<script>alert('Wrong Credentials, try to login again!')</script>"; 
            echo  "<script>window.location.href='../adminlogin.php'</script>";
			
	}elseif($row= mysqli_fetch_assoc($resultadm2)){
		//log in admin
 				$_SESSION['useradmin'] =$useradmin;			
				header("Location: ../superadminpanel.php?Login=success");
				exit();
			}
		}
	}
} else{
	echo  "<script>alert('Wrong Credentials, try again!')</script>"; 
    echo  "<script>window.location.href='../adminlogin.php'</script>";
}

