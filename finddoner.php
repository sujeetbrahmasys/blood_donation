<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Find Doner </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="js/validate.js"></script>


</head>
<body id="home">


<!-- ********* Header Start ************ -->
<header>
  <section>

<nav class="navbar navbar-default navbar-fixed-top menu headercolor">

      <div class="container">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php #aboutblood">About Blood</a></li>
           
            
          </ul>
		  
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="finddoner.php">Find Doner</a></li>
            <li><a href="profiledetail.php">Doner Registration</a></li>
           
			<li class="dropdown">
		 
          <a  href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
          
			<ul id="login-dp" class="dropdown-menu">
				<li>
					 <div class="row">
							<div class="col-md-12">
								Login via
								<div class="social-buttons">
									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
								</div>
                                or
								 <form class="form" role="form" method="POST" action="login.php" accept-charset="UTF-8" id="login-nav" name="navlogin">
										<div class="form-group">
											 <label class="sr-only" for="InputEmail">Email address</label>
											 <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="InputPassword">Password</label>
											 <input type="password" class="form-control" id="InputPassword" name="InputPassword" placeholder="Password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
										</div>
										<div class="form-group">
											 <button type="submit" class="btn btn-primary btn-block">Sign in</button>
										</div>
										<div class="checkbox">
											 <label>
											 <input type="checkbox"> keep me logged-in
											 </label>
										</div>
								 </form>
							</div>
							<div class="bottom text-center">
								New here ? <a href="profiledetail.php"><b>Join Us</b></a>
							</div>
					 </div>
				</li>
			</ul>
        </li>
          </ul>
		
        </div><!--/.nav-collapse -->
		
      </div>
	 
    </nav>
	
</section>
</header>
<!-- ********* Header End ************ -->
 
 
 
 
 <section class="container topgap">
 <div class="row" >
 <div class="col-md-3 col-xs-12" >
<div class="heading" >
 <div class="center-block">
 
 </div>
<h2> Find a Doner </h2> 
</div>
    <form class="form-horizontal" role="form" method="POST" action="search.php" id="searchform" name="searchform">
    <div class="form-group">
      <label class="control-label col-sm-12 frow" for="bloodGroup">Blood Group:</label>
      <div class="col-sm-12">          
        <select id="bloodGroup" name="bloodGroup" class="form-control">
            <option value="0">-Select-</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select>

      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-12 frow" for="city">City:</label>
      <div class="col-sm-12">          
        <input type="text" class="form-control" id="city" name="city" placeholder="eg. Old Delhi">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-12 frow" for="postalcode">Postal Code:</label>
      <div class="col-sm-12">          
        <input type="text" class="form-control" id="postalcode" name="postalcode" placeholder="eg. 110006">
      </div>
    </div>
	<div class="form-group">        
      <div>
        <button class="btnall2" id="btn1" type="submit" class="btn btn-primary">Submit</button>
		<button class="btnall2" id="btn2" type="submit" class="btn btn-primary">Reset</button>
      </div>
    </div>
  </form>
 </div>
 <?php
include 'dbconnection.php';


$sql = "SELECT firstname, lastname, bloodGroup, email, phoneno, 
address, street, city, state, postalcode, dateofbirth, gender, 
profession, aboutyourself, image FROM userprofile";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
$img=  $row["image"] ;

?> 

    
	
<div class="col-md-9 col-xs-12 "  style="float:right">
<div class="row rightcontent gap">
<div class="col-md-2" id="profile">

<div><img class="img-responsive" src="<?php echo $img ?>"  /> </div>
<div><?php echo "" . $row["firstname"]. "" ?> </div> 
<div><?php echo "" . $row["dateofbirth"]. "" ?> </div>
<div> <?php echo "" . $row["phoneno"]. ""  ?></div> 
</div>

<div class="col-md-10" id="details">

<div class="color"><p><?php echo "" . $row["city"]. ""  ?>  </p></div>
<div class="color"><span> Blood Group <?php echo "" . $row["bloodGroup"]. ""  ?></span></div>
<br>
<div>
<p class="pera"><?php echo "" . $row["aboutyourself"]. "" ?> </p>
</div>
        
</div>
</div>
</div>
	
	<?php
	}
} else {
    echo "0 results";
}
?>
<?php
		  
mysqli_close($conn);

?>
 </div>
</section>
 
 
 

	  
<!-- ********* Footer Start ************ -->
<section >



<footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4" >
                        <h3>Location</h3>
                        <p><i class="fa fa-map-marker"></i> D 242 Sec-63 Electronic City <br>Noida, Uttar Pradesh</p> 
						<p><a ><i class="fa fa-phone"></i> +91-120-256489 </a> </p>
						<p><a ><i class="fa fa-envelope-o"></i></i> abc@xyz.com </a> </p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline" id="footer">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
						 <div id="copyright"> <p>Copyright &copy; Carpool 2015 </p> </div>
                    </div>
                    <div class="footer-col col-md-4" >
                        <h3>About Us</h3>
                        <p id="footeraboutus">Why we are different ?
Well, it is team work, culture and environment we have in house. We work on project as team not as departments. We go into deep details such as business concept, target market and plan the development strategy accordingly.
 <a href="http://brahmasys.com"></a></p>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
        
</section>

</body>
</html>