<?php 
/**
 * @author Yushae Raza
 * Seng300 Project Iteration 2 Group 4
 * Create a admin session for user
 */
session_start();
if(isset($_SESSION["username"] )){
	if($_SESSION['role']!=2){
		header("Location: https://yr-hospital-management-system.herokuapp.com/");
	}
	echo "Welcome " .$_SESSION["username"];
	if(isset($_POST['Logout'])||isset($_GET['Logout'])){
		session_unset();
		session_destroy();
		header("Location: https://yr-hospital-management-system.herokuapp.com/Login");
	}
}
else{
	header("Location: https://yr-hospital-management-system.herokuapp.com/Login");
}



?>