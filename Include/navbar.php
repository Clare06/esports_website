<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">GameON</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav ">
            <?php echo $a;?><a href="index.php"><font color="#FF3A4B" size="+1">Home</font></a></li>
           <?php echo $b;?> <a href="games.php"><font color="#FF3A4B " size="+1">Games</font></a></li>
			  <?php echo $c;?><a href="tournaments.php"><font color="#FF3A4B"size="+1">Tournaments</font></a></li>
            <?php echo $d;?><a href="contact.php"><font color="#FF3A4B"size="+1">Contact</font></a></li>
            <?php echo $e;?><a href="users.php"><font color="#FF3A4B" size="+1">Users</font></a></li>
</ul>
<ul class="nav navbar-nav navbar-right" >
			  <?php 
			  if (! isset($_SESSION['gamerName'])){?>
				  
				 <li><button type="button" class="btn btn-btn" data-toggle="collapse" data-target="#navbar1" style="background-color: #345995; margin-top: 10px;"><font color="white">Login</font></button></li> 
				  
				 <li><button type="button" class="btn btn-btn" data-toggle="collapse" data-target="#signup" style="background-color: #CA1551;margin-top: 10px;margin-left: 20px;"><font color="white">Sign Up</font></button></li>  
				  
				  
				<?php  
			  } else {?>
			  
               <li class="dropdown">
     
				   <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['gamerName']; ?> <span class="caret"></span></a>

                  <ul class="dropdown-menu">
            <li><button type="button" class="btn btn-btn" data-toggle="collapse" data-target="#profile" style="margin-top: 10px;text-align: center;width: 100%;height: 100%;">
				My Profile
				</button>
			  </li>
            <li ><button  type="button" class="btn btn-btn" data-toggle="collapse" data-target="#update" style="margin-top: 10px;text-align: center;width: 100%;height: 100%;">Settings</button>
			  
			  </li>
			  
				  </ul>


               </li>
			  

			  <li ><button type="button" class="btn btn-btn" style="background-color: #345995;margin-top: 10px;"><a href="logout.php" style="color: #000000;"><font color="white" >Logout</font> &nbsp;
				 
				  <span class="glyphicon glyphicon-share"></span></a>
				  
				  </button>
			  </li>
			  
			  
			  
			  
			  
			  
			  <?php
			  }
			  
			  
			  
			  ?>
			</ul>
        </div>
		  
		  <div id="navbar1" class="collapse">
          <form class="navbar-form navbar-right" action="login.php" method="post">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control" name="UN"/>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="PW"/>
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.nav-collapse -->
		  
		  
		  
		  
		  
      </div>

<div class="collapse" id="signup" >
      
      <div class="center-row" >
		  <div class="col-md-4">
		  
		  </div>
         <div class="col-md-8 mx-auto">
            <div class="myform form ">
               <form action="saveUser.php" method="post" name="signup" >
                  <div class="form-group">
                     <input type="text" name="gamerName"  class="form-control my-input" id="gamerName" placeholder="GamerName" style="text-align: center;" >
                  </div>
                  <div class="form-group">
                     <input type="email" name="eMail"  class="form-control my-input" id="eMail" placeholder="Email" style="text-align: center;">
                  </div>
                  <div class="form-group">
                     <input type="password" min="0" name="password" id="password"  class="form-control my-input" placeholder="Password"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <select type="submit" min="0" name="status" id="status"  class="form-control my-input" placeholder="status" style="text-align: center;">
						 <option  value="active">
						 
						   <h3 align="center"> Active</h3>
						 
						 </option>
						 <option  value="innactive">
						 <h3 align="center"> Innactive</h3>
						 
						 </option>
						 
					   </select>
                  </div>
				   <div class="form-group">
                     <select type="submit" min="0" name="rolename" id="rolename"  class="form-control my-input" placeholder="Rolename"style="text-align: center;">
						 <option  value="1">
						 
						   <h3 align="center"> Root</h3>
						 
						 </option>
						
						 
					   </select>
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Create Your Account</button>
                  </div>
                  
                  
               </form>
            </div>
         </div>
      </div>
   </div>


<!--update
-->

<div class="collapse" id="update" >
      
      <div class="center-row" >
		  <div class="col-md-4">
		  
		  </div>
         <div class="col-md-8 mx-auto">
            <div class="myform form ">
               <form action="update.php" method="post" name="signup" >
                  <div class="form-group">
                     <input type="text" name="gamerName1"  class="form-control my-input" id="gamerName1" placeholder="<?php echo($_SESSION['gamerName']);?>" style="text-align: center;" >
                  </div>
                  <div class="form-group">
                     <input type="email" name="eMail1"  class="form-control my-input" id="eMail1" placeholder="<?php echo($_SESSION['eMail']);?>" style="text-align: center;">
                  </div>
                  <div class="form-group">
                     <input type="password" min="0" name="password1" id="password1"  class="form-control my-input" placeholder="New Password/Current Password"style="text-align: center;">
                  </div>
				   <div class="form-group">
                     <select type="submit" min="0" name="status1" id="status1"  class="form-control my-input"  style="text-align: center;">
						<?php
						 
						 if($_SESSION['status']=="active"){?>
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
					   <?php
					   if($_SESSION['gamerrole']!=3){?>
                  </div>
				   <div class="form-group">
                     <select type="submit" min="0" name="rolename1" id="rolename1"  class="form-control my-input" style="text-align: center;">
						 <?php
						 if($_SESSION['gamerrole']==2){?>
						 
						 <option  value="2">
						 
						   <h3 align="center">Admin</h3>
						 
						 </option>
						<?php
						 }
						 ?>
						  <option  value="1">
						 
						   <h3 align="center">Root</h3>
						 
						 </option>
					   </select>
                  </div>
				  <?php
					   }
					   ?>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Update</button>
                  </div>
                  
                  
               </form>
            </div>
         </div>
      </div>
   </div>
    
</nav>









<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php// echo $_SESSION['gamerName']; ?> <span class="caret"></span></a>-->


<!--<li class="dropdown">
          
          <ul class="dropdown-menu">
            <li><button type="button" class="btn btn-btn" data-toggle="collapse" data-target="#profile" style="margin-top: 10px;text-align: center;width: 100%;height: 100%;">
				My Profile
				</button>
			  </li>
            <li ><button  type="button" class="btn btn-btn" data-toggle="collapse" data-target="#update" style="margin-top: 10px;text-align: center;width: 100%;height: 100%;">Settings</button>
			  
			  </li>
			  
				  </ul>
               </li>
-->
