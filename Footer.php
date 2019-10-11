<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!--<a href="C:\xampp\htdocs\webprac\Style.css"></a>-->
<style>
	.footer{
		background: #303036;
		color: #d3d3d3;
		height: 400px;
		position: relative;
		font-family: Poppins;
	}
	.footer .footer-bottom{
		background: #343a40;
		color: white;
		height: 50px;
		width: 100%;
		text-align: center;
		position: absolute;
		bottom: 0px;
		left:0px;
		padding-top:20px; 
	}
	.footer .footer-content{
		border: 1px solid red;
		height: 400px;
		display: : flex;
	}
	.footer .footer-content .footer-section{
		flex: 1;
		padding:5px;
		border: 1px solid white;
	}
	.page-wrapper{
		min-height: 100%;
	}
	.page-wrapper a:hover {
		color: 006669;
	}
	.padding{
		margin: 0 auto;
    	width: 100%;
    	display: block;
	}
	.fix {
    overflow: hidden;
	}
	.floatleft {
    float: left;
	}
	.one, .two, .three {
    margin: 0 auto;
    font-size: 15px;
    color: white;
    background: #303036;
    text-align: center;
    word-spacing: 2px;
    width: 30%;
     /*padding: 3% 1% 4% 1%;*/
	}
	.btn-big {
		border-radius: 10px;
  		font-family: Poppins;
  		font-size: 20px;
  		background-color: #4CAF50;
  		color: white;
		padding: 10px 0px;
		margin: 20px 0;
		border: none;
		width: 80%;
	}
	.contact-input{
		font-family: Poppins;
	}
	.text-input{
		border-radius:10px;
		width: 80%;
	}
	a:link {
  		color: white;
	}

	a:visited {
  		background-color: cyan;
	}

	a:hover {
  		background-color: lightgreen;
	}

	a:active {
  		background-color: hotpink;
	}
</style>

<div class="page-wrapper">
	
</div>


<!-- <div class = "footer"> 
	<div class = "footer-content">
		<div class="footer-section about">
			<h1 class="logo-text"><span>Dheemaan<span> Daash</h1>
				<p>
					Hello! I am Dheemaan Daash.
				</p>
				<div class="contact">
					<span><i class = "fas fa-phone"></i> &nbsp; +8801707070001 </span>
					<span><i class = "fas fa-envelope"></i> &nbsp; info@dhiman.com </span>
				</div>
				<div class="socials">
					<a href="#"><i class="fab fa-facebook"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</div>
		</div>

		<div class="footer-section links">
			<h2>Quick Links</h2>
			<br>
			<ul>
				<a href="#"><li>Home</li></a>
				<a href="#"><li>Registration</li></a>
				<a href="#"><li>Login</li></a>
			</ul>

		</div>
		<div class="footer-section contact-form">
			<h2>Contact Us</h2>
			<br>
			<form action="index.html" method="post">
				<input type="email" name="email" class = "text-input contact-input" placeholder="Your email address."></input>
				<textarea name="message" class="text-input contact-input" placeholder="Your message."></textarea>
				<button type="submit" class="btn btn-big">
					<i class="fas fa-envelope"></i>
					Send
				</button>
			</form>
		</div>
	</div>
		<div class = "footer-bottom">
			&copy; www.dheemaan.com | Designed by DHIMAN.
		</div>
		
</div>-->
<div class="footer">
<div class="footer-parent">
	<div class="padding">
		<div class="fix one floatleft">
			<h1 class="logo-text"><span>Dheemaan<span> Daash</h1>
				<p>
					Hello! I am Dheemaan Daash.
				</p>
				<div class="contact">
					<span><i class = "fa fa-phone"></i> &nbsp; +8801707070001 </span>
					<br>
					<span><i class = "fa fa-envelope"></i> &nbsp; info@dhiman.com </span>
				</div>
				<div class="socials">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
		</div>
		<div class="fix two floatleft">
			<h2>Quick Links</h2>
			<ul>
				<a href="Home.php"><li>Home</li></a>
				<a href="Registration.php"><li>Registration</li></a>
				<a href="Login Form.php"><li>Login</li></a>
			</ul>
		</div>
		<div class="fix three floatleft">
			<h2>Contact Us</h2>
			<br>
			<form action="index.html" method="post">
				<input type="email" name="email" class = "text-input contact-input" placeholder="Your email address."></input>
				<br><br>
				<textarea name="message" class="text-input contact-input" placeholder="Your message."></textarea>
				<button type="submit" class="btn btn-big">
					<i class="fa fa-envelope"></i>
					Send
				</button>
			</form>
		</div>
	</div>
</div>
		<div class = "footer-bottom">
			&copy; www.dheemaan.com | Designed by DHIMAN.
		</div>
</div>

</html>