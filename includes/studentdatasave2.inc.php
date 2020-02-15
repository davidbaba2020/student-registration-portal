<?php
include_once 'connector.inc.php';
session_start();
$email=$_SESSION['email'];

if(isset($_POST['submitdata1']))
{
// Process Passport
$FILE = $_FILES['upload'];
$fileName = $_FILES['upload']['name'];
$fileTmpName = $_FILES['upload']['tmp_name'];
$fileSize = $_FILES['upload']['size'];
$fileError = $_FILES['upload']['error'];
$fileType = $_FILES['upload']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowedfile = array('jpg', 'jpeg', 'png', 'gif');
	if (in_array($fileActualExt, $allowedfile)) 
	{		
			if ($fileSize < 5000000)
			{
				//$fileNewname = "PrifileImage".$id.".".$fileActualExt;
				$fileNewname = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../image/uploads'.$fileNewname;
				if (move_uploaded_file($fileTmpName,  $fileDestination)){
				
						//

// Process Signature
					
					$FILESIG = $_FILES['signatureUpload'];

					$fileNamesig = $_FILES['signatureUpload']['name'];
					$fileTmpNamesig = $_FILES['signatureUpload']['tmp_name'];
					$fileSizesig = $_FILES['signatureUpload']['size'];
					$fileErrorsig = $_FILES['signatureUpload']['error'];
					$fileTypesig = $_FILES['signatureUpload']['type'];

					$fileExtsig = explode('.', $fileNamesig);
					$fileActualExtsig = strtolower(end($fileExtsig));

					$allowedfilesig = array('jpg', 'jpeg', 'png', 'gif');
									if (in_array($fileActualExtsig, $allowedfilesig)) 
									{
										if ($fileSizesig < 5000000)
											{
												$fileNewnamesig = uniqid('', true).".".$fileActualExtsig;
												$fileDestinationsig = '../image/signature'.$fileNewnamesig;
												if (move_uploaded_file($fileTmpNamesig,  $fileDestinationsig)){										sname
oname
jnom
sex
mstatus
dob
nationality
stateoorigin
lga
email
phone1
phone2
pmaddress
psaddress


														// Record insertion
														extract($_POST);														
														$studdatasql = "INSERT INTO `studentinformation` VALUES ('',$fileDestination','$jambno','$email','$fileDestinationsig','$surename','$othernames','$gender','$mstatus','$dob','$nationality','$stateoorigin','$lga','$phone1','$phone2','$pmaddress','$psaddress','$kinname1','$addressnnumkin1','$kinname2','$addressnnumkin2','$primschname','$primstartyear','$primfinishyear','$secondaryname','$secondarystart','$secondaryfinish','$olschoolname','$olsubject1','$olsubject2','$olsubject3','$olsubject4','$olsubject5','$olgrade1','$olgrade2','$olgrade3','$olgrade4','$olgrade5','$hqualification','$hqinstitution','$hqyobtained','$alsubject1','$alsubject2','$alsubject3','$alsubject4','$algrade1','$algrade2','$algrade3','$algrade4','$ccstudy','$cschool','$clevel','$cdepartment','$cyadmited','$cduration','$cyregistering','$cdate')";						
													//recond insert else
														if (mysqli_query($conn, $studdatasql))
														{

																  	echo "Registered successfully";
																  	//header("Location: ../studentpanel.php?Record=successaved");			
																	exit();
														}else{		  	
																  	header("Location: studentregistration.php? Error occured in saving record" );		  		
																  	exit();
														}												

									//signature else
												}else{
													echo "Problem saving signature to directory";
												}
											}else{
												echo "Size of signature too big!";
											}

									}else{
										echo "Signature of this type not allowed!";
									}

									}
				// passport else
								}else {
									echo "Your Passport is too big!";
								}
							
						}else{
							echo "This Passport type is not allowed!";
						}

				//


$sname
$oname
$jnom
$sex
$mstatus
$dob
$nationality
$stateoorigin
$lga
$email
$phone1
$phone2
$pmaddress
$psaddress
$kinname1
$addressnnumkin1
$kinname2
$addressnnumkin2
$primaryschoolname
$primaryStartyear
$primaryfinishyear
$secondaryname
$secondarystart
$secondaryfinish
$olschoolname
$olsubject1
$olgrade1
$olsubject2
$olgrade2
$olsubject3
$olgrade3
$olsubject4
$olgrade4
$olsubject5
$olgrade5
$hqualification
$hqinstitution
$hqyobtained
$alsubject1
$algrade1
$alsubject2
$algrade2
$alsubject3
$alsubject4
$ccstudy
$cschool
$clevel
$cdepartment
$cyadmited
$cduration
$cyregistering
$cdepartment


}

// works 
<?php

//Passport Processing
$whereToPassSaveto="../image/uploads";
$passportToCopy=$_FILES['upload']['name'];
$passportFrom=$_FILES['upload']['tmp_name'];
$whereToPassSaveto=$whereToPassSaveto."/".$passportToCopy;
if (move_uploaded_file($passportFrom, $whereToPassSaveto)) {
	//Signature Processing
	$whereToSigSaveto="../image/signature";
	$SignatureToCopy=$_FILES['signatureUpload']['name'];
	$SignatureToFrom=$_FILES['signatureUpload']['tmp_name'];
	$whereToSigSaveto=$whereToSigSaveto."/".$SignatureToCopy;
	if (copy($SignatureToFrom, $whereToSigSaveto)){

		

//
//Data Processing into DB!!


		


//



	}else{
		echo "error uploading Signature";
	}
	}else{
		echo "error uploading Picture";
	}
//print_r($_POST);
//extract($_POST);

//echo $sname;
//echo $nationality;

//extract($_FILES);
print_r($_FILES);
