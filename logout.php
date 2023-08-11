<?php

 session_start();


 
unset($_SESSION['gamerName']);

unset($_SESSION['gamerrole']);

unset($_SESSION['eMail']);

unset($_SESSION['status']);

unset($_SESSION['gamerID']);

unset($_SESSION['password']);

if(isset($_SESSION['leaderID'])){
	
	
	unset($_SESSION['leaderID']);
	
	
}


session_destroy();




 header("location:index.php");





?>