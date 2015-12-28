<?php
    session_start();
include 'dbconnection.php';
    // Pretty much kicks out a user once they revisit this page and is logged in
    
    $loggedIn = false;
    $email = $_POST["InputEmail"] ;
    $password = $_POST["InputPassword"] ;
$query = "SELECT email, password FROM userprofile WHERE email='$email' 
AND password='$password'";

$result = mysqli_query($conn,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);


if( $num_row ==1 )
     {
 $_SESSION['userid']=$row['userid'];
 header("Location: finddoner.php");
 
 exit;
  }
  else
     {
 echo 'oops  can not do it';
  }
 

  mysqli_close($conn);  

?>
