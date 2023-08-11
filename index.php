


<?php 	
    $pagetitle="Home";
    $page="index.php";
	include_once("Include/head.php");		

	?>

<?php 	
    $a="<li class='active'>";
    $b=$c=$d=$e="<li>";
	include_once("Include/navbar.php");		

	?>



<div class="row">

<div class="col-md-7 v"  style="height: 900px">
	<h1 style="padding-top: 15px;" class="g" align="center"><font color="black">Welcome You To Our Website</font></h1>

	<p align="center" class="x">
	
	Gaming has been an exciting and addictive way to relax and have fun since forever. It has been an essential part of every culture, and many countries have their national games as well. Gaming enhances not only our physical capabilities but also our mental capabilities since we have to use our imagination and brain to choose every next move. Games are a form of social bonding; our games have evolved with the rest of things as time has passed. The gaming world for humans started with "Knucklebones" and dice games, and now we have reached the era of video games with various types like action games, car games, arcade games, etc. You can get games from CDs, Apple App Stores, or GooglePlay, or you can download them from various websites. 
	<br>
		<br>
		Now we are taking this further entertaining and fun through our events. Also we are giving away prizes for the winners.
	
	</p>
	<br>
	<div align="center" id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width: 100%;" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->	
			
		<div class="carousel-inner" role="listbox" style="height: 450px;width: 100%">
    <div align="center" class="item active">
      <img src="Img/Gamers/gamer.jpeg" alt="GamerPic"  >
      
    </div>
    <div align="center" class="item">
      <img src="Img/Gamers/gamer1.jpeg" alt="Gamerspic" >
     
    </div>
	  
	 <div align="center" class="item">
      <img src="Img/Gamers/video-gamer.jpeg" alt="Gamer Pic" >
      
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
	</p>	
	
	
</div>


<div class="col-md-5 d" style="height: 900px;" font color="#FFFFFF">
    <h3 class="a animate__animated animate__flash  animate__infinite	infinite"><font color="white">HOT Upcoming Event...</font></h3>
	<h1 align="center"><font color="white" face="Impact MT">CALL<font size="-1">OF</font>DUTY</font></h1>
	
	<p align="center">
	
	
	  <img src="Img/Callofduty/hdcod.jpg" alt="COD BLACKOPS" width="300px" height="200px" />
	
	
	</p>
	
	<p align="center" class="e">
	
		<font color="#FFFFFF">
			
	 5V5 Clash <abbr title="Search And Destroy" style="text-decoration: none;">S&amp;D</abbr> , Domination , Hardpoint 
			<br>
			
	    Registrations Available!
	
	
	</font>
	
	</p>
	
	<div id="refresh" align="center">
		<p align="center" class="e">
		<font color="#FFFFFF">UNTill: 
<?php
	
	timeleft('2021-07-16 12:00:00');
	
	
	
	  ?>
	
	</font>
			
		</p>
</div>
	<p align="center" class="e">
	 <button class="btn btn-btn"><a href="tournaments.php#cod"><b>More Details</b></a></button>

	</p>
	
	 <h3 class="a animate__animated animate__headShake  animate__infinite	infinite"><font color="white">PUBG Live...</font></h3>
	<br>
	<p align="center">
	<iframe  width="450px" height="320px" src="https://www.youtube.com/embed/EoQjiNm7oCw?autoplay=0&mute=1">
				
            </iframe>
	
	</p>
	
</div>
	
</div>
<?php 	

	include_once("Include/footer.php");		

	?>

