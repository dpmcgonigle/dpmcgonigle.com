<?php

/*
*
*		dbconnect.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php include file is to establish the connection to the database for each web page, since each page needs to access the contact_information and 
*		hit_counter tables
*
*/

//The variables to establish the connection to the bluehost MySQL database are stored in dbcredentials.php, which are included via the next line of text
include('dbcredentials.php');
 
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error){
	echo '<script language="javascript">';
	echo 'alert("DBCONNECT Connection failed: " . $conn->connect_error)';
	echo '</script>';
  die("Connection failed: " . $conn->connect_error);
} else {
	//Connection Success
}

/*		THE FOLLOWING WERE USED TO CREATE THE TABLES FOR SITE_ADMIN AND ARE SIMPLY BEING PRESERVED AS A REFERENCE

	$sql = "CREATE TABLE IF NOT EXISTS site (
		id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		name varchar(255) NOT NULL
	)";
	
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Successfully created site table")';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Error: " . $sql . "<br>" . $conn->error)';
		echo '</script>';
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS hit_counter (
		id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		hits int,
		site_ID int,
		FOREIGN KEY (site_ID) REFERENCES site(id)
	)";
	
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Successfully created hit_counter table")';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Error: " . $sql . "<br>" . $conn->error)';
		echo '</script>';
	}
	
	$sql = "CREATE TABLE IF NOT EXISTS contact_information (
		id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		name varchar(255) NOT NULL,
		email varchar(255),
		message varchar(255),
		site_ID int,
		FOREIGN KEY (site_ID) REFERENCES site(id)
	)";
	
	if ($conn->query($sql) === TRUE) {
		echo '<script language="javascript">';
		echo 'alert("Successfully created contact_information table")';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Error: " . $sql . "<br>" . $conn->error)';
		echo '</script>';
	}
*/

?>