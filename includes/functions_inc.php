<?php
/**
 * gmaaa_inc.php is the main include file for the new GMAA app
 * 
 * This file based on application_inc.php, for the INTL application online app
 *
 *
 * @package School-Inter-DB
 * @author Joe McLaughlin
 * @version 1.00 2016 - March 10th
 * @link http://www.joesarchive.com/testdb.php
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see functions_inc.php
 * @todo evolve...
 */

/**
 * Used to create a single row for given user.
 * Good to use with a while loop if you want to populate a
 * 	list that uses all data from given DB.
 * <code>
 * 
 * </code>
 *
 * @para	MySQL-Row	$row
 * @param	String		$full_name
 * @param	String		$contact_info
 * @param	String		$user_type
 */
function createUserRowList($row){
	echo 
		"firstName: " .$row["FirstName"].
		"<br>". " - Last: " . $row["LastName"].
		"<br>". " ContactInfo: " . $row["ContactInfo"] .
		"<br>". "<a href=" . 'testview.php?id=' . $row['UserId']. '> Details:</a>'



		."<br>". "<br>";
		
	//each row contains 
}






?>
