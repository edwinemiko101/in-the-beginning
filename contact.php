<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Renewal Chambers</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Renewal Chambers, 12 industry road port harcourt nigeria, Renewal Chambers Law Firm, Renewal Chambers Port Harcourt." />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt-2 text-center">
			<!-- nav -->
			<div class="nav_w3ls pt-4 pb-3 text-center position-static">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="index.php">Services</a></li>
						<li><a href="index.php">Gallery</a></li>
						<li><a href="https://anthonyezenwokosblog.com/">Blog</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
			<!-- //nav -->
			<div class="banner-inner">
				<h1><a href="index.php" class="logo-2">Renewal Chambers</a></h1>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //home -->

	<!-- contact -->
	<section class="contact py-5" id="contact">
		<div class="container py-md-5">
			<h3 class="tittle text-center">Contact Us</h3>
			<p class="sub-tittle text-center mt-3 mb-sm-5 mb-4">Contact us with the details below <br/> Our doors are always open to help in whatever way we can. </p>
			<div class="row mt-4">
				<div class="col-lg-8 mb-5">
					<form action="get_response.php" method="post">
						<div class="row main-w3layouts-sectns">
							<div class="col-md-6 w3-btm-spc form-text1">
								<input class="form-control" type="text" name="your_name" placeholder="Enter Your Name" required="">
							</div>
							<div class="col-md-6 w3-btm-spc form-text2">
								<input class="form-control" type="text" name="number" placeholder="Enter Phone Number" required="">
							</div>
						</div>
						<div class="row main-w3layouts-sectns">
							<div class="col-md-6 w3-btm-spc form-text1">
								<input class="form-control" type="email" name="your_email" placeholder="Enter Your Email" required="">
							</div>
							<div class="col-md-6 w3-btm-spc form-text2">
								<input class="form-control" type="text" name="subject" placeholder="Subject" required="">
							</div>
						</div>
						<div class="main-w3layouts-sectns ">
							<div class="w3-btm-spc form-text2 p-0">
								<textarea class="form-control" placeholder="Enter Your Message Here" name="message"></textarea>
							</div>
						</div>
						<button type="submit" class="btn mt-3">Submit</button>
						<div class="response_msg"></div>
					<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
						<script>
$(document).ready(function(){
$("#contact").on("submit",function(e){
e.preventDefault();
if($("#contact [name='your_name']").val() === '')
{
$("#contact [name='your_name']").css("border","1px solid red");
}
else if ($("#contact [name='number']").val() === '')
{
$("#contact [name='number']").css("border","1px solid red");
}	
else if ($("#contact [name='your_email']").val() === '')
{
$("#contact [name='your_email']").css("border","1px solid red");
}
else if ($("#contact [name='subject']").val() === '')
{
$("#contact [name='subject']").css("border","1px solid red");
}
else if ($("#contact [name='message']").val() === '')
{
$("#contact [name='message']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "get_response.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact").find("input[type=text], input[type=email], textarea").val("");
}
});
}
});
$("#contact input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>
</form>
				</div>
				<div class="col-lg-4 mb-5">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2731.4223230715193!2d7.010403565193495!3d4.769308163483444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1069cbfbfc5f6eb5%3A0xc5ea60de6c53838f!2sIndustry+Rd%2C+Port+Harcourt!5e0!3m2!1sen!2sng!4v1564226331169!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-3 contact-left">
					<span>Dont Wait</span>
					<h3 class="heading mb-lg-5 mb-4">Send Message</h3>
				</div>
				<div class="col-lg-9 contact-text-bot">
					<p>If you have any queries, or want to speak to one of our associates
				        , Please contact us for more details by below given information.</p>
					<div class="row mt-4">
						<div class="contact-info col-md-6 pr-md-5">
							<h4 class="mb-3">Address</h4>
							<div class="footer-style-w3ls">
								<p><strong>Location</strong>: Renewal Chambers<br/>
                                                              12 Industry Road
                                                              Near NPA<br/>
                                                              Port Harcourt<br/>
                                                              Nigeria.
								</p>
							</div>
							<div class="footer-style-w3ls">
								<p><strong>Email</strong> : <a href="mailto:info@example.com">law@renewalchambers.com</a></p>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //contact -->

	<!-- middle section -->
	<div class="text py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<div class="row py-4">
				<div class="col-md-12">
					<h5 class="text-wh text-capitalize font-weight-bold let mb-4">Famous Law Quotes.</h5>
					<p>"No man is above the law and no man is below it; nor do we ask any man's permission when we ask him to obey it. Obedience to the law is demanded as a right, not asked as a favor." ~ Theodore Roosevelt <br/> "Law too gentle are seldom obeyed; to severe, seldom executed." ~ Benjamin Franklin </br/> "Laws are a dead letter without courts to expound and define their true meaning and operation." ~ Alexander Hamilton</p>
					<div class="text-center mt-sm-5 mt-4">
						<a href="about.php" class="mr-2 work btn">Read More</a>
						<a href="contact.html" class="work btn">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- footer -->
	<footer class="footer-sec-w3layouts py-5 ">
		<div class="container py-xl-5 py-lg-3">
			<div class="row pb-3">
				<div class="col-xl-5 col-md-6 footer-left-info text-left">
					<div class="logo-footer">
						<h2>
							<a href="index.php">Renewal Chambers</a>
						</h2>
					</div>
					<p class="mt-lg-5 mt-4">We offer per excellence legal services to our clients while maintaining 
                     the highest standard of professional ethics</p>
					<p> Handling complex and sophisticated matters locally, nationally and internationally</p>
				
				</div>
				<div class="col-md-6 footer-right-info text-right offset-xl-1 mt-md-0 mt-5">
					<h6>Get In Touch</h6>
					<address class="ad-info mt-lg-5 mt-4">
						
						<br> 12 Industry Road, By NPA
						<br> Port Harcourt, Nigeria.
						<br>
						<abbr title="Phone">P:</abbr>+234 8022849372
					</address>
				</div>
			</div>
			<!-- social icons -->
			<div class="social-icons-footer social-w3pvt-footer border-top text-center pt-md-5 pt-4 mt-md-5 mt-4">
				<ul class="list-unstyled">
					<li>
						<a href="#">
							<span class="fa fa-facebook"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-twitter"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-dribbble"></span>
						</a>
					</li>
					<li>
						<a href="#">
							<span class="fa fa-instagram"></span>
						</a>
					</li>
				</ul>
			</div>
			<!-- //social icons -->
		</div>
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="cpy-right text-center py-3">
		<p>© 2019 Renewal Chambers. All rights reserved | Design by
			<a href="http://edwinprofile.com.ng"> EDWIN EMIKO.</a>
		</p>
	</div>
	<!-- //copyright -->
	<!-- move top icon -->
	<a href="#home" class="move-top text-center">
		<span class="fa fa-chevron-circle-up" aria-hidden="true"></span>
	</a>
	<!-- //move top icon -->

</body>

</html>