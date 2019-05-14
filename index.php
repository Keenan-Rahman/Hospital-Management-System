<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Hospital Management System</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Dr.Care Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Cambo' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Hind:400,300,500,600,700' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

	<script type="text/javascript">
	
	
	
	
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>

    <script>
	
	
	

$(document).ready(function(e) {
    
	$('.div').click(function(){	
	$('.hdiv').css({ 'visibility' : 'visible','opacity':'100','top':'100px','left':'400px','width' : '600px',
	'z-index':'9000',
    'position': 'fixed'} );
	
	
	$('.ccll').css({'opacity':'.9',
    'filter':'alpha(opacity=10)',
    'background-color': 'black',
    'width':'100%',
    'height':'100%',
    'z-index':'8999',
    'margin-top':'0',
    'margin-left':'0',
    'position':'fixed'});
		
		
	});
	
		$('#close').click(function(){	
	$('.hdiv').css({'visibility':'hidden','transition':'none'} );
	$('.ccll').css({'opacity':'0',
    'background-color': 'black',
    'width':'100%',
    'height':'100%',
    'z-index':'8999',
    'margin-top':'0',
    'margin-left':'0',
    'position':'static'});
		
		
	});

});
	
	

	
	
	



</script>


    
    
<!-- //end-smoth-scrolling -->
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />


</head>
<body>
<!--header start here-->

<div class="ccll"></div>
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="header-left">
				<div class="logo">
				   <h1><a href="index.html">Hospital</a></h1>
			    </div>
				<div class="social-icons">
					<ul>
						<li><a href="#"><span class="fa"> </span></a></li>
						<li><a href="#"><span class="tw"> </span></a></li>
						<li><a href="#"><span class="ga"> </span></a></li>
					</ul>
				</div>
				 <div class="clearfix"> </div>
			  </div>
				<div class="top-navg">
					   <span class="menu"> <img src="images/icon.png" alt=""/></span>
					<nav class="cl-effect-16">
						<ul class="res">
							<li><a class="scroll" data-hover="Home" href="index.html">Home</a></li>
							<li><a class="scroll" data-hover="About" href="#about">About</a></li>
							<li><a class="scroll" data-hover="Services" href="#services">Services</a></li>
							<li><a class="scroll" data-hover="Gallery" href="#gallery">Gallery</a></li>
							<li><a class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
                            <li><a class="scroll" data-hover=""  href=""><div class="div">Sign-in</div></a></li>
						</ul>
					<!-- script-for-menu -->
						 <script>
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>

					</nav>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header start here-->
<!--banner strat here-->
<div class="banner">
	<div class="container">
		<div class="banner-main">
			 <h3>We Work For Your Health</h3>
			 <p>Future Hospital is in Karachi,  not-for-profit institutions providing high quality health care.</p>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--banner end here-->
<!--about strat here-->
<div class="about" id="about">
	<div class="container">
		<div class="abou-main">
			<div class="about-top">
				<h2>About us</h2>
				<p>The Main Hospitals serve as the principal sites for clinical training for the University's Medical Colleges and Schools of Nursing and Midwifery in Pakistan and East Africa.</p>
			</div>
			<div class="about-bottom">
				<div class="col-md-4 about-grid">
					<img src="images/a1.jpg" alt="" class="img-responsive">
					<div class="grid-details">
						<h3>Cardiology</h3>
						<p>Future Hospital Provide Most Modern & Sophisticated Cardiac Services</p>
					</div>
				</div>
				<div class="col-md-4 about-grid">
					<img src="images/a2.jpg" alt="" class="img-responsive">
					<div class="grid-details">
						<h3>Pharmacy</h3>
						<p>Pharmacy is Open 24 Hours for General Public and Serves .</p>
					</div>
				</div>
				<div class="col-md-4 about-grid">
					<img src="images/a3.jpg" alt="" class="img-responsive">
					<div class="grid-details">
						<h3>Emergency</h3>
						<p>24 Hours Emergency Services & Treat Other Casualties 365 Days a Year.</p>
					</div>
				</div>
			  <div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--about end here-->
<!--team start here-->
<div class="team-mem">
		<div class="container">
			   <div class="team-main">
					<div class="team-top">
							<h3>Our Team</h3>
					</div>
					<div class="team-bottom">
						<div class="col-md-3 team-grid">
							<a href="#"> <img src="images/t1.jpg" alt="" class="img-responsive"> </a>
						</div>
						<div class="col-md-3 team-grid">
							<a href="#"> <img src="images/t2.jpg" alt="" class="img-responsive"> </a>
						</div>
						<div class="col-md-3 team-grid">
							<a href="#"> <img src="images/t3.jpg" alt="" class="img-responsive"> </a>
						</div>
						<div class="col-md-3 team-grid">
							<a href="#"> <img src="images/t4.jpg" alt="" class="img-responsive"> </a>
						</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	  </div>
