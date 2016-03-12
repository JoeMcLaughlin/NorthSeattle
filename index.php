<html>
<head>
<?php 
//include credential file for database access.
require 'includes/creds.php';

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//grab data to be displayed on this page
$sql = "SELECT CONCAT_WS(" ", FirstName, MiddleName, LastName) AS FullName, ContactInfo FROM users";

// set data to result.
$result = mysqli_query($conn, $sql);
dump($sql);
die();
?>


<!--  -->


<title>
</title>
</head>
<body>
<div id="full name">

</div><!-- end of full name div -->




</body>





</html>
