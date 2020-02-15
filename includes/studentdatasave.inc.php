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
		if ($fileError === 0) 
		{
			if ($fileSize < 500000)
			{
				//$fileNewname = "PrifileImage".$id.".".$fileActualExt;
				$fileNewname = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../image/uploads'.$fileNewname;
				move_uploaded_file($fileTmpName,  $fileDestination);

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
							if ($fileErrorsig === 0) 
							{
								if ($fileSizesig < 500000)
								{
									$fileNewnamesig = uniqid('', true).".".$fileActualExtsig;
									$fileDestinationsig = '../image/signature'.$fileNewnamesig;
									if (move_uploaded_file($fileTmpNamesig,  $fileDestinationsig)) 
									{

// Process data to insert to database
				$jambno = filter_input(INPUT_POST,'jnom');
				$email= filter_input(INPUT_POST, 'email');
				$surename = filter_input(INPUT_POST, 'sname');
			    $othernames = filter_input(INPUT_POST, 'oname');
			    $gender = filter_input(INPUT_POST,'sex');
			    $mstatus = filter_input(INPUT_POST,'mstatus');
			    $dob = filter_input(INPUT_POST, 'dob');
			    $nationality = filter_input(INPUT_POST, 'nationality');
			    $stateoorigin = filter_input(INPUT_POST,'stateoorigin');
			    $lga = filter_input(INPUT_POST,'lga');
			    $phone1 = filter_input(INPUT_POST,'phone1');
			    $phone2 = filter_input(INPUT_POST, 'phone2');
			    $pmaddress = filter_input(INPUT_POST, 'pmaddress');
			    $psaddress = filter_input(INPUT_POST,'psaddress');
			    $kinname1 = filter_input(INPUT_POST,'kinname1');
			    $addressnnumkin1= filter_input(INPUT_POST, 'addressnnumkin1');
			    $kinname2 = filter_input(INPUT_POST, 'kinname2');
			    $addressnnumkin2 = filter_input(INPUT_POST, 'addressnnumkin2');
			    $primschname = filter_input(INPUT_POST, 'primaryschoolname');
			    $primstartyear = filter_input(INPUT_POST, 'primstartyear');
			    $primfinishyear = filter_input(INPUT_POST, 'primaryfinishyear');
			    $secondaryname = filter_input(INPUT_POST, 'secondaryname');
			    $secondarystart = filter_input(INPUT_POST,'secondarystart');
			    $secondaryfinish = filter_input(INPUT_POST,'secondaryfinish');
			    $olschoolname= filter_input(INPUT_POST, 'olschoolname');
			    $olsubject1 = filter_input(INPUT_POST,'olsubject1');
			    $olsubject2 = filter_input(INPUT_POST,'olsubject2');
			    $olsubject3 = filter_input(INPUT_POST,'olsubject3');
			    $olsubject4 = filter_input(INPUT_POST,'olsubject4');
			    $olsubject5 = filter_input(INPUT_POST,'olsubject5');
			    $olgrade1 = filter_input(INPUT_POST, 'olgrade1');
			    $olgrade2 = filter_input(INPUT_POST, 'olgrade2');
			    $olgrade3 = filter_input(INPUT_POST, 'olgrade3');
			    $olgrade4 = filter_input(INPUT_POST, 'olgrade4');
				$olgrade5 = filter_input(INPUT_POST, 'grade5');        
				$hqualification = filter_input(INPUT_POST, 'hqualification');
				$hqinstitution = filter_input(INPUT_POST, 'hqinstitution');
				$hqyobtained = filter_input(INPUT_POST, 'hqyobtained');
				$alsubject1= filter_input(INPUT_POST, 'alsubject1');
				$alsubject2= filter_input(INPUT_POST, 'alsubject2');
				$alsubject3= filter_input(INPUT_POST, 'alsubject3');
				$alsubject4= filter_input(INPUT_POST, 'alsubject4');
				$algrade1 = filter_input(INPUT_POST,'algrade1');
				$algrade2 = filter_input(INPUT_POST,'algrade2');
				$algrade3 = filter_input(INPUT_POST,'algrade3');
				$algrade4 = filter_input(INPUT_POST,'algrade4');
				$ccstudy = filter_input(INPUT_POST, 'ccstudy');
				$cschool = filter_input(INPUT_POST,'cschool');
				$clevel = filter_input(INPUT_POST, 'clevel');
				$cdepartment = filter_input(INPUT_POST,'cdepartment');
				$cyadmited = filter_input(INPUT_POST, 'cyadmited');
				$cduration = filter_input(INPUT_POST,'cduration');
				$cyregistering = filter_input(INPUT_POST, 'cyregistering');
				$cdate = filter_input(INPUT_POST, 'cdate');


//Insert Values to DB
		$studdatasql = "INSERT INTO studentinformation(imgupload, jambno, emailstudent, signature, surname, othernames, sex, maritalstatus, dateofbirth, nationality, stateoforigin, lga, phonestudentno1, phonestudentno2, permanentaddress, postaladdress, nextofkinname1, addressphonenxtofkin1, nextofkinname2, addressphonenxtofkin2, primschname, primstartyear, primfinishyear, secschname, secstartyear, secfinishyear, olevelexamname, olsubject1, olsubject2, olsubject3, olsubject4, olsubject5, olgrade1, olgrade2, olgrade3, olgrade4, olgrade5, highestqualification, highestschname, highestqualificationyearobtained, hqsubject1, hqsubject2, hqsubject3, hqsubject4, hqgrade1, hqgrade2, hqgrade3, hqgrade4, currentschcourseofstudy, currentschschool, currentschlevel, currentschdepart, currentschyearadmited, currentschcourseduration, currentyearreg,  dateregistered) values ('$fileDestination', '$jambno', $email', '$fileDestinationsig', '$surename', '$othernames', '$gender', '$mstatus', '$dob', '$nationality','$stateoorigin', '$lga', '$phone1', '$phone2', '$pmaddress', '$psaddress', '$kinname1', '$addressnnumkin1', '$kinname2', '$addressnnumkin2', '$primschname', '$primstartyear', '$primfinishyear', '$secondaryname', '$secondarystart', '$secondaryfinish', '$olschoolname', '$olsubject1', '$olsubject2', '$olsubject3', '$olsubject4', '$olsubject5', '$olgrade1', '$olgrade2', '$olgrade3', '$olgrade4', '$olgrade5', '$hqualification', 	'$hqinstitution', '$hqyobtained', '$alsubject1', '$alsubject2', '$alsubject3', '$alsubject4', '$algrade1', 	'$algrade2', '$algrade3', '$algrade4', '$ccstudy',  '$cschool',  '$clevel',  '$cdepartment', '$cyadmited',  '$cduration',  '$cyregistering', '$cdate')";

		

											}else{
										echo "Error in passoprt and signature upload";
									}							

									
								}else {
									echo "Your file is too big!";
								}
							}else{
								echo "There was error uploading file!";
							}
						}else{
							echo "This type of file is not allowed!";
						}

				//
			}else {
				echo "Your signature file is too big!";
			}
		}else{
			echo "There was error uploading file!";
		}
	}else{
		echo "This type of file is not allowed!";
	}


}