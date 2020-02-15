<?php

include_once 'includes/connector.inc.php';
$sqlstud= "SELECT `studentid`, `jambno`, `sname`,`name`, `othername`,  `clevel`,`yadmited` FROM `studentinformation1`";
$resultstud= mysqli_query($conn,$sqlstud);
$i=0;
 
 while ( $th=mysqli_fetch_assoc($resultstud))
{
		$data['data'][$i][0]=$i+1;
		$data['data'][$i][1]=$th['jambno'];
		$data['data'][$i][2]=$th['sname'];
		$data['data'][$i][3]=$th['name'];
		$data['data'][$i][4]=$th['othername'];
		$data['data'][$i][5]=$th['clevel'];
		$data['data'][$i][6]=$th['yadmited'];
		$data['data'][$i][7]="<a href ='masterstudentprofiledisplay.php?studentid=".$th['studentid']."'><button class='link btn-success btn-xs'>View</button></a>";
		$data['data'][$i][8]="<a href ='editmasterstudentprofiledisplay.php?studentid=".$th['studentid']."'><button class='link btn-primary btn-xs'>Edit</button></a>";
		$data['data'][$i][9]="<a href ='".$th['studentid']."'><button class='link btn-danger btn-xs'>Delete</button></a>";
		$i++;	
}
		echo json_encode($data)

?>