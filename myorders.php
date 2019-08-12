<html>
<head>
<style>

.mm{
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
   left: 1040px;
   font-size: 20px;
}
#p13 {  position: absolute; top : 60px; left :900px; font-size :20px;    }
#tic{
 
   position : absolute;
   top : 200px;
   left : 550px;
    background-color : #a9a9a9;
	
	
}
#t1{   position: relative ; top:   100px; left : 30px;}
#er{  min-width : 800px;} 
</style>


</head>

<body bgcolor="#deb887">
 <div class="mm">
  <img src="capture.jpg" id="i1">
  <a href="logout.php"><button value="LOGIN" id="p100" class="b1" onclick="form.php">LOGOUT</button></a>
   <a href="top1.html"><button value="LOGIN" id="p13" class="b1" > BACK </button></a>
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
     
	    echo  "<div id='t1'> <table border='2'>";
	   echo "<tr><th>PERSONAL INFORMATION   </th></tr>";
	   echo "<tr><td>NAME: </td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ".$row[0]."</td></tr>";
	   echo "<tr><td>EMAIL:   </td><td>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     ".$row[2]."</td></tr>";
	   echo "<tr><td>PHONE: </td><td>   &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp     ".$row[4]."</td></tr>";
	   echo "<tr><td>GENDER:</td><td>  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp      ".$row[5]."</td></tr>";
	   echo  "<tr><td>DATE OF BIRTH: </td><td>&nbsp&nbsp&nbsp&nbsp  ".$row[6]."</td></tr>";
	   echo " </table></div>";
	   }
	 $q5="SELECT * FROM orders WHERE fname='$pn'";
   $result5=mysql_query($q5);
    echo "<div id='tic'>";
    while($row=mysql_fetch_array($result5)){

	  echo"<table id='er' border='2' bordercolor='#ff0000'>";
	   echo"<tr> <th>PNR</th> <th>TRAIN NAME</th> <th>NO</th> <th>FROM</th> <th>TO</th> <th>SEATS</th> <th>ARRIVAL</th> <th>DEPARTURE</th>"; 
	    echo"<tr>";
      echo"<td>".$row[8]."</td>";  
      echo"<td>".$row[9]."</td>";  
      echo"<td>".$row[10]."</td>";  
	  echo"<td>".$row[11]."</td>"; 
	  echo"<td>".$row[12]."</td>"; 
	  echo"<td>".$row[13]."</td>"; 
	  echo"<td>".$row[14]."</td>"; 
	  echo"<td>".$row[15]."</td>"; 
      echo "</tr>";
       
	 echo "<br><br><br><br>";
   }
    echo "</table>";
   echo "</div>";
}

else {

echo "plz login ";
 echo "<button><a href='form.php'>LOGIN HERE</a></button>";
}
?>
</body>
</div>
</html>
