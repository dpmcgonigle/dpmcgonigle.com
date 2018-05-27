<?php 

/*
*
*		processForm.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php include file is included when the contact form submit button is pressed, passing along contact information to the database
*		The variables used in the SQL query are generated in processWebform.php
*
*/

$sql = "INSERT INTO `contact_information` (`name`, `email`, `message`, `site_ID`) VALUES ('$name', '$email', '$message', '1')";

/* This is just another way to check connection-I've tried this enough to know it is working
if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $conn->connect_error);
    exit();
}
else {
echo '<script type="text/javascript">alert("Good Connection!")</script>';
} */

if (!$conn->query($sql)) { die('Error: ' . $conn->error); }
else { echo '<script type="text/javascript">alert("Record Added!")</script>'; }

?>