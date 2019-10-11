<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
html,
body {
  height: 2%;
  padding: 0px;
  margin: 0px;
  background: #f6f6f6;
  font-family: Poppins;
  background-image: url("gradient_bg.png");
  background-repeat: repeat-x;
}
	.page-wrapper{
		min-height: 5%;
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
     padding: 3% 1% 4% 1%;
	}
	.btn {
    	position: relative;
    	cursor: pointer;
    	border-radius: 5px;
	}
	.btn-theme {
    	color: #404040;
    	background: #FF9800;
    	padding: 10px 40px 10px 24px;
	}
	a:link {
  		color: black;
	}

	a:visited {
  		background-color: #FF9800;
	}

	a:hover {
  		background-color: lightgreen;
	}

	a:active {
		background-color: hotpink;
	}
  		
</style>

<body>
	<div class="page-wrapper">
		
	</div>
<div class="footer">
	<div class="footer-parent">
		<div class="padding">
			<div class="fix one floatleft">
				<a href="Home.php" class="btn btn-theme"></a>
			</div>
			<div class="fix two floatleft">
				<a href="Registration.php" class="btn btn-theme"></a>
			</div>
			<div class="fix three floatleft">
				<a href="Login Form.php" class="btn btn-theme"></a>
			</div>
		</div>	
	</div>
</div>
</body>
</html>

<?php
	include('Footer.php');
?>