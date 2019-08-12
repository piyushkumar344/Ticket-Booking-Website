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
#px{
position: relative;
 left : 750px;
 top : -3px;
 

}
#py{
position: relative;
 left : 550px;
 
 

}
body{
 max-width : windows.width;
 max-height : windows.height;
  background-image: url("q17.jpg");
 background-repeat: no-repeat;/
 height: 100vh;
width: 100vw;
}
.ts{  font-size : 17px; font-weight :bold;}
</style>

</head>
<body>
  <div class="mu">
  <img src="capture2.jpg" id="i1">
  <a href="logout.php"><button value="LOGIN" id="p100" class="b1" onclick="form.php">LOGOUT</button></a>
</div>

<?php
session_start();
  $rno=intval($_POST['a']);
  $st=$_POST['b'];
  $en=$_POST['c'];
  $dd=$_POST['d'];
  $user=$_SESSION['name'];
  $cst=0;
  $bal=-1;
   
   echo "<div id='py'><h2>YOU ARE LOGGED IN AS : ".$user."</h2></div>";
     
	  //echo $rno.$st.$en.$dd.$user;
	 
   mysql_connect("localhost","root","");
   mysql_select_db("trains");
  $q="SELECT * FROM trains WHERE pnr='$rno'";
  $result=mysql_query($q);
    
   while($row=mysql_fetch_array($result)){
      $cst=intval($row[10]);
	}
	
	echo "<div id='px'>";
	$q1="SELECT * FROM people WHERE fname='$user'";
  $result1=mysql_query($q1);
    
   while($row=mysql_fetch_array($result1)){
      $bal=intval($row[8]);
	}
 
    echo"<h2>SELECT NO OF SEATS<br></h2>";
    
   echo"
    <form  method='POST' action='tckt.php'>
     <select onchange='myfun()' name='e' id='kit'>
	   <option value='Select'> NO. OF SEATS </option>
      <option value='1'>1</option>
	  <option value='2'>2</option>
	  <option value='3'>3</option>
	  <option value='4'>4</option>
	  <option value='5'>5</option>
	  <option value='6'>6</option>
	  <option value='7'>7</option>
	  <option value='8'>8</option>
	  <option value=9>9</option>
	  </select>
	  <input type='hidden' name='a' value=$rno  >
      <input type='hidden' name='b' value=$st >
      <input type='hidden' name='c'  value=$en >
      <input type='hidden' name='d'  value=$dd >
	  <div class='ts'>
	  <br><br> TOTAL COST:<br>
	 <input type='number' name='tot' value=0 id='tot' disabled>
	 <br><br> AVAILABLE BALANCE:<br>
	 <input type='number' value=$bal name='avl'  disabled>
	  <br><br>  <br>
    <input type='SUBMIT' value='PROCEED' id='hd'>
	</div>
   </form>
     <script type='text/javascript'>
	   function myfun(){
	      let bbp=document.getElementById('kit').value;
		  let cst=$cst;
		  let bl=$bal;
		  document.getElementById('tot').value=cst*bbp;
		  if(bbp*cst > bl) { document.getElementById('hd').value='cannot proceed'; document.getElementById('hd').disabled=true;  
		    document.getElementById('mydiv').style.display='block';
		  
		  }
	      else {
		      document.getElementById('hd').value='proceed'; document.getElementById('hd').disabled=false;  
		    document.getElementById('mydiv').style.display='none';
		  
		  }
	   }
	 
	 </script>
	 
	 
	 
	 <div id='mydiv' class='ts' style='display:none; align:center;'>
	 <p> YOU DONT HAVE ENOUGH BALANCE </p>
	   <form method='POST' action='addcash.php'>
     
	 <input type='hidden' name='a' value=$rno  >
      <input type='hidden' name='b' value=$st >
      <input type='hidden' name='c'  value=$en >
      <input type='hidden' name='d'  value=$dd >
	  <br>
	  CARD NO:
	  <input type='number' name='crd' required> 
      AMOUNT:
	  <input type='number' name='mon' required> 
      	  
  <br><br>
	  <input type='submit' value='ADD MONEY TO PROCEED'>
	    </form>
	 </div>
      
   ";
 echo "</div>";
  
   
   
   


?>
</body>


</html>
