
<?php 	
    $pagetitle="Home";
	include_once("Include/head.php");		

	?>



<?php

if(isset($_POST['Button']) ){
	
$gamerID=$_POST['Button'];	
	
}
include_once('Include/dbConn.php');

$sql="SELECT * FROM gamer WHERE gamerID LIKE '%$gamerID%' ";


$result=mysqli_query($conn,$sql);

if($result){
	
	while($row=mysqli_fetch_assoc($result)){
		$role=$row['role'];
		$status=$row['status'];
		
		
		
	}
	
	
	
}

?>







<div class="col-md-8" id="edit" >
      
      <div class="center-row" >
		  <div class="col-md-4">
		  
		  </div>
         <div class="col-md-8 mx-auto">
            <div class="myform form ">
               <form action="edited.php" method="post" name="edit" >
                  <div class="form-group">
                     <input type="hidden" name="gamerID"  class="form-control my-input" id="gamerID" value="<?php echo($gamerID) ;
						?>" style="text-align: center;" >
                  </div>
				   <div class="form-group">
                     <select type="submit" min="0" name="rolename" id="rolename"  class="form-control my-input" placeholder="Rolename"style="text-align: center;">
						 <?php
						 if($role==1){
							 ?>
							 <option  value="1">
						 
						   <h3 align="center"> Root</h3>
						 
						 </option>
						
						  <option  value="2">
						 
						   <h3 align="center"> Admin</h3>
						 
						 </option>
							 
							 
						<?php	 
						 }else{
							 ?>
							 
						
						  <option  value="2">
						 
						   <h3 align="center"> Admin</h3>
						 
						 </option>
						
						 <option  value="1">
						 
						   <h3 align="center"> Root</h3>
						 
						 </option>
						 
							 <?php
						 }
						 
						 
						 
						 ?>
					   </select>
                  </div>
				   <div class="form-group">
                     <select type="submit" min="0" name="status" id="status"  class="form-control my-input" placeholder="status" style="text-align: center;">
						 <?php
						 
						 if($status=="active"){?>
							 
							 <option  value="active">
						 
						   <h3 align="center"> Active</h3>
						 
						 </option>
						 <option  value="innactive">
						 <h3 align="center"> Innactive</h3>
						 
						 </option>
							 
						<?php	 
						 }else{?>
							 
							 
						 <option  value="innactive">
						 <h3 align="center"> Innactive</h3>
						 
						 </option>
							 
							 <option  value="active">
						 
						   <h3 align="center"> Active</h3>
						 
						 </option>
							 
							<?php 
							 
						 }
						 
						 
						 
						 
						 
						 ?>
						 
					   </select>
                  </div>
				   
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Submit</button>
                  </div>
                  
                  
               </form>
            </div>
         </div>
      </div>
   </div>

<?php 	

	include_once("Include/footer.php");		

	?>


