<?php include '../includes/header.php'; ?>
<?php

if (mysqli_num_rows($result) > 0) {


    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       // echo "firstName: " . $row["FirstName"]. " - Last: " . $row["LastName"]. " ContactInfo: " . $row["ContactInfo"] . "<br>";
	createUserRowList($row);
    }
} else {
    echo "0 results";
}




 
mysqli_close($conn);
?>


<!--  -->




</html>
