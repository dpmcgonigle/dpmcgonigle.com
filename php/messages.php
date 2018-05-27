<?php

/*
*
*		messages.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php include file is for administrator use to see the contact information and message passed along in the contact form
*
*/

//Create the SQL query text as a string variable and then pass it into the OOP-style query (query the established connection with $sql string)
$sql = "SELECT id, name, email, message FROM contact_information";
$result = $conn->query($sql);

//if there are results, enter a loop that cycles through all of the results.  Since there is no qualifying criteria in the query, all rows will be returned
if ($result->num_rows > 0) {

	while($row = $result->fetch_assoc()) {
		
	$id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];
    $message = $row["message"];

    echo "Message Number: " . $id . "<br/>";
    echo "Name: " . $name . "<br/>";
    echo "Email Address: " . $email . "<br/>";
    echo "Message: " . $message . "<br/><br/><br/>";
 }

} else {

	echo "You have no messages.";
}

?>