<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
	.page-wrapper{
		min-height: 100%;
	}
	html,
body {
  height: 100%;
  padding: 0px;
  margin: 0px;
  background: #f6f6f6;
  font-family: Poppins;
  background-image: url("gradient_bg.png");
  background-repeat: repeat-x;
}
button {
  border-radius: 25px;
  font-family: Poppins;
  background-color: #4CAF50;
  color: white;
  padding: 10px 0px;
  margin: 20px 0;
  border: none;
  width: 100%;
}
button:hover {
  opacity: 0.8;
}
input[type="text"] {
  border: none;
  border-bottom: 2px solid #4CAF50;
  width: 280px;
  font-family: Poppins;
  font-size: 20px;
  color: black;
}
input[type="email"] {
  border: none;
  border-bottom: 2px solid #4CAF50;
  width: 280px;
  font-family: Poppins;
  font-size: 20px;
  color: black;
}
input[type="password"] {
  border: none;
  border-bottom: 2px solid #4CAF50;
  width: 280px;
  font-family: Poppins;
  font-size: 20px;
  color: black;
}
	.login-box{
		width: 285px;
		position: absolute;
		top: 40%;
		left: 30%;
		color: #4CAF50;
		border-radius: 15px;
		border: 2px solid #4CAF50;
		padding: 20px; 
		width: 300px;
		height: 300px; 
}
</style>

<body>
	<div class="page-wrapper">
		
	</div>
<div class="login-box">
<form action="action_page.php">
  <div class="container">
    <input type="text" placeholder="First Name" name="uname" required>
    </br></br>
    <input type="text" placeholder="Last Name" name="uname" required>
    <br><br>
    <input type="email" placeholder="E-mail" name="uname" required></input>
    <br><br>
    <input type="password" placeholder="Password" name="psw" required>
    <button type="submit">Register</button>
  </div>
</form>
</div>
</body>
</html>

<?php
include('Footer.php');
?>