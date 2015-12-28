<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Doner </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	
	
	<link rel="stylesheet" href="css/style.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  
 
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validate.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  
	 $(function() {
    $( "#dateofbirth" ).datepicker();
  });
  </script>
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
            <li><a href="finddoner.php">Find Doner</a></li>
            <li class="active"><a href="profiledetail.php">Doner Registration</a></li>
           
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
								 <form class="form" role="form" method="POST" action="login.php" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="InputEmail">Email address</label>
											 <input type="email" class="form-control" id="InputEmail" name="InputEmail"placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="InputPassword">Password</label>
											 <input type="password" class="form-control" id="InputPassword" name="InputPassword"placeholder="Password" required>
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
 
 <section>
 

 <div class="container topgap" id="registration">
 
 <div class="heading center" >
 <div class="center-block">
 <img class="img-responsive" src="img/12.jpg" alt="Profile Image">
 </div>
<h2> Blood Donor Registration Form </h2> 
</div>
    <form class="form-horizontal" role="form" id="f1" name="f1" action="insertdata.php" method="POST" enctype="multipart/form-data">
    <div class="form-group" >
      <label class="control-label col-sm-3 frowprofile" for="firstname">First Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="eg. Jacson" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="lastname">Last Name:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="lastname" name="lastname"placeholder="eg. Disu" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="bloodGroup">Blood Group:</label>
      <div class="col-sm-9">          
        <select id="bloodGroup" name="bloodGroup" class="form-control" name="bloodGroup" required>
            <option value="">-Select-</option>
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
      <label class="control-label col-sm-3 frowprofile" for="email">Email:</label>
      <div class="col-sm-9">          
        <input type="email" class="form-control" id="email" name="email" placeholder="eg. abc@xyz.com" required>
      </div>
    </div>
		
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="phoneno">Phone No.:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="eg. 9858746895" required>
      </div>
    </div>
	<div class="form-group" class="control-group">
      <label class="control-label col-sm-3 frowprofile" class="control-label"  for="address">Address:</label>
      <div  class="col-sm-9" class="controls">
        <textarea name="address"  id="address" class="form-control" type="text"
          placeholder="Write your Address" name="address" required></textarea>
       </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="street">Street:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="street" name="street" placeholder="eg. Gandhi Road" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="city">City:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="city" name="city" placeholder="eg. Old Delhi" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="state">State:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="state" name="state" placeholder="eg. Delhi" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="postalcode">Postal Code:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="postalcode" name="postalcode"placeholder="eg. 110006" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="dateofbirth">Date Of Birth:</label>
      <div class="col-sm-9">          
       <input type="text" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Date" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="gender">Gender:</label>
      <div class="col-sm-9">          
        <select id="gender" name="gender" class="form-control" name="gender" required>
            <option value="">-Select-</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
     </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="profession">Profession:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="profession" name="profession" placeholder="eg. Working in IT company" required>
      </div>
    </div>
	<div class="form-group" class="control-group">
      <label class="control-label col-sm-3 frowprofile" class="control-label"  for="aboutyourself">About Yourself:</label>
      <div  class="col-sm-9" class="controls">
        <textarea name="aboutyourself"  id="aboutyourself" class="form-control" type="text"
          placeholder="Write About Yourself" name="address" required></textarea>
       </div>
    </div>   

	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="password">Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="Confirmpassword">Confirm Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="Confirmpassword" name="Confirmpassword" placeholder="*******" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="fileToUpload">Upload Image:</label>
      <div class="col-sm-9">
		<input type="file" name="fileToUpload" id="fileToUpload" required>	  
        
      </div>
    </div>
	
	
	
	
	
	
	
	
<!--	<div class="form-group" class="control-group">
      <label class="control-label col-sm-3 frowprofile" class="control-label"  for="pic">Upload Image:</label>
      <div  class="col-sm-9" class="controls">
       <input type="file" name="pic" id="pic"><br>
       </div>
    </div>
	-->
	
	
	
    <div class="form-group">        
      <div>
        <button class="btnall2" id="btn3" type="submit" onclick="valid();" class="btn btn-primary">Submit</button>
		<button class="btnall2" id="btn4"type="submit" class="btn btn-primary">Reset</button>
      </div>
    </div>
  </form>
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
