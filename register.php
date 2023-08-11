<?php

session_start();

$teamLeaderusrID="";
$eMail="";
$teamate1usrID="";
$teamate2usrID="";
$teamate3usrID="";
$teamate4usrID="";
$TeamName="";
$whatsappno="";

if(isset($_POST['teamLeaderusrID']) ){
$teamLeaderusrID=$_POST['teamLeaderusrID'];	
	
}
if(isset($_POST['teamate1usrID']) ){
$teamate1usrID=$_POST['teamate1usrID'];	
	
}
if(isset($_POST['teamate2usrID']) ){
$teamate2usrID=$_POST['teamate2usrID'];	

}	
if(isset($_POST['teamate3usrID']) ){
$teamate3usrID=$_POST['teamate3usrID'];	
	
}
if(isset($_POST['teamate4usrID']) ){
$teamate4usrID=$_POST['teamate4usrID'];	
	
}
if(isset($_POST['TeamName']) ){
$TeamName=$_POST['TeamName'];	
	
}
if(isset($_POST['whatsappno']) ){
$whatsappno=$_POST['whatsappno'];	
	
}
if(isset($_POST['eMail']) ){
$eMail=$_POST['eMail'];	
	
}


//echo($TeamName);
//echo($teamate1usrID );
//echo($teamate2usrID);
//echo($teamate3usrID);
//echo($teamate4usrID );
//echo($whatsappno );
//	echo($eMail );
//	echo($teamLeaderusrID);


$gamer=$_SESSION['gamerID'];

$filled=(($teamLeaderusrID!=NULL)&&($TeamName!=NULL)&&($teamate1usrID!=NULL)&&($teamate2usrID!=NULL)&&($teamate3usrID!=NULL)&&($teamate4usrID!=NULL)&&($whatsappno!=NULL)&&($eMail!=NULL));

//echo("<br>");
//echo($filled);

if($filled==1){
	include_once('Include/dbConn.php');
	
	
	 $sql="INSERT INTO cod (leaderID, teamLeaderusrID, teamate1usrID, teamate2usrID, teamate3usrID, teamate4usrID, TeamName, eMail, whatsappno, gamerID) VALUES (NULL, '$teamLeaderusrID', '$teamate1usrID', '$teamate2usrID', '$teamate3usrID', '$teamate4usrID', '$TeamName', '$eMail', '$whatsappno', '$gamer');";
	
	$result=mysqli_query($conn,$sql);
	
	}else {
	?>
	<script>

alert("Fill it fully!");

alert("not registered");
window.location="registerform.php";

</script>
	
	
	
	
	<?php
}

if($result){
	?>
<script>
alert("Registered Succesfully!");



</script>

<?php
	
	$sql1="SELECT * FROM cod WHERE gamerID='$gamer'";
	
	$result1=mysqli_query($conn,$sql1);
	
	$no=mysqli_num_rows($result1);
	
if($no>0){
	
	while($row=mysqli_fetch_assoc($result1)){
	
	$_SESSION['leaderID']=$row["leaderID"];
	
 
	}
	 header("location:tournaments.php");	
}
	
}
	
	else


{?>
<script>
alert("not registered");
window.location="tournaments.php"	;


</script>	
	
	
	
	
<?php	
}





?>
























