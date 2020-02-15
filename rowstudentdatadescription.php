<?php 

$sql3 = "INSERT INTO studentinformation('',img,jambno) values ('$studentusername','$passwordstudent','$jambno')";
('',studentid,imgupload,jambno,emailstudent,signature,surname,othernames,sex,maritalstatus,dateofbirth,nationality,stateoforigin,lga,phonestudentno1,phonestudentno2,permanentaddress,postaladdress,nextofkinname1,addressphonenxtofkin1,nextofkinname2,addressphonenxtofkin2,primschname,primstartyear,primfinishyear,secschname,secstartyear,secfinishyear,olevelexamname,olsubject1,olsubject2,olsubject3,olsubject4,olsubject5,olgrade1,olgrade2,olgrade3,olgrade4,olgrade5,highestqualification,highestschname,highestqualificationyearobtained,hqsubject1,hqsubject2,hqsubject3,hqsubject4,hqgrade1,hqgrade2,hqgrade3,hqgrade4,currentschcourseofstudy,currentschschool,currentschlevel,currentschdepart,currentschyearadmited,currentschcourseduration,dateregistered,cdate"	
				
)

       '$jambno', 
       '$email', 
       '$signatureUpload', 
       '$surename', 
       '$othernames', 
       '$gender', 
       '$mstatus', 
       '$dob', 
       '$nationality',
       '$stateoorigin', 
       '$lga', 
       '$phone1',  
       '$phone2', 
       '$pmaddress', 
       '$psaddress', 
       '$kinname1', 
       '$addressnnumkin1',
       '$kinname2', 
       '$addressnnumkin2', 
       '$primschname', 
       '$primstartyear', 
       '$primfinishyear', 
       '$secondaryname', 
       '$secondarystart', 
       '$secondaryfinish', 
       '$olschoolname'
		'$olsubject1', 
		'$olsubject2', 
		'$olsubject3', 
		'$olsubject4', 
		'$olsubject5', 
		'$olgrade1', 
		'$olgrade2', 
		'$olgrade3', 
		'$olgrade4', 
		'$olgrade5', 
		'$hqualification', 
		'$hqinstitution', 
		'$hqyobtained', 
		'$alsubject1', 
		'$alsubject2', 
		'$alsubject3', 
		'$alsubject4', 
		'$algrade1', 
		'$algrade2', 
		'$algrade3', 
		'$algrade4', 
		'$ccstudy',  
		'$cschool',  
		'$clevel',  
		'$cdepartment', 
		'$cyadmited',  
		'$cduration',  
		'$cyregistering', 
		'$currentyearreg', 
		'$cdate'

        $jambno = filter_input(INPUT_POST,'jnom');
		$email= filter_input(INPUT_POST, email');
        $signatureUpload = filter_input(INPUT_POST, 'signatureUpload');
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
        $addressnnumkin1= filter_input(INPUT_POST, addressnnumkin1');
        $kinname2 = filter_input(INPUT_POST,'kinname2');
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
        $olgrade5 = filter_input(INPUT_POST, 'olgrade5');        
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
        $currentyearreg = filter_input(INPUT_POST, 'currentyearreg');
        $cdate = filter_input(INPUT_POST, 'cdate');









'', imgupload, jambno, emailstudent, signature, surname, othernames, sex, maritalstatus, dateofbirth, nationality, stateoforigin, lga, phonestudentno1, phonestudentno2, permanentaddress, postaladdress, nextofkinname1, addressphonenxtofkin1, nextofkinname2, addressphonenxtofkin2, primschname, primstartyear, primfinishyear, secschname, secstartyear, secfinishyear, olevelexamname, olsubject1, olsubject2, olsubject3, olsubject4, olsubject5, olgrade1, olgrade2, olgrade3, olgrade4, olgrade5, highestqualification, highestschname, highestqualificationyearobtained, hqsubject1, hqsubject2, hqsubject3, hqsubject4, hqgrade1, hqgrade2, hqgrade3, hqgrade4, currentschcourseofstudy, currentschschool, currentschlevel, currentschdepart, currentschyearadmited, currentschcourseduration, dateregistered, 				




//post name from form
sname
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
kinname1
addressnnumkin1
kinname2
addressnnumkin2
primaryfinish
secondaryname
secondarystart
secondaryfinish
olschoolname
olsubject1
olgrade1
olsubject2
olgrade2
olsubject3
olgrade3
olsubject4
olgrade4
olsubject5
olgrade5
hqualification
hqinstitution
hqyobtained
alsubject1
algrade1
alsubject2
algrade2
alsubject3
algrade3
alsubject4
algrade4
ccstudy
cschool
clevel
cdepartment
cyadmited
cduration
cyregistering
cdate
signatureUpload