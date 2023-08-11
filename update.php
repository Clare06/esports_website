<?php

session_start();
$gamerID=$_SESSION['gamerID'];
$gamerName1="";
$eMail1="";
$password1="";
$rolename1="";
$status1="";

if(isset($_POST['gamerName1']) ){
$gamerName1=$_POST['gamerName1'];	
if($gamerName1==NULL)	{
	$gamerName1=$_SESSION['gamerName'];
}
}

if(isset($_POST['eMail1']) ){
$eMail1=$_POST['eMail1'];	

	if($eMail1==NULL)	{
	$eMail1=$_SESSION['eMail'];
}
}

if(isset($_POST['password1']) ){
$password1=$_POST['password1'];	
	if($password1==NULL)	{
	$password1=$_SESSION['password'];

}
}

if(isset($_POST['rolename1']) ){
$rolename1=$_POST['rolename1'];	
	
}

if(isset($_POST['status1']) ){
$status1=$_POST['status1'];	
	
}



include_once('Include/dbConn.php');
	
	
	 $sql="UPDATE gamer SET gamerName = '$gamerName1', eMail = '$eMail1', password = '$password1', status = '$status1' WHERE gamer.gamerID = $gamerID ";
	
    if($_SESSION['gamerrole']==2){
		
		$sql="UPDATE gamer SET gamerName = '$gamerName1', eMail = '$eMail1', password = '$password1', role = '$rolename1', status = '$status1' WHERE gamer.gamerID = $gamerID ";
		
	}

	$result=mysqli_query($conn,$sql);
	
	
	
	//$no=mysqli_num_rows($result);

if($result){
	?>
<script>
alert("updated");
//window.location="users.php"	;


</script>

<?php
	
unset($_SESSION['gamerName']);

unset($_SESSION['gamerrole']);

unset($_SESSION['eMail']);

unset($_SESSION['status']);

unset($_SESSION['gamerID']);
	
unset($_SESSION['password']);
$sqli="SELECT gamer.*,role.rolename FROM gamer,role where gamer.eMail='$eMail1' AND gamer.password='$password1' AND gamer.role=role.rid LIMIT 1";
	
	$resulti=mysqli_query($conn,$sqli);
	

	//$no=mysqli_num_rows($resulti);
	
	
	while($row=mysqli_fetch_assoc($resulti)){
	
	$_SESSION['gamerName']=$row["gamerName"];
	$_SESSION['gamerrole']=$row["role"];
	$_SESSION['eMail']=$row["eMail"];
    $_SESSION['status']=$row["status"];
	$_SESSION['gamerID']=$row["gamerID"];	
  	$_SESSION['password']=$row["password"];
	}	
	header("location:index.php");
	}

else{
	
	?>
<script>
alert("not updated");
window.location="index.php"	;


</script>

<?php
}


?>