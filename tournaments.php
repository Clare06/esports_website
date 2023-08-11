

<?php 
    
    $pagetitle="Tournaments";
	include_once("Include/head.php");		

	?>

<?php 	

    $c="<li class='active'>";
    $b=$a=$d=$e="<li>";

	include_once("Include/navbar.php");		

	?>


<table  height="800px" width="100%" align="center" cellpadding="0" cellspacing="0" border="0">

            
<tr height="25%">
	
	<td rowspan="2" align="center" width="50%" style="background-color: #ACFDF0;" id="cod">
	<div class="row" >
		<div class="col-md-6" style="height: 50%">
		<!-- carousel --> 
	  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->	
			
		<div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="Img/Callofduty/SnD.jpeg" alt="Search and Destroy" height="100%" width="100%">
      <div class="carousel-caption">
        <h5>Search and Destroy</h5>
      </div>
    </div>
    <div class="item">
      <img src="Img/Callofduty/hardpoint.jpeg" alt="Hardpoint">
      <div class="carousel-caption">
        <h5>Hardpoint</h5>
      </div>
    </div>
	  
	 <div class="item">
      <img src="Img/Callofduty/domination.jpeg" alt="Domination">
      <div class="carousel-caption">
        <h5>Domination</h5>
      </div>
    </div> 
		</div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		
		
		</div>
			
			<div class="col-md-6" style="height: 50%">
			
			
			<h1><font color="BLACK" face="Impact MT">CALL<font size="-1">OF</font>DUTY</font></h1>
			
			  <ol type="1" style="text-align: left;padding-left: 90px;">
				
			<font color="#C70039" face="copperplate" size="+1">	<li >Available Game Mods
				   <ul type="disc" style="text-align: left">
					   <li>Hardpoint</li>
					   <li><abbr title="Search and Destroy">SnD</abbr></li>
					   <li>Domination</li>
					
					
					</ul>
				   
				   
				   
				   
				   </li>
				
				<li>Available Platforms
				
				    <ul type="circle" style="text-align: left">
					
					<li>PS5/PS4</li>
						<li>PC</li>
					
					</ul>
				
				
				</li>
				
				</font>
				
				
				</ol>			
			
	
			
			
			</div>
		
		<div class="col-md-12" style="height: 50%;padding-bottom: 10px;" id="refresh" >
			<?php
			 $Session=session();
			if($Session==1){?>
			<font color="#C70039" face="copperplate" size="+1">5V5 Matches You should register your rest of your teamates game User ID!<br>
			We will contact you through your Email.
			   <br>
			   
			 <font color="BLACK" > Time Left:
			
			<?php	
				
				timeleft('2021-07-16 12:00:00');
				
				if($sessionR!=1){
				
				 ?></font>
				<br>
				
				<font face="verdana" color="white"><a href="registerform.php">
			    <button style="background-color: #515050;"  class="btn btn-btn"><font color="white">Register Now</font></button></a>
			    </font>
			</font>
			
				<?php } else{?>
					
					</font>
					<br>
		           <p>Registered</p>
					</font>
				<?php	
				}
			} else{?>
			<font color="#C70039" face="copperplate" size="+1">5V5 Matches You should register your rest of your teamates game User ID!<br>
			We will contact you through your Email.
			<br>
			<br>
			<font color="BLACK" > Time Left:
			
			<?php	
				timeleft('2021-07-16 12:00:00');
				
				  ?> </font>
			<br><p class="animate__animated animate__heartBeat animate__slower	3s animate__infinite	infinite">
				Please Login to Register !</p>	</font>
			
			
			<?php
			}
			
			
			
			
			?>
			
			</div>
		
		
		
		
		</div>
		
	</td>
	
	<td align="center" width="50%" style="background-color: #322B49;" id="fortnite">
	<div class="col-md-12" >
		
		<h1 class="a"><font color="white" >FORTNITE</font></h1>
		
		<p class="a"><font color= #97939A>
		No events available for fortnite currently
		 
						   </font>
		</p>
		 </div>
	</td>
	
	
	
	
	</tr>

	<tr height="25%">
	
	<td align="center" width="50%" style="background-color: #F4D700;" id="cyberpunk"> 
		
		
		<div class="col-md-12" >
		
		<h1 class="b"><font color="#1B1C12" >CyberPunk2077</font></h1>
		
		<p class="a"><font color= #58B5CE>
		No events available for CyberPunk2077 currently
		 
						   </font>
		</p>
		 </div>
		
		
		
		</td>
	  
	
	
	
	</tr>

    <tr>
	<td colspan="2" align="center" height="50%">
		
		
		<table height="100%" width="100%" align="center" cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td width="25%" align="center" style="background-color: #FB576E;" id="apex">
			
			<h1 align="center" class="c"><font color="white">APEX</font></h1>
			<h2 align="center" class="a"><font color="white">-LEGENDS-</font></h2>
				
				<h3 class="animate__animated animate__flash animate__slower	3s animate__infinite	infinite a" align="left"><b>On Going Event...</b></h3>
				<br>
				<p align="center" class="c">
				5V5 Arena Semi Finals Will Be Live Tomorrow!
				  <ul type="circle" style="text-align: left;" class="c">
				
				<li>Match No.1 Trio Kings VS Survivors<br> at <b>8:00PM</b></li>
				
				<li>Match No.2 Dragon Warriors VS HeadKnockers<br> at <b>9:00PM</b></li>
				
				
				</ul>
				
				
				
				
				
				</p>
			</td>
		<td width="25%" align="center" style="background-color: #09F4FC;" id="valorant">
			<h1 align="center" class="k">Valorant</h1>
			
			<br>
			
			<h3 align="center"><font >Recently Finished Event..</font></h3>
			<br>
		<p class="e">	5V5 SPIKE RUSH <br>
			
			<i class="fa fa-trophy animate__animated animate__bounce animate__slow	2s animate__infinite	infinite" style="font-size:45px"></i> 
	
			<br>
			WINNERS!
			<br>
			BLIND ASSASSINS
			</p>
			</td>
		<td width="50%" align="center" style="background-color: #000000;" id="pubg">
			
			<h1 class="r"><font color="white">PUBG</font></h1>
			
			
			<h3 class="animate__animated animate__flash  animate__infinite	infinite a" style="padding-left: 60px;" align="left"><font color="white"><b>Live...</b></font></h3>
			<br>
			<iframe width="620" height="345" src="https://www.youtube.com/embed/EoQjiNm7oCw?autoplay=0&mute=1">
				
            </iframe>
			
			
			</td>
		</tr>
		
		</table>
		
		
		
		
		
		
		</td>
	
	
	
	
	
	</tr>






</table>




<?php 	

	include_once("Include/footer.php");		

	?>
