<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Login Form </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	
	
	<link rel="stylesheet" href="css/style.css">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  
 
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/validate.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
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
								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
										<div class="form-group">
											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
										</div>
										<div class="form-group">
											 <label class="sr-only" for="exampleInputPassword2">Password</label>
											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
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
								New here ? <a href="login.php"><b>Join Us</b></a>
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
 

  <div class="container topgap" id="loginform">
 
 <div class="heading center" >
 
<h2> Login Form </h2> 
</div>
    <form class="form-horizontal" role="form" id="f2" name="f2" method="post" action="logindatainsert.php" >
    <div class="form-group" >
      <label class="control-label col-sm-3 frowprofile" for="username">User Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="username" name="username" placeholder="eg. Jacson" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="email">Email:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" id="email" name="email" placeholder="eg. abc@xyz.com" required>
      </div>
    </div>
		
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="password">Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3 frowprofile" for="confirmpassword">Confirm Password:</label>
      <div class="col-sm-9">          
        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="*******" required>
      </div>
    </div>
	
	
	
   
    <div class="form-group">        
      <div>
        <button class="btnall2" id="btn5" type="submit" class="btn btn-primary">Submit</button>
		<button class="btnall2" id="btn6" type="submit" class="btn btn-primary">Reset</button>
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
