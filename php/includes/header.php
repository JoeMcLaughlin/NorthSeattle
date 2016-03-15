<!doctype html>
<html>
<head>

<?php 
//include '../includes/header.php';
//phpinfo();
//echo "hi";
//include credential file for database access.
require '../includes/db/creds.php';
require '../includes/functions_inc.php';
define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); #Current page name, stripped of folder info
// Create connection

//echo "boo";
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


//echo "bleh";
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//grab data to be displayed on this page
$sql = "SELECT FirstName, MiddleName, LastName, ContactInfo,UserId FROM users";
//echo "here";
// set data to result.
$result = mysqli_query($conn, $sql);
//echo "past";
//var_dump($result);
//die();
//$row = mysqli_fetch_array($result);
//$first_name = $row['FirstName'];
//$last_name = $row['LastName'];


//$last_name = $row['LastName'];
if(THIS_PAGE == 'testview.php'){#proper data must be on querystring
	$row = mysqli_fetch_array($result);
	$myID = (int)$_GET['id'];


	//echo "bleh";
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT FirstName, MiddleName, LastName, ContactInfo,UserId FROM users WHERE UserID=".$myID;

// set data to result.
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	 $title  = $row['FirstName'] . " " . $row['LastName'];
	echo "<title> $title  </title>";
	
}else{#send the user to a safe location!
/*************************************************************************  vv  *************************************************************************/
	
	
/*************************************************************************  ^^  *************************************************************************/
}



?>


	

</head>
<body>
