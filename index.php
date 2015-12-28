<!-- ********* Author Sujeet Yadav ************ 
Author Url:http://brahmasys.com
Date:28Dec

Third Party -- Jquery Bootstrap
-->



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> Home </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  
</head>
<body id="home">
<!-- ********* Header Start ************ -->
<header>
 <section >

<nav class="navbar navbar-default navbar-fixed-top menu headercolor">

      <div class="container" >
        <div class="navbar-header" >
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#aboutblood">About Blood</a></li>
           
            
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
								 <form class="form" role="form" method="POST" action="login.php" id="login-nav" name="navlogin">
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
 
 <section class="hometopgap"> 
<div class="container-fluid">

   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img  class="img-responsive" src="img/05.jpg" alt=""></img>
        <div class="carousel-caption">
          <h3>Donet Blood...... Save Life</h3>
          <p>Nearly half the volume of blood consists of cells, which include red blood cells, white blood cells, and platelets. The remainder is a fluid called plasma. </p>
        </div>
      </div>

      <div class="item">
        <img  class="img-responsive" src="img/06.jpg" alt=""></img>
        <div class="carousel-caption">
          <h3>Tears of a mother cannot save her Child. But your Blood can.</h3>
          <p>Nearly half the volume of blood consists of cells, which include red blood cells, white blood cells, and platelets. The remainder is a fluid called plasma. </p>
        </div>
      </div>
    
      <div class="item">
        <img  class="img-responsive" src="img/08.png" alt=""></img>
        <div class="carousel-caption">
          <h3>The Blood Donor of today may be recipient of tomorrow.</h3>
          <p>Nearly half the volume of blood consists of cells, which include red blood cells, white blood cells, and platelets. The remainder is a fluid called plasma. </p>
        </div>
      </div>

      <div class="item">
        <img  class="img-responsive" src="img/06.jpg" alt="" ></img>
        <div class="carousel-caption">
          <h3>The blood is red gold in time of saving a life.</h3>
          <p>Nearly half the volume of blood consists of cells, which include red blood cells, white blood cells, and platelets. The remainder is a fluid called plasma. </p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</div>
</section>


<section id="aboutblood">
<div>
<center><b> About Blood </b>
<p> When you give blood at your community blood center, you can save up to three lives. And while giving blood is simple, blood itself is very complex and is vital to all of us. Our blood supply comes from caring donors like you. When you give blood, you can give someone another laugh, another hug, another chance.
</p>
</center>
</div>
</section>

<section style="padding:50px">
<div class="container" >
<div class="row">
<div class="col-md-4" >
<center><img  class="img-responsive" src="img/plasma.jpg"></img>
<h4>What is Blood</h4>
<h5>Red blood cells carry oxygen</h5>
<p> Blood carries gases, nutrients and waste products through the body. Blood also fights infections, heals wounds and performs many other vital functions. <br><a href="http://brahmasys.com/" color="red"><span style="color:red">Read More....</span></a></p>
</center>
</div>
<div class="col-md-4">
<center><img  class="img-responsive" src="img/contentimg04.jpg"></img>
<h4>Blood are needed every day</h4>
<h5>Undergoing orthopedic surgeries</h5>
<p> The national blood supply must cover every day needs and unexpected disasters. Frequent volunteer blood donors ensure that blood is ready (collected and tested). <br><a href="http://brahmasys.com/" color="red"><span style="color:red">Read More....</span></a></p>
</center>
</div>
<div class="col-md-4">
<center><img  class="img-responsive" src="img/bloodmade.jpg"></img>
<h4>Blood can not be artificially made</h4>
<h5>fully responsive design</h5>
<p> Major worldwide blood shortages have led scientists to synthesize and test artificial blood. Infected blood is a major problem for many countries. <br><a href="http://brahmasys.com/" color="red"><span style="color:red">Read More....</span></a></p>
</center>
</div>
</div>
</div>
</section >



	  
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
