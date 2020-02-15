<?PHP

 if (isset($_POST['studaccsubmit'])){
        $_SESSION['studentemail'] = filter_input(INPUT_POST, 'studentemail');
        $_SESSION['jambno'] = filter_input(INPUT_POST, 'jambno');
        $_SESSION['passwordstudent'] = filter_input(INPUT_POST,'psd');
        $confirmpsdstudent = filter_input(INPUT_POST,'cpsd');
        $_SESSION['sname'] = filter_input(INPUT_POST,'sname');
        $_SESSION['oname'] = filter_input(INPUT_POST,'sname');
        $_SESSION['regno'] = filter_input(INPUT_POST,'regno');
        $_SESSION['sex'] = filter_input(INPUT_POST,'sex');
        $mstatus = filter_input(INPUT_POST,'mstatus');
        $dob = filter_input(INPUT_POST,'dob');
        $nationality = filter_input(INPUT_POST,'nationality');
        $stateoorigin= filter_input(INPUT_POST,'stateoorigin');
        $lga = filter_input(INPUT_POST,'lga');
        $phone1 = filter_input(INPUT_POST,'phone1');
        $phone2 = filter_input(INPUT_POST,'phone2');
        $pmaddress = filter_input(INPUT_POST,'pmaddress');
        $psaddress= filter_input(INPUT_POST,'psaddress');
        $kinname1= filter_input(INPUT_POST,'kinname1');
        $addressnnumkin1= filter_input(INPUT_POST,'addressnnumkin1');
        $kinname2 = filter_input(INPUT_POST,'kinname2');
        $addressnnumkin2 = filter_input(INPUT_POST,'addressnnumkin2');
        $_SESSION['ccstudy'] = filter_input(INPUT_POST,'ccstudy');
        $_SESSION['cschool'] = filter_input(INPUT_POST,'cschool');
        $_SESSION['clevel'] = filter_input(INPUT_POST,'clevel');
        $cdepartment = filter_input(INPUT_POST,'cdepartment');
        $cyadmited = filter_input(INPUT_POST,'cyadmited');
        $cduration = filter_input(INPUT_POST,'cduration');
        $cyregistering = filter_input(INPUT_POST,'cyregistering');
        $cdate = filter_input(INPUT_POST,'cdate');

		// Process Passport
		$FILE = $_FILES['upload'];
		$filePassName = $_FILES['upload']['name'];
		$filePassTmpName = $_FILES['upload']['tmp_name'];
		$filePassSize = $_FILES['upload']['size'];

		$fileExt = explode('.', $filePassName);
		$fileActualExt = strtolower(end($fileExt));

		if ($filePassSize < 2097152) {
		$filePassNew = uniqid('',true).".".$fileActualExt;
		$filePassDestination ='../passport/'.$filePassNew;
		 move_uploaded_file($filePassTmpName, $filePassDestination);

		//Check if username exist
		$sql2="SELECT * FROM studentlogin WHERE studentemail='".$_SESSION['studentemail']."'";
		$result2 = mysqli_query($conn, $sql2);
		$resultCheck = mysqli_num_rows($result2);

		if ($resultCheck > 0){
		    echo  "<script>alert('Student User already exist!')</script>"; 
		    echo  "<script>window.open('Locatiuon: studentsignup.php')</script>";

		}else{ 
		   if($_SESSION['passwordstudent']!=$confirmpsdstudent){

				echo  "<script>alert('password does not match!')</script>"; 
		        echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";

		}else{
          //Create account
       	$sql3 = "INSERT INTO studentlogin(studentemail, passwordstudent,jambno) values ('".$_SESSION['studentemail']."','".$_SESSION['passwordstudent']."','".$_SESSION['jambno']."')";
          
        $sql4 = "INSERT INTO studentinformation1(studemail,studimg,jambno,psd,sname,othernames,sex,mstatus,dob,nationality,stateoorigin,lga,phone1,phone2,permaddress,postaddress,kinname1,kinaddnnum1,kinname2,kinaddnnum2,ccstudy,cschool,clevel,cdepartement,yadmited,cduration,cyregistered,cdate,regno) values ('".$_SESSION['studentemail']."','".$_SESSION['passwordstudent']."','".$_SESSION['jambno']."')";              
                }
         if(mysqli_query($conn, $sql3)) || if(mysqli_query($conn, $sql4)){
        	
        	echo  "<script>alert('Student Account Created Successfully!')</script>"; 
        	echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";

        }else {
        	echo  "<script>alert('Something went wrong while saving!')</script>";
        } 
}
//passportif
  }else{
      echo  "<script>alert('Your Pasport is bigger than 2MB, size or Upload another one!!!')</script>";      
    } 

    //////////////////////////////////////////////
     if (isset($_POST['studaccsubmit'])){
        $_SESSION['studentemail'] = filter_input(INPUT_POST, 'studentemail');
        $_SESSION['jambno'] = filter_input(INPUT_POST, 'jambno');
        $_SESSION['passwordstudent'] = filter_input(INPUT_POST,'psd');
        $confirmpsdstudent = filter_input(INPUT_POST,'cpsd');
        $_SESSION['sname'] = filter_input(INPUT_POST,'sname');
        $_SESSION['oname'] = filter_input(INPUT_POST,'sname');
        $_SESSION['regno'] = filter_input(INPUT_POST,'regno');
        $_SESSION['sex'] = filter_input(INPUT_POST,'sex');
        $mstatus = filter_input(INPUT_POST,'mstatus');
        $dob = filter_input(INPUT_POST,'dob');
        $nationality = filter_input(INPUT_POST,'nationality');
        $stateoorigin= filter_input(INPUT_POST,'stateoorigin');
        $lga = filter_input(INPUT_POST,'lga');
        $phone1 = filter_input(INPUT_POST,'phone1');
        $phone2 = filter_input(INPUT_POST,'phone2');
        $pmaddress = filter_input(INPUT_POST,'pmaddress');
        $psaddress= filter_input(INPUT_POST,'psaddress');
        $kinname1= filter_input(INPUT_POST,'kinname1');
        $addressnnumkin1= filter_input(INPUT_POST,'addressnnumkin1');
        $kinname2 = filter_input(INPUT_POST,'kinname2');
        $addressnnumkin2 = filter_input(INPUT_POST,'addressnnumkin2');
        $_SESSION['ccstudy'] = filter_input(INPUT_POST,'ccstudy');
        $_SESSION['cschool'] = filter_input(INPUT_POST,'cschool');
        $_SESSION['clevel'] = filter_input(INPUT_POST,'clevel');
        $cdepartment = filter_input(INPUT_POST,'cdepartment');
        $cyadmited = filter_input(INPUT_POST,'cyadmited');
        $cduration = filter_input(INPUT_POST,'cduration');
        $cyregistering = filter_input(INPUT_POST,'cyregistering');
        $cdate = filter_input(INPUT_POST,'cdate');

        //Check if username exist
        $sql2="SELECT * FROM studentlogin WHERE studentemail='".$_SESSION['studentemail']."'";
        $result2 = mysqli_query($conn, $sql2);
        $resultCheck = mysqli_num_rows($result2);
            
              
        if ($resultCheck > 0){
        	echo  "<script>alert('Student User already exist!')</script>"; 
        	echo  "<script>window.open('Locatiuon: studentsignup.php')</script>";
        

        }else{ 
        	if($_SESSION['passwordstudent']!=$confirmpsdstudent){
  			
  			echo  "<script>alert('password does not match!')</script>"; 
        	echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";

        	}else{
            print_r($_FILES);
            print_r($_POST);
        	//Create account
       		$sql3 = "INSERT INTO studentlogin(studentemail, passwordstudent,jambno) values ('".$_SESSION['studentemail']."','".$_SESSION['passwordstudent']."','".$_SESSION['jambno']."')";
          
          $sql4 = "INSERT INTO studentinformation1(studemail,studimg,jambno,psd,sname,othernames,sex,mstatus,dob,nationality,stateoorigin,lga,phone1,phone2,permaddress,postaddress,kinname1,kinaddnnum1,kinname2,kinaddnnum2,ccstudy,cschool,clevel,cdepartement,yadmited,cduration,cyregistered,cdate,regno) values ('".$_SESSION['studentemail']."','".$_SESSION['passwordstudent']."','".$_SESSION['jambno']."')";              
                }

    		if(mysqli_query($conn, $sql3)){
        	
        	echo  "<script>alert('Student Account Created Successfully!')</script>"; 
        	echo  "<script>window.open('Locatiuon:../studentsignup.php')</script>";

        } 
    }
}
        ?>



        // Process Passport
$FILE = $_FILES['upload'];
$filePassName = $_FILES['upload']['name'];
$filePassTmpName = $_FILES['upload']['tmp_name'];
$filePassSize = $_FILES['upload']['size'];

$fileExt = explode('.', $filePassName);
$fileActualExt = strtolower(end($fileExt));

    if ($filePassSize < 2097152) {
      $filePassNew = uniqid('',true).".".$fileActualExt;
      $filePassDestination ='../passport/'.$filePassNew;
      move_uploaded_file($filePassTmpName, $filePassDestination);




      }else{
      echo "Your Pasport is bigger than 2MB, esize or Upload another one!!";
    } 


$_SESSION['email']=$studentemail;               
                $_SESSION['studimg']=$studentemail;
                $_SESSION['jambno']=$snametudentemail;
                $_SESSION['sname']= 'sname';
                $_SESSION['othernames']=$studentemail;
                $_SESSION['email']=$studentemail;
                $_SESSION['studentid']=$studentemail;
                $_SESSION['clevel']=$studentemail;
                $_SESSION['yadmited']=$studentemail;