
<html>
<head>
<style>
table{
  
}
#er{
   position :absolute;
  left : 300px;
  top : 270px;
   min-width: 800px;

}
td{
  align : center;

}
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
.b2{
  background-color: #0066FF;
  height: 30px;
  width: 87px;
  color: black;

}
#p101{
    position: absolute;
   
   top: 520px;
   left: 600px;
   font-size: 17px;
}
body{
  background-image: url("qw2.jpg");
  max-width: windows.width;
}

</style>
</head>
<body  >
  <div class="mu">
  <img src="capture.jpg" id="i1">
  <a href="logout.php"><button value="LOGIN" id="p100" class="b1" onclick="form.php">LOGOUT</button></a>
</div>

<?php
 


  
  $x=$_POST['a'];
  $y=$_POST['b'];
   $dd=$_POST['d'];
   echo $dd;
   mysql_connect("localhost","root","");
  mysql_select_db("trains");
  $q="SELECT * FROM trains";
  
  $result=mysql_query($q);
    
	echo "<br><br>";
  
   echo "<center><h2> Showing trains from&nbsp&nbsp".$x."&nbsp&nbspto&nbsp&nbsp".$y.".</h2></center>";
   
    echo"<table id='er' border='2' bgcolor='#fa8072' bordercolor='black'>
	 <tr><th>TRAIN NAME</th><th>TRAIN NO.</th><th>DEPARTURE</th><th>ARRIVAL</th><th>SEATS</th><th>SELECT</th></tr>
	
	";
	 
   while($row=mysql_fetch_array($result)){
      $ph=-1; $ds=-1;  $cc=0;
   for($c=0;$c<8;$c++){
     
	  
	 if($x==$row[$c]) $ph=$c;
	 if($y==$row[$c])  $ds=$c;
	 }
	 if($ph >0 && $ds >0 && $ds > $ph) { 
	  $cc++; 
	      echo"<tr>";
      echo"<td>".$row[0]."</td>";  
      echo"<td>".$row[1]."</td>";  
      echo"<td>".$row[6]."</td>";  
	  echo"<td>".$row[7]."</td>"; 
	  echo"<td>".$row[8]."</td>"; 
	   echo"<td><form method='POST' action='check.php'>
                   <input type='hidden' name='a' value=$row[9]>
				   <input type='hidden' name='b' value=$x>
				    <input type='hidden' name='c' value=$y>
					 <input type='hidden' name='d' value=$dd>
				   
				   <input type='submit' value='BOOK'  >
                  </form>  
	   
	   </td>"; 
	   
	  
	  
       echo"</tr>";    
	 
	 
	 
	 }
 }
echo"</table>";

?>
<a href="top1.html"> <button id="p101" class="b2"> BACK </button>
</body>
</html>