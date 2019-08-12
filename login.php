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
   
   top: 80px;
   left: 1100px;
   font-size: 17px;
}
body{
  background-image: url("qw2.jpg");
  max-width: windows.width;
}
</style>
</head>
<body>
<body>
  <div class="mu">
  <img src="capture2.jpg" id="i1">
  
</div>
<?php

session_start();
$x=$_POST['a'];
$y=$_POST['b'];


if($x==""||$y=="") {
  echo "pura bhar be";
  echo "<br><br>";
  echo "<a href='form.php'>Please click to fill again";

}
else{
mysql_connect("localhost","root","");
mysql_select_db("trains");
$q1="SELECT * FROM people WHERE fname='$x' && password='$y'";
  $result=mysql_query($q1);
  $con=mysql_num_rows($result);
  
  
  
 if($con == 0) { 
 echo "<br><br><br>"; 
echo "<center>";
 echo "<h1> LOGIN FAILED!!!</h1>";
 echo "<br><br>";
echo "<h1>PLEASE FILL PROPERLY  OR  REGISTER.</h1>";
	
 echo"<a href='form.php'><h2>Please click here to fill again</h2>";
		
		
 echo "<br><br><br>";
		
	echo "<a href='form.php'> <button id='p101' class='b2'> REGISTER</button>";
  echo "<a href='top1.html'> <button id='p102' class='b2'> HOME </button>";
		echo "</center>";
}
 else {  
  
   $_SESSION['name']=$x;
   echo "<br><br><br>";
 echo "<center><h1>LOGIN SUCCESSFUL!!</h1>";
 echo "";
 echo "
     <h1> GOTO:</h1> 
	 <br><br>
      <ul type='disc'><h2>
	 <a href='top1.html'> <li> HOME</li></a>
	  <a href='myorders.php'> <li> MY TICKETS</li></a>
	  <a href='myprofile.php'> <li> MY PROFILE</li></a>
	  <a href='top1.html'> <li> FIND TRAINS </li></a>
	   <a href='logout.php'> <li> LOGOUT </li></a>
	  </h2>
	  </center>
	  
	  </ul>
 
 
 
 ";
 }
}
?>
</body>
</html>