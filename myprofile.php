<html>
<head>
<style>
#tic{
 
   position : absolute;
   top : 270px;
   left : 300px;
    background-color : #fa8072;
	min-width :550px;
}
.mm{
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
   font-size: 15px;
}
.b1{
  background-color: #4CAF50;
  height: 40px;
  width: 87px;
  color: black;
  font-weight: bold;

}
body{
 max-width : windows.width;
 max-height : windows.height;
  background-image: url("q20.jpg");
}
#p13{ position: absolute; top: 540px; left:500px; font-size:17px;                 }
</style>


</head>

<body>
 <div class="mm">
  <img src="capture.jpg" id="i1">
  <a href="logout.php"><button value="LOGIN" id="p100" class="b1" onclick="form.php">LOGOUT</button></a>
 </div>

<?php


 session_start();
if(isset($_SESSION['name'])){

  $pn=$_SESSION['name'];
mysql_connect("localhost","root","");
	mysql_select_db("trains");

  $q="SELECT * FROM people where fname='$pn'";
  $result=mysql_query($q);
   
   
   
  while($row=mysql_fetch_array($result)){
	    echo  " <table border='2' id='tic'>";
	   echo "<tr><th>PERSONAL INFORMATION   </th></tr>";
	   echo "<tr><td>FIRST NAME:&nbsp&nbsp&nbsp </td><td> ".$row[0]."</td></tr>";
	   echo "<tr><td>LAST NAME:&nbsp&nbsp&nbsp  </td><td>    ".$row[1]."</td></tr>";
	   echo "<tr><td>EMAIL:     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  </td><td>   ".$row[2]."</td></tr>";
	   echo "<tr><td>PHONE:    &nbsp&nbsp&nbsp &nbsp&nbsp </td><td>   ".$row[4]."</td></tr>";
	   echo "<tr><td>GENDER:  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp </td><td>     ".$row[5]."</td></tr>";
	   echo  "<tr><td>DATE OF BIRTH: &nbsp&nbsp </td><td> ".$row[6]."</td></tr>";
	   echo "<tr><td>CARD NO.: </td><td>    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ".$row[7]."</td></tr>";
	   echo "<tr><td>BALANCE : </td><td>   &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp".$row[8]."</td></tr>";
	   
	   echo " </table>";
	   }
 }

else {

echo "plz login ";
 echo "<button><a href='form.php'>LOGIN HERE</a></button>";
}
?>
  <a href="top1.html"><button value="LOGIN" id="p13" class="b1" > BACK </button></a>

</body>
</html>
