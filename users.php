<?php 	
    $pagetitle="Users";
	include_once("Include/head.php");		

	?>

<?php
  
 if (! isset($_SESSION["gamerrole"])){
	 ?>
	 <script>

    alert("login 1St!");
	window.location="index.php";	 
     

</script>
	 
<?php	 
	 
 }else if($_SESSION["gamerrole"]==1){?>
	 
	 
	<script>

    alert("Only admin can access!");
	window.location="index.php";	 
     

</script> 
	 
	 
<?php	 
 } 



?>



<?php 

    $e="<li class='active'>";
    $b=$c=$d=$a="<li>";

	include_once("Include/navbar.php");		

	?>



<?php /*?>body<?php */?>
<div class="col-md-4">
<form action="users.php" method="get">

<input type="search" placeholder="Search" name="sk" class="form-control rounded" /><button type="submit">Search</button>
<button style="text-align: center;width: 50px;"><a href="users.php">All</a></button>

</form>
</div>
	<?php
	include_once('Include/dbConn.php');
	$sql="SELECT * FROM gamer ";

if(isset($_GET['sk'])){
	
	$sk=$_GET['sk'];
	$sql="SELECT * FROM gamer WHERE gamerName LIKE '%$sk%' ";
}



$result=mysqli_query($conn,$sql);
//echo $result;
//var_dump($result);
$no=mysqli_num_rows($result);

//echo $no;

if($no>0){
	?>
<div class="row">
<div style="padding-top: 25px;" class="col-md-12">
<table  class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">GamerID</th>
      <th scope="col">GamerName</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
	  <th scope="col">Status</th>
		<th scope="col">Edit</th>
		<th scope="col">Remove User</th>
    </tr>
  </thead>
  <tbody>
	  <?php
	while($row=mysqli_fetch_assoc($result)){?>
   
	  <tr>
      <th scope="row"><?php echo($row['gamerID']); ?></th>
      <td><?php echo($row['gamerName']); ?></td>
      <td><?php echo($row['eMail']); ?></td>
      <td><?php    if($row['role']==1 || $row['role']==3){
		if($row['role']==3)	{
					echo("Super Admin");
					
				}	else{
				echo("Root");
		}
		} 
									
		  else{echo("Admin");}
		  ?>
		  </td>
	  <td><?php echo($row['status']); ?></td>
		  <?php
			if($row['role']==2 || $row['role']==3){
				
				if($_SESSION['gamerrole']==3){
		  if(! ($row['role']==3 && $_SESSION['gamerrole']==3)){
			  
		  ?>
					
					<td><form action="edit.php" method="post">
			  
			  <button class="btn btn-btn" data-toggle="collapse" data-target="#edit"  name="Button" value="<?php echo($row['gamerID']) ;
						?>">Edit</button>
				  
				  </form>
		  </td>
		       
                    <td><form action="delete.php" method="post">
						<button name="Button" value="<?php echo($row['gamerID']);
						?>">Delete</button>
							
							</form>
		  </td>
				<?php
		  }else{
			  ?>
			  <td>No Access</td>
		            <td>No Access</td>
			  
			<?php  
		  }					}
				else{?>
					<td>No Access</td>
		            <td>No Access</td>
		  <?php
				}
				
			}
											else{
												?>
		  
		  <td>
			  <form action="edit.php" method="post">
			  
			  <button class="btn btn-btn" data-toggle="collapse" data-target="#edit"  name="Button" value="<?php echo($row['gamerID']) ;
						?>">Edit</button>
				  
				  </form>
				  </td>
                    <td>
						<form action="delete.php" method="post">
						<button name="Button" value="<?php echo($row['gamerID']);
						?>">Delete</button>
							
							</form>
							
							</td>
		  <?php
											}
      ?>
    </tr>
      <?php
	}
	
}
	?>
  </tbody>
</table>
</div>
</div>
<?php 	


	include_once("Include/footer.php");		

	?>