</div>
<!--team end  here-->
<!--services strta here-->
<div class="services" id="services">
	<div class="container">
		<div class="services-main">
			<div class="services-top">
				<h3>Services</h3>
				<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally pleasure.</p>
			</div>
			<div class="services-bottom">
			  <div class="hi-icon-wrap hi-icon-effect-6">
				<div class="col-md-3 ser-grid">
					<div class="ser-icon">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-eye-open"> </a>
					</div>
					<h4>Diagnostic Services</h4>
					<p>The Future Hospital provides a broad range of the latest technologically advanced diagnostic services to help in the accurate and timely diagnosis of diseases.</p>
				</div>
				<div class="col-md-3 ser-grid">
					<div class="ser-icon">
				      <a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-grain"> </a>
					</div>
					<h4>Paediatrics</h4>
					<p>The Children’s Hospital Service Line at Future Hospital is committed to providing quality medical care to children from birth to 18 years.</p>
				</div>
				<div class="col-md-3 ser-grid">
					<div class="ser-icon">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-heart"> </a>
					</div>
					<h4>Family Health</h4>
					<p>The Family Health Service Line at the Future Hospital promotes primary health care by offering high quality and cost-effective preventative, curative and rehabilitative services in the country.</p>
				</div>
				<div class="col-md-3 ser-grid">
					<div class="ser-icon">
						<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-tint"> </a>
					</div>
					<h4>Kidney and Bladder</h4>
					<p>The Kidney and Bladder Service Line at The Future Hospital consists of a team of internationally trained and highly experienced Kidney Doctors (Nephrologists) and Bladder, Prostate and Male Reproductive Specialized Doctors (Urologists). </p>
				</div>
			  </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--services end here-->
<!--testimony start here-->
<div class="testmony">
	<div class="container">
		<div class="testmony-main">
			<div class="col-md-4 testmo-left">
				<img src="images/tes.jpg" alt="" class="img-responsive">
			</div>
			<div class="col-md-8 testmo-right">
				<span class="quota1"> </span>
				<h4>In Hospital People Should Be Able To Have Time To Themselves</h4>
				<p>We are committed to achieving excellence in the delivery of our patient services with integrity, by caring compassionately for those we serve and continously improving our professional skills, organizational effectiveness and facilities.</p>
			    <span class="quota2"> </span>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--testmony end here-->
<!--gallery start here-->
<div class="gallery" id="gallery">
	<div class="container">
		<div class="gallery-main">
			<div class="gallery-top">
				<h3>Gallery</h3>
				<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally pleasure.</p>
			</div>
			<div class="gallery-bottom">
				<div class="view view-fourth">
                     <a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g1.jpg" alt="" class="img-responsive">
                    <div class="mask">
                         <h3>Medical</h3>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                      <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="view view-fourth">
                     <a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g2.jpg" alt="" class="img-responsive">
                    <div class="mask">
                          <h3>Medical</h3>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                      <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="view view-fourth">
                     <a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g3.jpg" alt="" class="img-responsive">
                    <div class="mask">
                          <h3>Medical</h3>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                      <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="view view-fourth">
                     <a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g4.jpg" alt="" class="img-responsive">
                    <div class="mask">
                          <h3>Medical</h3>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                      <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="view view-fourth">
                     <a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g5.jpg" alt="" class="img-responsive">
                    <div class="mask">
                          <h3>Medical</h3>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                      <span class="gall">More</span>
                    </div></a>
                </div>
                <div class="view view-fourth">
                     <a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="images/g6.jpg" alt="" class="img-responsive">
                    <div class="mask">
                        <h3>Medical</h3>
                        <p>A wonderful serenity has taken possession of my entire soul.</p>
                      <span class="gall">More</span>
                    </div></a>
                </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--gallery end here-->
<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
</script>


<!--advantages start here-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
			 <h3>Our Advantages</h3>
			<div class="col-md-7 advant-left">
				<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue weakness</p>
				<ul>
					<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span> <a href="#">Better, faster and more pleasant care </a></li>
					<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span> <a href="#">One modern hospital</a></li>
					<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">Care based on the needs of patients </a></li>
					<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span><a href="#">More single rooms for improved privacy</a></li>
					<li><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"> </span> <a href="#">A step change in our ability to fight infection</a></li>
				</ul>
			</div>
			<div class="col-md-5 advant-right">
				<a href="#"><img src="images/doctor.png" alt=""></a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--advantages end here-->
<!--contact start here-->
<div class="contact" id="contact">
	<div class="container">
		<div class="contact-main">
			<div class="contact-top">
				<h3>Quick Contact</h3>
				<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally pleasure.</p>
			</div>
			<div class="contact-bottom">
			 <form>
				<div class="col-md-6 contact-left">
				   
					<textarea placeholder="Message" required></textarea>
					
				</div>
				<div class="col-md-6 contact-right">
					<input type="text" placeholder="Name">
				    <input type="text" placeholder="Email">
					<input type="submit" value="Send">
				
				</div>
			  <div class="clearfix"> </div>
			    </form>
			</div>
		</div>
	</div>
