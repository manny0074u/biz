<?php
$pageTitle = "Contact";
$navigation="contact";
include('inc/header.php');

 if($_POST["submit"]) {
    $recipient="info@cashmoneyforyou.com";
    $subject="CONTACT MESSAGE";
   
     $name=$_POST["name"];
     $email=$_POST["email"];
    $phone=$_POST["phone"]; 
    $service=$_POST["service"]; 
    $message=$_POST["message"];
    
    $mailBody="Name: $name\n  Email: $email\n  Message: $message\n  ";


    mail($recipient, $subject, $mailBody, "From: $name <$email>");



 echo "<script>alert('Thank you , your message is sent.');window.location='contact.php' </script>";

     }
     


?>
		<!-- Banner -->
		<div class="banner banner-static has-bg bg-secondary">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">

						<div class="banner-text">
							<h1 class="page-title">Contact Consulting Expert</h1>
							<p>Want to work with us or need more details about consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore dolor.</p>
						</div>
						<div class="page-breadcrumb">
							<ul class="breadcrumb">
								<li><a href="index-2.html">Home</a></li>
								<li class="active"><span>Contact Us</span></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="image/banner-inner.jpg" alt="" />
			</div>
		</div>
		<!-- End Banner -->
		
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-contents section-contact section-pad">
		<div class="container">
			<div class="content row">

				<div class="contact-content row">
					<div class="drop-message col-md-7 res-m-bttm">
						<h2 class="heading-section">Drop a Message</h2>
						<form id="quote-contact-request" class="form-message" action="contact.php" method="post">
							<div class="form-results"></div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="name" type="text" placeholder="Name *" class="form-control required">
								</div>
								<div class="form-field col-md-6">
									<input name="email" type="email" placeholder="Email *" class="form-control required email">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-6 form-m-bttm">
									<input name="phone" type="text" placeholder="Phone" class="form-control">
								</div>
								<div class="form-field col-md-6">
									<input name="service" type="text" placeholder="Interest of Service" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="form-field col-md-12">
									<textarea name="message" placeholder="Messages *" class="txtarea form-control required"></textarea>
								</div>
							</div>
							<input type="text" class="hidden" name="form-anti-honeypot" value="">
							<button type="submit" name="submit" class="btn solid-btn sb-h">Submit</button>
						</form>
					</div>
					<div class="contact-details col-md-4 col-md-offset-1">
						<h3 class="heading-section">Contact Address</h3>
						<ul class="contact-list">
							<li><em class="fa fa-map" aria-hidden="true"></em>
								<span>1234 Sed ut perspiciatis Road, <br>At vero eos, D58 8975, London.</span>
							</li>
							<li><em class="fa fa-phone" aria-hidden="true"></em>
								<span>Toll Free : (123) 4567 8910<br>
								Telephone : (123) 1234 5678</span>
							</li>
							<li><em class="fa fa-envelope" aria-hidden="true"></em>
								<span>Email : <a href="#">info@sitename.com</a></span>
							</li>
							<li>
								<em class="fa fa-clock-o" aria-hidden="true"></em><span>Sat - Thu: 8AM - 7PM </span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Map -->
	<div class="map-holder map-contact">
		<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253682.6227051007!2d3.257414111627423!3d6.548055348208061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos!5e0!3m2!1sen!2sng!4v1508173792513" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</div>
	<!-- End map -->
	<!-- Call Action -->
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Looking for a greats consultantcy for your new business?</h3>
						<p>Contact us today by submit a business inquiry form online.</p>
						<a class="btn btn-outline" href="get-a-quote.html">Contact Us</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End Section -->
	<!-- Footer Widget-->
	<div class="footer-widget section-pad">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-text">
							<div class="wgs-content">
								<p><img src="image/logo.png" srcset="image/logo2x.png 2x" alt=""></p>
								<p>Our consultant unique combination of skill, experience and personal commitment, delivers an impact to your business. Applied Value Group combines Management Consulting, Private and Public Investments.</p>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 col-md-offset-1 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Our Services</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Business Consulting</a></li>
									<li><a href="#">Audit &amp; Assurance</a></li>
									<li><a href="#">Financial Projections</a></li>
									<li><a href="#">Investment Planning</a></li>
									<li><a href="#">Retirement Planning</a></li>
									<li><a href="#">Strategic Planning</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-2 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Links</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="index-2.html">Home</a></li>
									<li><a href="about.html">About Us</a></li>
									<li><a href="services.html">Our Services</a></li>
									<li><a href="teams.html">Teams / Expert</a></li>
									<li><a href="news.html">News</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">Get In Touch</h5>
							<div class="wgs-content">
								<p><strong>Consultant Company Name</strong><br>
									1234 Sed spiciatis Road <br>
									Atero eos, D58 8975, USA.</p>
								<p><span>Toll Free</span>: (1-800) 234 5678<br>
									<span>Phone</span>: (123) 1234 5678</p>
								<ul class="social">
									<li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="site-copy col-sm-7">
					<p>&copy; 2017 Consulting Expert <span class="sep"> . </span> <a href="#">Privacy Policy</a> <span class="sep"> . </span> <a href="#">Terms of Condition</a></p>
				</div>
				<div class="site-by col-sm-5 al-right">
					<p>Template Made by <a href="http://themesurf.com/" target="_blank">ThemeSurf.</a></p>
				</div>

			</div>
		</div>
	</div>
	<!-- End Copyright -->
	
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDNaa8LOQISEST6NIGC78vmdnIOynR2SeU"></script> 
	<script src="js/gmaps.js"></script>

	<!-- JavaScript Bundle -->
	<script src="js/jquery.bundle.js"></script>
	<!-- Theme Script init() -->
	<script src="js/script.js"></script>
	<!-- End script -->
</body>

<!-- Mirrored from demo.themesurf.com/consulting/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Oct 2017 20:43:00 GMT -->
</html>