<?php
    
include 'dbconnection.php';
    // Pretty much kicks out a user once they revisit this page and is logged in
    
    $loggedIn = false;
    $bloodGroup = $_POST["bloodGroup"] ;
    $city = $_POST["city"] ;
    $postalcode = $_POST["postalcode"] ;
$query = "SELECT bloodGroup, city, postalcode FROM userprofile WHERE bloodGroup='$bloodGroup' 
AND city='$city' AND postalcode='$postalcode' ";

$result = mysqli_query($conn,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
echo($bloodGroup);
echo($city);
echo($postalcode);

/* if( $num_row ==1 )
     {
 header("Location: finddoner.php");
 
 exit;
  }
  else
     {
 echo 'oops  can not do it';
  }
 */

  mysqli_close($conn);  

?>


