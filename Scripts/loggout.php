<?php 
include 'config.php';
/**
 * @author Yushae Raza
 * March 25, 2019
 * SENG 300 Project iteration 1
 * php file to logout a user
 * 
 */


/**
 * Create a session if login is sucessful otherwise redirect user to login page
 */

if(isset($_SESSION["username"] )){
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