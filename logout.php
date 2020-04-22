<?php
session_start();

session_destroy();
/*if(isset($_SESSION['client_name'])){
	unset($_SESSION['client_name']);
	header("location:landing_page.php");
}else
{
	header("location:landing_page.php");
}*/
header("location:landing_page.php");
?>