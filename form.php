<html>
<head>
<style>
.mu{
	height: 130px;
	background-color: black;
	border-width: 5px;
	max-width: windows.width;
}
.b1{
  background-color: #4CAF50;
  height: 30px;
  width: 87px;
  color: black;

}
#p100{
    position: absolute;
   
   top: 60px;
   left: 1000px;
   font-size: 17px;
}
#t1{
position :absolute;
   top: 170px;
   left : 200px;
   font-weight :bold;
}
#t2 {
position :absolute;
   top :170px;
   left :840px;
  font-weight :bold;
}
body{
  background-image: url("q20.jpg");
  max-width: windows.width;
}
</style>
<body> 
<body  >
  <div class="mu">
  <img src="capture.jpg" id="i1">
  <a href="top1.html"><button value="LOGIN" id="p100" class="b1">BACK</button></a>
</div>
<div id="t1">
<form method="POST" action="login.php">
<h1> <center>LOGIN: </center></h1>
This is your login Space:
<br><br>
Enter your username/name : <br>
<input type="text" name="a" size="30"><br>
Enter your password:
<br>
<input type="password" name="b"  size="30">
<br><br><br>
<input type="submit" value="SUBMIT"> 
<input type="reset" value="RESET">
 </div>

</form>


<div id="t2">
<form method="POST" action="connect.php">
    <h1> <center> REGISTRATION:</center></h1>
This is your registration form: <br>
Enter your first name : <br>
<input type="text" name="a" size="30" required><br>
Enter your last name : <br>
<input type="text" name="b" size="30" required><br>
Enter your email:
<br>
<input type="email" name="c"  size="30" required><br>
Enter your password:
<br>
<input type="password" name="d"  size="30" required><br>
Enter your phone:
<br>
<input type="number" name="e"  size="30" required>
<br>
Select your gender :<br>
<input type="radio" name="f" value="MALE" checked>Male<br>
<input type="radio" name="f" value="FEMALE">Female<br>
<input type="radio" name="f" value="OTHER">Other<br>
Enter your date of birth:<br>
<input type="date" name="g" value="select" required><br> <br>
<input type="submit" value="SUBMIT">
<input type="reset" value="RESET">



</form>
</div>









</body>
</html>