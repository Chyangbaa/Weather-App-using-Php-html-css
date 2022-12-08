<?php
session_start();
if(isset($_POST['submit'])){
	$d = $_POST['datepick'];
	$_SESSION['search'] = $d;	
header("location:display.php");
    }
    

?>