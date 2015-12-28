<?php

//connecting to the database
include 'dbconnection.php';
//inserting Record to the database

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];



if($username!=''&&$email!=''&&$password!='')
 {

$query = "INSERT INTO `login` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";
 
$result = mysqli_query($conn, $query);
if($result)
	{
	    header('location:index.php');
	}
	else
	{
	 die('Error: '.mysqli_error($conn));
	}
 }
	else
	{
		echo 'Enter each field carefuly';
	}
	
	mysqli_close($conn);
	


?>