<?php

if(isset($_POST['Button']) ){
	
$gamerID=$_POST['Button'];	
	
}
include_once('Include/dbConn.php');

$sql="delete FROM gamer WHERE gamerID='$gamerID' ";


$result=mysqli_query($conn,$sql);

if($result){
	
	?>
		
	<script>
alert("Deleted Successfully");
  
window.location="users.php";

</script>	
		
	
	
	
	<?php
}else{?>
	
	<script>
alert("User Not Deleted ");
  
window.location="users.php";

</script>
	
<?php	
}

?>