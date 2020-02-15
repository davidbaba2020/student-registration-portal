<?php
if(isset($_POST['adminout'])){

session_start();
session_unset();
session_destroy();
header("Location: ../adminlogin.php");
exit();

}

?>