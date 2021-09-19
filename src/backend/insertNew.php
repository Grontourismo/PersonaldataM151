<?php
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

//save Data in DB

header('Location: show.php');