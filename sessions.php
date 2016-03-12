<?php 

session_start();

if(isset($SESSION["count"])){
	$_SESSION["count"] += 1;
	echo " You've visted here {$_SESSION['count']} times";
}
else{
	$_SESSION["count"] = 1;
	echo "You've visted once";
}
?>
