<!DOCTYPE html>
<html>
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
		color: #686868;
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
		flex-direction: row;
	}
	.footer .footer-content .footer-section{
		flex: 1;
		padding:5px;
		border: 1px solid white;
	}
</style>

<link rel="stylesheet" href="C:\xampp\htdocs\webprac\font-awesome-4.7.0\css\font-awesome.min.css"></link>

<div class = "footer">
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
		
</div>

</html>