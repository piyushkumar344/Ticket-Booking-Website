<html>
<head>
<style>
#tic{
  align : center;
   position : absolute;
   top : 220px;
   left : 330px;
    background-color : pink;
}
.mu{
	height: 130px;
	background-color: black;
	border-width: 5px;
	max-width: windows.width;
}
.b1{
  background-color: #4CAF50;
  height: 40px;
  width: 87px;
  color: black;
  font-weight: bold;

}
#p100{
    position: absolute;
   
   top: 570px;
   left: 750px;
   font-size: 17px;
}
#p13{ position: absolute; top: 570px; left:620px; font-size:17px;                 }
#p14{ position: absolute; top: 570px; left:450px; font-size:17px;                 }
body{
 max-width : windows.width;
 max-height : windows.height;
  background-image: url("q18.jpg");
}
</style>

</head>

<body>
  <div class="mu">
  <img src="capture3.jpg" id="i1">
  
</div>

<?php
session_start();
  $rno=intval($_POST['a']);
  $st=$_POST['b'];
  $en=$_POST['c'];
  $dd=$_POST['d'];
  $user=$_SESSION['name'];
 
  $sea=intval($_POST['e']);
   $cst=0;
  $bal=-1;
  
   
  
     
	 // echo $rno.$st.$en.$dd.$user;
	 // echo $sea; echo"<br>";
	   mysql_connect("localhost","root","");
   mysql_select_db("trains");
  $q="SELECT * FROM trains WHERE pnr='$rno'";
  $result=mysql_query($q);
    
   while($row=mysql_fetch_array($result)){
      $tna=$row[0];
	  $tno=$row[1];
	  $dep=$row[6];
	  $arr=$row[7];
	  
      $cst=intval($row[10]);
	  $nays=intval($row[8]);
	}
	
	$q1="SELECT * FROM people WHERE fname='$user'";
  $result1=mysql_query($q1);
    
   while($row=mysql_fetch_array($result1)){
      $ln=$row[1];
	  $em=$row[2];
	  $pss=$row[3];
	  $phh=$row[4];
	  $gen=$row[5];
	  $dob=$row[6];
	  
      $bal=intval($row[8]);
	}
	
	$nayb=$bal-$cst*$sea;
	 
	 
	$query="UPDATE people set balance='$nayb' WHERE fname='$user'";
	mysql_query($query);
	$nays-=$sea;
    $query1="UPDATE trains set seats='$nays' WHERE pnr='$rno'";
	mysql_query($query1);
	 
    
     $q3="INSERT INTO orders(fname,lname,email,password,phone,gender,dob,balance,train,trainno,start,end,seats,arriv,dep,date,trpnr) VALUES('$user','$ln','$em','$pss','$phh','$gen','$dob','$nayb','$tna','$tno','$st','$en','$sea','$arr','$dep','$dd','$rno')";
  mysql_query($q3);
      
  $q4="SELECT * FROM orders WHERE fname='$user'";
   $result4=mysql_query($q4);
    while($row=mysql_fetch_array($result4)){
	  $nnn=$row[8];
	
	}
	
	 $q5="SELECT * FROM orders WHERE fname='$user' && pnr='$nnn'";
   $result5=mysql_query($q5);
   echo "<div id='tic'>";
    while($row=mysql_fetch_array($result5)){
	
   
         
     echo  " <table border='0'>";
	       echo "<tr><th> <center><h2>E-TICKET</h2>   </center>    </th></tr>";
	   echo "<tr><td>NAME: </td><td>".$user."</td></tr>";
	   echo "<tr><td>EMAIL: </td><td>     ".$em."</td></tr>";
	   echo "<tr><td>PHONE:     </td><td>      ".$phh."</td></tr>";
	   echo "<tr><td>GENDER:  </td><td>       ".$gen."</td></tr>";
	   echo  "<tr><td>DATE OF BIRTH:  </td><td>".$dob."</td></tr>";
	   echo "<tr><td>BALANCE      </td><td>    :".$nayb."</td></tr>";
	   
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


?>
    <a href="logout.php"><button value="LOGIN" id="p100" class="b1" >LOGOUT</button></a>
	  <a href="top1.html"><button value="LOGIN" id="p13" class="b1" >HOME</button></a>
	    <a href="svtc.php"><button value="LOGIN" id="p14" class="b1" >SAVE TICKET</button></a>
		  
</body>


</html>
