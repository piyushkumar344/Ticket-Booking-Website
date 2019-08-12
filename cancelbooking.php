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
  width: 100px;
  color: black;

}
#p100{
    position: absolute;
   
   top: 60px;
   left: 1000px;
   font-size: 15px;
}
#p13 {    position: absolute;  top : 500px; left: 800px; font-size :20px;}
#cn{
   position: relative;
  top :   0px;
  left : 00px;

}
body{
  background-image: url("qw2.jpg");
  max-width: windows.width;
}
</style>

</head>
<body>
  <div class="mu">
  <img src="capture.jpg" id="i1">
  <a href="logout.php"><button value="LOGIN" id="p100" class="b1">LOGOUT</button></a>
</div>
 
<?php

  session_start();
if(isset($_SESSION['name'])){
  echo "<center><br><br><h1>You are logged in as &nbsp&nbsp:".$_SESSION['name']."<h1>";
  
  echo "<div id='cn'>";
  echo "
  
   <form method='POST' action='cb.php'>
 
 <br>
  Enter PNR: <br>
 <input type='number' name='a' size='30' required><br>
 
  <br>
  <input type='submit' value='SUBMIT'>
   <input type='reset' value='RESET'>
  </form>
  
  </center>
  ";
  
  
}

else {

     echo "plz login ";
     echo "<button><a href='form.php'>LOGIN HERE</a></button>";
}
echo "</div>";







?>

  <a href="top1.html"><button value="LOGIN" id="p13" class="b1" > BACK </button></a>

</body>
   
</hmtl>

