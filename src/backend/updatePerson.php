<?php
require_once("./include/db_connection.php");
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$dateOfBirth = $_POST["dateOfBirth"];
$email = $_POST["email"];
$ahv = $_POST["ahv"];
$personalNr = $_POST["personalNr"];
$telefonenr = $_POST["telefonenr"];
$companyName = $_POST["companyName"];
$department = $_POST["department"];
$jobTitle = $_POST["jobTitle"];
$description = $_POST["description"];

//Update in DB
$query = "EXEC UpdatePerson '" . $lastname . "','" . $firstname . "','" . $dateOfBirth . "','" . $email . "','" . $ahv . "','" . $personalNr . "','" . $telefonenr . "','" . $companyName . "','" . $department . "','" . $jobTitle . "','" . $description . "'";

//get Persondata from view by id
$dbconn->query($query);


header('Location: show.php');