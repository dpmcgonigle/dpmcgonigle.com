<?php

/*
*
*		counter.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php include file is to update the hit counter on each webpage.  It is currently counting twice and counting twice each time you visit another section
*		of the web page.  I hope to fix the double-tap and then only produce one hit no matter how many sub-pages are utilized via cookies.
*
*/

$id=1;
	
$sql = "SELECT `hits` FROM `hit_counter` WHERE `id`=$id";
	
/*		The following is a single line of code that does the same work as the if statement below it; I just wanted to test a couple different methods
$count = $conn->query($sql)->fetch_object()->hits;
*/

if ($result = $conn->query($sql)) {

	// Get field information for hits 
	$row = $result->fetch_assoc();
	$count = $row['hits'];
	
} else {
	echo '<script type="text/javascript">alert("Select query error")</script>';
}

//Increment the hit counter and then echo it as a string into the webpage footer text
$count++;
echo $count;

$sql = "UPDATE `hit_counter` SET `hits`=$count WHERE `id`=$id";
if ($result = $conn->query($sql)) {
	//echo '<script type="text/javascript">alert("Update query success")</script>';

	/* This was to test variable use in strings while verifying the update
	echo '<script type="text/javascript">';
	echo "alert('Update query success: $count')";
	echo '</script>';*/
	
} else {
	echo '<script type="text/javascript">alert("Update query error")</script>';
}

?>