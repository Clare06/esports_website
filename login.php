<?php
session_start();

if (isset($_POST['UN']) && isset($_POST['PW'])){
	
	$UN=$_POST["UN"];
	$PW=$_POST["PW"];
	
	include_once('Include/dbConn.php');
	
	$sql="SELECT gamer.*,role.rolename FROM gamer,role where gamer.eMail='$UN' AND gamer.password='$PW' AND gamer.role=role.rid LIMIT 1";
	
	$result=mysqli_query($conn,$sql);
	
	$no=mysqli_num_rows($result);
	
if ($no>0){
	
	while($row=mysqli_fetch_assoc($result)){
	
	$_SESSION['gamerName']=$row["gamerName"];
	$_SESSION['gamerrole']=$row["role"];
	$_SESSION['eMail']=$row["eMail"];
    $_SESSION['status']=$row["status"];
	$_SESSION['gamerID']=$row["gamerID"];	
  	$_SESSION['password']=$row["password"];
	}
	
	$gamer=$_SESSION['gamerID'];
	
	
	$sql1="SELECT * FROM cod WHERE gamerID='$gamer'";
	
	$result1=mysqli_query($conn,$sql1);
	
	$no1=mysqli_num_rows($result1);
	
if($no1>0){
	
	while($row1=mysqli_fetch_assoc($result1)){
	
	$_SESSION['leaderID']=$row1["leaderID"];
	
 
	}
	 header("location:index.php");	
}
	
	
	
	
	header("location:index.php");
	
}	else {?>
	<script>

     alert("Invalid Login!");
	window.location="index.php";





</script>	
	
<?php	
};
	
	
	
}else {?>

<script>

    alert("No Input!");
    window.location="index.php";



</script>





<?php };



?>