<!DOCTYPE html>
<html>
<style>
body {
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
height: 145px; 
}
</style>
<body>
<div class="login-box">
<form action="action_page.php">
  <div class="container">
    <input type="text" placeholder="Username" name="uname" required>
    </br></br>
    <input type="password" placeholder="Password" name="psw" required>
    <button type="submit">Login</button>
  </div>
</form>
</div>
</body>
</html>
