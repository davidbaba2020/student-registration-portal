<?php
include('connector.inc.php');

function selectcourse(){

global $conn;
$query = "SELECT * FROM level";
$result = mysqli_query($conn, $query);
while ($row=mysqli_fetch_array($result)) 
{
	$coursedetail = $row['level'];
	echo '<option value = "'.$level.'"> '.$level.'</option>'; 
}


}


?>