</div>
<!--concact end here-->
<!--map start here-->
<div class="map">
  <iframe src='https://maps.google.com/maps?&q=shah%20latif%20town%2Ckarachi&output‌​=embed'> </iframe>
</div>
<!--map end here-->
<!--footer strat here-->
<div class="footer">
  <div class="container">
	<div class="footer-main">
		   <div class="col-md-4 ftr-grid">
		   	<h4>About Us</h4>
		   	<p>The Future Hospital is a private, not for profit, university hospital, focusing on the delivery of the highest quality health care in Pakistan for over 30 years since 1985. </p>
		   </div>
		   <div class="col-md-4 ftr-grid">
		   	<h4>Address</h4>
		   	<p>Shahlatif Town</p>
		   	<p>Bhens Colony , Karachi</p>
		   	<p>Ph:+1285 587 624</p>
		   </div>
		   <div class="col-md-4 ftr-grid">
		   	
		  <div class="clearfix"> </div>
	    </div>
	</div>
	<div class="copy-right">
			<p>© 2015 Dr.Care. All rights reserved | Design by  <a href="http://w3layouts.com/" target="_blank">  W3layouts </a></p>
		</div>
        </div>
        
        <div class="hdiv" style=" width:700px; height:380px;position:absolute; left:500px; top:100px; visibility:hidden; transition:all 2s;">
        
     
      
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              ID Assigned<span class="req">*</span>
            </label>
            <input type="number"  name="id"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"  type="submit" id="logg" name="submit"/>Log In</button>
          
          </form>

        </div>
        
     

          
          
    
<br>
<img id="close" src="images.jpg" />
</div>
 <script src="js/index.js"></script>
		<script type="text/javascript">
										$(document).ready(function() {
											/*
											var defaults = {
									  			containerID: 'toTop', // fading element id
												containerHoverID: 'toTopHover', // fading element hover id
												scrollSpeed: 1200,
												easingType: 'linear' 
									 		};
											*/
											
											$().UItoTop({ easingType: 'easeOutQuart' });
											
										});
									</script>
						<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</div>
<!--footer end here-->



<?php
session_start(); 

include("forms/init.php");

if(isset($_POST['submit']))
{
    

$id=$_POST['id'];
$password=$_POST['password'];

$query1= mysql_query("select id from login where id=$id");
$row1 = mysql_fetch_array($query1) ;


if(substr($id,0,3)=='732')
{
	$query= mysql_query("select first_name , last_name from receptionist where receptionist_id=$id and password_recept='$password'");
  	$row = mysql_fetch_array($query) ;
if(!empty($row['first_name']))
	{
		
		$_SESSION['login_user']=$row['first_name']; // Initializing Session
		$_SESSION['login_id']=$id;
		if(!empty($row1['id']))
		{
			$message1= "Some one has already logged in through this account";
		echo "<script type='text/javascript'>alert('$message1');</script>";
			}
			else
			{
				mysql_query("insert into login values ($id)");
header("location: pannel/receptionist_pannel.php");
			}
	}
	else
	{
		$message= "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

}

else if(substr($id,0,3)=='362')
{
 $query= mysql_query("select first_name , last_name from doctor where doctor_id=$id and password_doc='$password'");
  	$row = mysql_fetch_array($query) ;
if(!empty($row['first_name']))
	{
		
		$_SESSION['login_user']=$row['first_name']; // Initializing Session
		$_SESSION['login_id']=$id;
			if(!empty($row1['id']))
		{
			$message1= "Some one has already logged in through this account";
		echo "<script type='text/javascript'>alert('$message1');</script>";
			}
			else
			{
				mysql_query("insert into login values ($id)");
header("location: pannel/Doctor_pannel.php");
			}
	}
	else
	{
	$message= "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

}


else if(substr($id,0,3)=='154')
{
 $query= mysql_query("select f_name , l_name from admin where admin_id=$id and Password='$password'");
  	$row = mysql_fetch_array($query) ;
if(!empty($row['f_name']))
	{
		
		$_SESSION['login_user']=$row['f_name']; // Initializing Session
		$_SESSION['login_id']=$id;
			if(!empty($row1['id']))
		{
			$message1= "Some one has already logged in through this account";
		echo "<script type='text/javascript'>alert('$message1');</script>";
			}
			else
			{
				mysql_query("insert into login values ($id)");
header("location: pannel/admin_pannel.php");
			}
	}
	else
	{
		$message= "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}

}

else
{
	$message= "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
		echo "<script type='text/javascript'>alert('$message');</script>";
}

}


?>
    