<?php include '../includes/header.php'; ?>
<?php


if(isset($_GET['id']) && (int)$_GET['id'] > 0){#proper data must be on querystring
	 $myID = (int)$_GET['id']; #Convert to integer, will equate to zero if fails
}

$sql = "SELECT * FROM users where UserId=".$myID;

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
$row = mysqli_fetch_assoc($result);

/*
User Detail (Accessible by Admin)
	Displays a document view for a single user record
		Document Data:
			Full Name  (Editable by Admin)
				Displayed as header(i.e.<h1>) and page title in html header
			//Contact Info (Editable by Admin)
			//User Type (Editable by Admin)
			DOES NOT EXISTUser Notes (Editable by Admin)
		DONE Next/Previous navigation
			DONE Next/previous links to present the detail view of the next/prev record. 
		Done Link to return to list, rather than back button nav.
		Add new user note functionality
		<ADMIN> Edit user type
			Add/remove faculty
				Confirmation required
			Grant/revoke admin rights to faculty
				Confirmation required
*/

userDetails($row,$result);

} else {
	echo "0 results";
}
?>
<br>
<br>
<a href=testdb2.php> Back to list</a>

<!--  -->




</html>
