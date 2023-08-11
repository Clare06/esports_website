<?php 	
    $pagetitle="Register";
    $page="index.php";
	include_once("Include/head.php");		

	?>


<div class="row" id="register" style="min-height: 700px;" >
	<div class="col-md12" align="left" >
	
	<p style="padding-left: 50px;">
	<button  class="btn btn-btn"><a href="tournaments.php">Back</a></button>
	</p>
	</div>
      
      <div class="center-row" style="padding-top: 80px;" >
		  
         <div class="col-md-12 mx-auto">
            <div class="myform form ">
               <form action="register.php" method="post" name="register" >
                  <div class="form-group">
                     <input type="number" name="teamLeaderusrID"  class="form-control my-input" placeholder="YourUserId" style="text-align: center;" >
                  </div>
                  <div class="form-group">
                     <input type="email" name="eMail"  class="form-control my-input" id="eMail" placeholder="Email" style="text-align: center;">
                  </div>
                  <div class="form-group">
                     <input type="number" min="0" name="teamate1usrID"   class="form-control my-input" placeholder="Teamate1UserID"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <input type="number" min="0" name="teamate2usrID"  class="form-control my-input" placeholder="Teamate2UserID"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <input type="number" min="0" name="teamate3usrID"  class="form-control my-input" placeholder="Teamate3UserID"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <input type="number" min="0" name="teamate4usrID"   class="form-control my-input" placeholder="Teamate4UserID"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <input type="text" min="0" name="TeamName"   class="form-control my-input" placeholder="TeamName"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <input type="number" min="0" name="whatsappno"  class="form-control my-input" placeholder="WhatsappNo."style="text-align: center;">
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">REGISTER</button>
                  </div>
                  
                  
               </form>
            </div>
         </div>
      </div>
	
	
	
	
	
   </div>










<?php 	

	include_once("Include/footer.php");		

	?>