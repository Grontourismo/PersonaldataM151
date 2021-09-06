<?php
$html_out = "";
//get persons from DB
$data = [];

//write Persons in Table
$html_out = "
<table>
    <thead>
        <tr>
          <th>ID</th>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Date Of Birth</th>
          <th>Email</th>
          <th>AHV</th>
          <th>Personal Number</th>
          <th>Telefone Number</th>
          <th>Company</th>
          <th>Job Title</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
";

foreach ($data as $person) {
    $id = $person["id"];
    $lastname = $person["Lastname"];
    $firstname = $person["Firstname"];
    $dateOfBirth = $person["Birth_Date"];
    $email = $person["EMail"];
    $ahv = $person["AHV_Number"];
    $personalNr = $person["Personal_Number"];
    $telefonenr = $person["Tel"];
    $company = $person["Company"];
    $jobTitle = $person["Job_Title"];

    $html_out = $html_out."
        <tr>
            <td>$id</td>
            <td>$lastname</td>
            <td>$firstname</td>
            <td>$dateOfBirth</td>
            <td>$email</td>
            <td>$ahv</td>
            <td>$personalNr</td>
            <td>$telefonenr</td>
            <td>$company</td>
            <td>$jobTitle</td>
            <td><a href='delete.php?id=$id'>🗑</a><a href='edit.php?id=$id'>👁</a></td>
        </tr>
    ";
}

$html_out = $html_out."
        </tbody>
        </table>
    ";

echo $html_out;