<?php include '../includes/header.php'; ?>
<?php


if(isset($_GET['id']) && (int)$_GET['id'] > 0){#proper data must be on querystring
	 $myID = (int)$_GET['id']; #Convert to integer, will equate to zero if fails
}else{#send the user to a safe location!
/*************************************************************************  vv  *************************************************************************/
	header("Location:testdb2.php");
/*************************************************************************  ^^  *************************************************************************/
}

$sql = "SELECT * FROM users where UserId=".$myID;

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);
/*

 while($row = mysqli_fetch_assoc($result)) {
       var_dump($row);
    }
*/

echo $row[FirstName];
} else {
    echo "0 results";
}
?>


<!--  -->




</html>
