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
   font-size: 15px;
}
#tic{
  
   position : absolute;
    top :330px;
	left : 400px;
    background-color : yellow;
	z-index:2;
	
  
}
</style>
</head>

<body bgcolor="#fa8072">
   <div class="mu">
  <img src="capture.jpg" id="i1">
  <a href="logout.php"><button value="LOGIN" id="p100" class="b1" onclick="form.php">LOGOUT</button></a>
</div>



<?php


  session_start();

  
  if(isset($_SESSION['name'])){
  $user=$_SESSION['name'];
  $pnr=$_POST['a'];
  
  mysql_connect("localhost","root","");
  mysql_select_db("trains");
  $q="SELECT * FROM orders where pnr='$pnr'";
  $result=mysql_query($q);
   echo "<center>"; 
   
   echo "<br><br><br><br>";
   echo "<h2> Your ticket having the details as below &nbsp:</h2>";
	 
	 
    while($row=mysql_fetch_array($result)){
               $sea=$row[13];
		        $tpn=$row[17];
				echo "<div id='tic'>";
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
	 
	 echo "</div>";
	
   }
	 
   
    echo "<br><br><br><br>"; echo "<br><br><br><br>";
   echo "<h2>This ticket has been cancelled.</h2>";
    $q1="DELETE FROM orders WHERE pnr='$pnr'";
    $result1=mysql_query($q1);

  
	
	
	$q3="SELECT * FROM trains WHERE pnr='$tpn'";
    $result3=mysql_query($q3);
    while($row=mysql_fetch_array($result3)){
	  
	  $cst=$row[10];
	  $avls=$row[8];

    }
	$avls+=$sea;
	$q2="UPDATE trains set seats='$avls' WHERE pnr='$tpn'";
mysql_query($q2);


     $q4="SELECT * FROM people WHERE fname='$user'";
    $result4=mysql_query($q4);
    while($row=mysql_fetch_array($result4)){
	  
	 
	  $avlb=intval($row[8]);

    }
	$avlb=$avlb+($sea*$cst);
	$q7="UPDATE people set balance='$avlb' WHERE fname='$user'";
	
	
	
    mysql_query($q7);  
   echo "<h2>Your updated balance is &nbsp&nbsp:".$avlb.".</h2>";
   echo "</center>";
 
 
    
	}





?>



</body>

</hmtl>

