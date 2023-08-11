<?php

session_start();

$gamerName="";
$eMail="";
$password="";
$rolename="";
$status="";

if(isset($_POST['gamerName']) ){
$gamerName=$_POST['gamerName'];	
	
}
if(isset($_POST['eMail']) ){
$eMail=$_POST['eMail'];	
	
}
if(isset($_POST['password']) ){
$password=$_POST['password'];	

}	
if(isset($_POST['rolename']) ){
$rolename=$_POST['rolename'];	
	
}
if(isset($_POST['status']) ){
$status=$_POST['status'];	
	
}

$Filled=(($_POST['gamerName']!= NULL ) && ($_POST['eMail']!= NULL) && ( $_POST['password']!= NULL) );
?>


<?php
if($Filled==1){
	include_once('Include/dbConn.php');
	
	
	 $sql="INSERT INTO gamer (gamerID, gamerName, eMail, password, role, status) VALUES (NULL, '$gamerName', '$eMail', '$password', '$rolename', '$status')";
	
	$result=mysqli_query($conn,$sql);
	
	} else {
	?>
	<script>

alert("Fill it fully!");

alert("not saved");
window.location="index.php"	;

</script>
	
	
	
	
	<?php
}
	
	


if($result){
	?>
<script>
alert("Created Succesfully!");



</script>

<?php
	
	$sql1="SELECT gamer.*,role.rolename FROM gamer,role where gamer.eMail='$eMail' AND gamer.password='$password' AND gamer.role=role.rid LIMIT 1";
	
	$result1=mysqli_query($conn,$sql1);
	
	$no=mysqli_num_rows($result1);
	
if ($no>0){
	
	while($row=mysqli_fetch_assoc($result1)){
	
	$_SESSION['gamerName']=$row["gamerName"];
	$_SESSION['gamerrole']=$row["role"];
	$_SESSION['eMail']=$row["eMail"];
    $_SESSION['status']=$row["status"];
	$_SESSION['gamerID']=$row["gamerID"];
		
 
	}
	 header("location:index.php");	
}
	
	
}else{
	
	?>
<script>
alert("not saved");
window.location="index.php"	;


</script>

<?php
}

?>

