<html>
<head>
<style>
#tic{
  
   position : absolute;
   top : 200px;
   left : 170px;
    background-color : pink;
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
  width: 100px;
  color: black;

}
#p100{
    position: absolute;
   
   top: 250px;
   left: 900px;
   font-size: 20px;
}
body{
  background-image: url("q14.jpg");
  max-width: windows.width;
}
#p11 {      position: absolute;
   
   top: 350px;
   left: 900px;
   font-size: 20px; }
</style>


</head>

<body>
   <div class="mm">
  <img src="capture3.jpg" id="i1">
 
 </div>

<?php

$pn=$_POST['pnr'];


mysql_connect("localhost","root","");
	mysql_select_db("trains");

  $q="SELECT * FROM orders where pnr='$pn'";
  $result=mysql_query($q);
  $con=mysql_num_rows($result);
   echo "<div id='tic'>";
  if($con==0)   echo "<h1>TICKET NOT CONFIRMED!!!</h1>";
  else {
   echo "<h1>TICKET CONFIRMED</h1>";
  while($row=mysql_fetch_array($result)){
	
   
         
     echo  " <table border='0'>";
	       echo "<tr><th> PERSONAL INFORMATION       </th></tr>";
	   echo "<tr><td>NAME:  </td><td>  ".$row[0]."</td></tr>";
	   echo "<tr><td>EMAIL:  </td><td> 	   ".$row[2]."</td></tr>";
	   echo "<tr><td>PHONE:   </td><td>       ".$row[4]."</td></tr>";
	   echo "<tr><td>GENDER:   </td><td>        ".$row[5]."</td></tr>";
	   echo  "<tr><td>DATE OF BIRTH: </td><td>   ".$row[6]."</td></tr>";
	   echo "<tr><td>BALANCE    </td><td>       :".$row[7]."</td></tr>";
	   
	   echo " </table>";
	   echo "<h4> TRAIN DETAILS</h4>";
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
     echo "</table>";
   }
   echo "</div>";
 
  }
?>
<a href="logout.php"><button value="LOGIN" id="p100" class="b1">LOGOUT</button></a>
<a href="top1.html"><button value="LOGIN" id="p11" class="b1" >HOME</button></a>

</body>
</html>
