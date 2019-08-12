<html>
<head>
<style>
  .b2{
  background-color: #0066FF;
  height: 30px;
  width: 87px;
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
  background-image: url("q14.jpg");
  max-width: windows.width;
}
</style>


</head>
<body bgcolor="orange">

<?php

$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$dd=$_POST['d'];
   session_start();
if(isset($_SESSION['name'])){
  
  echo  " <form method='POST'  action='nos.php'>
  <input type='hidden' name='a' value=$x  >
  <input type='hidden' name='b' value=$y >
  <input type='hidden' name='c'  value=$z >
  <input type='hidden' name='d'  value=$dd >
  
  <input type='submit' id='jadu' value='SUBMIT'>
    <script type='text/javascript'>
	  document.getElementById('jadu').click();
	</script>
  </form>";

}
else{
  echo "<br><br><br>";
 echo "<center><h1> YOU ARE NOT LOGGED IN.</h1> <br><br>";
 echo "<h1> Please log in here to continue.</h1>";
  echo "<form method='POST' action='extralogin.php'>
   <h2> <label>This is your login Space:</label>
	<input type='hidden' name='a' value=$x  >
  <input type='hidden' name='b' value=$y >
  <input type='hidden' name='c'  value=$z >
  <input type='hidden' name='d'  value=$dd >
  <br><br>
 <label for='qw'> Enter your username/name :</label>
  <br>
 <input type='text' name='p' size='30' id='qw' required> <br>
Enter your password:
<br>
<input type='password' name='q'  size='30' required>
<br> </h2>
<input type='submit' value='SUBMIT'>
<input type='reset' value='RESET'>


</form>";


echo "<br><br><br></center>";


}
?>
  <a href="count.php"> <button id="p101" class="b2"> BACK </button>
  <a href="top1.html"> <button id="p102" class="b2"> HOME </button>
</body>
</html>