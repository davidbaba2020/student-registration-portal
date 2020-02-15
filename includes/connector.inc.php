<?php
$dbServername   = "localhost";
$dbUsername     = "root";
$dbPassword     = "";
$dbName         = "project2018";

$conn = mysqli_connect("localhost:3308", "root","") or die(mysql_error());
mysqli_select_db($conn, "project2018");

?>
    