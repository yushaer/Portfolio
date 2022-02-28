<?php
/**
 * @author Yushae Raza
 * March 25, 2019
 * SENG 300 Project iteration 1
 * php file to connect to the database
 * 
 */
ini_set('session.gc_maxlifetime', 30);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(30);
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
$servername="us-cdbr-east-05.cleardb.net"; //ljmm zvtikbf !!!
$username="ba6fe5beb4aea7";
$password= "df317775";
$database= "heroku_25978711a046d74";
$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_error) {
	die("Connection Failed: " . $connection->connect_error);
	echo $connection->connect_error;
}
?>