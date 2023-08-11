<?php



if(isset($_POST['rolename']) ){
$rolename=$_POST['rolename'];	
	
}

if(isset($_POST['status']) ){
$status=$_POST['status'];	
	
}

if(isset($_POST['gamerID']) ){
$gamerID=$_POST['gamerID'];	
	
}



include_once('Include/dbConn.php');
	
	
		
		$sql="UPDATE gamer SET role = '$rolename', status = '$status' WHERE gamer.gamerID = $gamerID ";
		
	echo($sql);

	$result=mysqli_query($conn,$sql);
	
	echo($result);
	
if($result){?>
	<script>
     alert("Edited Successfully")
     
		window.location="users.php"

</script>
	
	
	
	<?php
}

else{?>
	
<script>
     alert("Not Successfull")
    
		//window.location="users.php"

</script>	
	

<?php	
}









?>
