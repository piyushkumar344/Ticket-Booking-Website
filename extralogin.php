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
.b2{
  background-color: #f8de7e;
  height: 30px;
  width: 100px;
  color: black;

}
#p101{
    position: absolute;
   
   top: 520px;
   left: 550px;
   font-size: 17px;
}
#p102{
    position: absolute;
   
   top: 520px;
   left: 700px;
   font-size: 17px;
}
body{
  background-image: url("q15.jpg");
  max-width: windows.width;
}

</style>

</head>

<body>
    <div class="mu">
    <img src="capture.jpg" id="i1">
    
    </div>

<?php

session_start();
$nm=$_POST['p'];
$ps=$_POST['q'];
$rr=$_POST['a'];
$ss=$_POST['b'];
$ee=$_POST['c'];
$dd=$_POST['d'];



mysql_connect("localhost","root","");
mysql_select_db("trains");
$q1="SELECT * FROM people WHERE fname='$nm' && password='$ps'";
  $result=mysql_query($q1);
  $con=mysql_num_rows($result);
  
  
  
 if($con == 0) {
 
echo "<br><br><br>"; 
echo "<center>";
 echo "<h1> LOGIN FAILED!!!</h1>";
 echo "<br><br>";
echo "<h1>PLEASE FILL PROPERLY  OR  REGISTER.</h1>";
	
 echo"<a href='check.php'><h2>Please click here to fill again</h2>";
		
		
 echo "<br><br><br>";
		
	echo "<a href='form.php'> <button id='p101' class='b2'> REGISTER</button>";
  echo "<a href='top1.html'> <button id='p102' class='b2'> HOME </button>";
		
		
	

echo "</center>";

 }
 
 else {  
  
  $_SESSION['name']=$nm;
  echo  " <form method='POST'  action='nos.php'>
  <input type='hidden' name='a' value=$rr >
  <input type='hidden' name='b' value=$ss >
  <input type='hidden' name='c'  value=$ee >
   <input type='hidden' name='d'  value=$dd >
  <input type='submit' id='jadu' value='SUBMIT'>
    <script type='text/javascript'>
	  document.getElementById('jadu').click();
	</script>
  </form>";
  

}
?>

  </body>

</html>