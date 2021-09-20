<?php
require_once("./include/db_connection.php");

$html_Out = "";
$id = $_GET["id"];

//get Persondata from view by Id
$data = $dbconn->query("EXEC SelectSinglePerson @Id=" . $id);

foreach ($data as $person) {
    $id = $person["Id"];
    $lastname = $person["Lastname"];
    $firstname = $person["Firstname"];
    $dateOfBirth = $person["Birth_Date"];
    $email = $person["EMail"];
    $ahv = $person["AHV_Number"];
    $personalNr = $person["Personal_Number"];
    $telefonenr = $person["Tel"];
    $companyName = $person["Company_Name"];
    $department = $person["Department_Name"];
    $jobTitle = $person["Job_Title"];
    $description = $person["Job_Description"];
}

$html_Out = "
<div>
    <form method=\"post\" action=\"./updatePerson.php\">
        <label>
            Personaldata
            <p>ID: $id</p>
            <input required value='$lastname' placeholder=\"Enter Lastname\" name=\"lastname\" type=\"text\">
            <br>
            <input required value='$firstname' placeholder=\"Enter Firstname\" name=\"firstname\" type=\"text\">
            <br>
            <input required value='$dateOfBirth' placeholder=\"Enter Date of Birth\" name=\"dateOfBirth\" type=\"date\">
            <br>
            <input value='$email' placeholder=\"Enter Email\" name=\"email\" type=\"email\">
            <br>
            <input value='$ahv' required placeholder=\"Enter AHV\" name=\"ahv\" type=\"text\">
            <br>
            <input value='$personalNr' readonly required placeholder=\"Enter Personal Number\" name=\"personalNr\" type=\"text\">
            <br>
            <input value='$telefonenr' placeholder=\"Enter Telefonnumber\" name=\"telefonenr\" type=\"tel\">
            <br>
        </label>
        <br>
        <label>
            Companydata
            <br>
            <input value='$companyName' placeholder=\"Enter Companyname\" name=\"companyName\" type=\"text\">
            <br>
            Department
            <br>
            <select required name=\"department\">
            ";

switch ($department) {
    case "HR":
        $html_Out = $html_Out . "<option selected value=\"HR\">HR</option>";
        $html_Out = $html_Out . "<option value=\"IT\">IT</option>";
        $html_Out = $html_Out . "<option value=\"Marketing\">Marketing</option>";
        $html_Out = $html_Out . "<option value=\"Ressorce Managment\">Ressorce Managment</option>";
        break;
    case "IT":
        $html_Out = $html_Out . "<option selected value=\"IT\">IT</option>";
        $html_Out = $html_Out . "<option value=\"Marketing\">Marketing</option>";
        $html_Out = $html_Out . "<option value=\"Ressorce Managment\">Ressorce Managment</option>";
        $html_Out = $html_Out . "<option value=\"HR\">HR</option>";
        break;
    case "Marketing":
        $html_Out = $html_Out . "<option selected value=\"Marketing\">Marketing</option>";
        $html_Out = $html_Out . "<option value=\"Ressorce Managment\">Ressorce Managment</option>";
        $html_Out = $html_Out . "<option value=\"HR\">HR</option>";
        $html_Out = $html_Out . "<option value=\"IT\">IT</option>";
        break;
    case "Ressorce Managment":
        $html_Out = $html_Out . "<option selected value=\"Ressorce Managment\">Ressorce Managment</option>";
        $html_Out = $html_Out . "<option value=\"HR\">HR</option>";
        $html_Out = $html_Out . "<option value=\"IT\">IT</option>";
        $html_Out = $html_Out . "<option value=\"Marketing\">Marketing</option>";
        break;
}

$html_Out = $html_Out . "
            </select>
            <br>
            Job title
            <br>
            <select required name=\"jobTitle\">
            ";

switch ($jobTitle) {
    case "Computer Scientist":
        $html_Out = $html_Out . "<option selected value=\"Computer Scientist\">Computer Scientist</option>";
        $html_Out = $html_Out . "<option value=\"Clerk\">Clerk</option>";
        $html_Out = $html_Out . "<option value=\"Mediamatist\">Mediamatist</option>";
        $html_Out = $html_Out . "<option value=\"Administration\">Administration</option>";
        break;
    case "Clerk":
        $html_Out = $html_Out . "<option selected value=\"Clerk\">Clerk</option>";
        $html_Out = $html_Out . "<option value=\"Mediamatist\">Mediamatist</option>";
        $html_Out = $html_Out . "<option value=\"Administration\">Administration</option>";
        $html_Out = $html_Out . "<option value=\"Computer Scientist\">Computer Scientist</option>";
        break;
    case "Mediamatist":
        $html_Out = $html_Out . "<option selected value=\"Mediamatist\">Mediamatist</option>";
        $html_Out = $html_Out . "<option value=\"Administration\">Administration</option>";
        $html_Out = $html_Out . "<option value=\"Computer Scientist\">Computer Scientist</option>";
        $html_Out = $html_Out . "<option value=\"Clerk\">Clerk</option>";
        break;
    case "Administration":
        $html_Out = $html_Out . "<option selected value=\"Administration\">Administration</option>";
        $html_Out = $html_Out . "<option value=\"Computer Scientist\">Computer Scientist</option>";
        $html_Out = $html_Out . "<option value=\"Clerk\">Clerk</option>";
        $html_Out = $html_Out . "<option value=\"Mediamatist\">Mediamatist</option>";
        break;
}

$html_Out = $html_Out . "
            </select>
            <br>
            <textarea placeholder=\"Enter Describtion\" name=\"description\">$description</textarea>
        </label>
        <br>
        <button type=\"submit\">Send</button>
        <br>
        <a href=\"./show.php\"><button>Cancel</button></a>
    </form>
</div>
";

echo $html_Out;

