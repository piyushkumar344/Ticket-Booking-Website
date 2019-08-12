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
  background-image: url("q17.jpg");
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
  $t=$_POST['a'];
  $u=$_POST['b'];
  $v=$_POST['c'];
  $w=$_POST['d'];
  $x=$_POST['e'];
  $y=$_POST['f'];
  $z=$_POST['g'];
 
  
  mysql_connect("localhost","root","");
  mysql_select_db("trains");
  $q="INSERT INTO people(fname,lname,email,password,phone,gender,dob) VALUES('$t','$u','$v','$w','$x','$y','$z')";
  mysql_query($q);
  
    echo "<br><br><br>";
 echo "<center><h1>REGISTRATION SUCCESSFUL!!</h1>";
 echo "";
 echo "
     <h1> GOTO:</h1> 
	 <br><br>
      <ul type='disc'><h2>
	 <a href='top1.html'> <li> HOME</li></a>
	 
	  <a href='top1.html'> <li> FIND TRAINS </li></a>
	   
	  </h2>
	  <br><br>
	  <h1>  &nbsp&nbsp &nbsp&nbspPLEASE LOGIN TO ENJOY MORE OF OUR SERVICES.</h1>
	  </center>
	  
	  </ul>
 
 
 
 ";
  
 ?>
</body>
</html>