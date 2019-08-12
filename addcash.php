<html>
<?php
session_start();
  $rno=intval($_POST['a']);
  $st=$_POST['b'];
  $en=$_POST['c'];
  $dd=$_POST['d'];
  $user=$_SESSION['name'];
  $money=intval($_POST['mon']);
  $crd=intval($_POST['crd']);
  $cst=0;
  $bal=-1;
   
   echo "<h1> you are logged in ".$user."</h1>";
   mysql_connect("localhost","root","");
   mysql_select_db("trains");
  
	$q1="SELECT * FROM people WHERE fname='$user'";
  $result1=mysql_query($q1);
    
   while($row=mysql_fetch_array($result1)){
      $bal=intval($row[8]);
	}
    
	
	//echo $rno.$st.$en.$dd.$user;
	$bal=$bal+$money;
	
	$query="UPDATE people set balance='$bal' WHERE fname='$user'";
	mysql_query($query);
	$query1="UPDATE people set cardno='$crd' WHERE fname='$user'";
	mysql_query($query1);
	
	echo "
	  <form method='POST'  action='nos.php'>
 
     
	 <input type='hidden' name='a' value=$rno  >
      <input type='hidden' name='b' value=$st >
      <input type='hidden' name='c'  value=$en >
      <input type='hidden' name='d'  value=$dd > 
  <input type='submit' id='jadu' >
    <script type='text/javascript'>
	  document.getElementById('jadu').click();
	</script>
  </form>
	
	
	
	
	
	
	
	
	
	";
?>
</html>
