<?php

//connecting to the database
include 'dbconnection.php';
//inserting Record to the database
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$bloodGroup = $_POST['bloodGroup'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$address = $_POST['address'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$postalcode = $_POST['postalcode'];
$dateofbirth = $_POST['dateofbirth'];
$gender = $_POST['gender'];
$profession = $_POST['profession'];
$aboutyourself = $_POST['aboutyourself'];
$password = $_POST['password'];


$target_dir = "profile-image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}




if($firstname!=''&&$lastname!=''&&$bloodGroup!=''&&$email!=''&&$phoneno!=''&&$address!=''
&&$street!=''&&$city!=''&&$state!=''&&$postalcode!=''&&$dateofbirth!=''&&$gender!=''&&$profession!=''&&$aboutyourself!=''&&$password!=''&&$target_file)
 {

 
$query = "INSERT INTO `userprofile` (`firstname`, `lastname`, `bloodGroup`, `email`, `phoneno`, `address`,
 `street`, `city`, `state`, `postalcode`, `dateofbirth`, `gender`, `profession`, `aboutyourself`, `password`, `image`) VALUES ('$firstname', '$lastname', '$bloodGroup',
 '$email', '$phoneno', '$address', '$street', '$city', '$state', '$postalcode', '$dateofbirth', '$gender', '$profession', '$aboutyourself', '$password', '$target_file')";


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




