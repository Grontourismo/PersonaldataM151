<?php

$html_Out = "";
$id = $_GET["Id"];

//get Persondata from view by id
$data = [];

$id = $data["Id"];
$lastname = $data["Lastname"];
$firstname = $data["Firstname"];
$dateOfBirth = $data["Birth_Date"];
$email = $data["EMail"];
$ahv = $data["AHV_Number"];
$personalNr = $data["Personal_Number"];
$telefonenr = $data["Tel"];
$companyName = $data["Company_Name"];
$department = $data["Department"];
$jobTitle = $data["Job_Title"];
$description = $data["Description"];

$html_Out = "
<div>
    <form method=\"post\" action=\"./updatePerson.php\">
        <label>
            Personaldata
            <br>
            <p>ID: $id</p>
            <br>
            <input required value='$lastname' placeholder=\"Enter Lastname\" name=\"lastname\" type=\"text\">
            <br>
            <input required value='$firstname' placeholder=\"Enter Firstname\" name=\"firstname\" type=\"text\">
            <br>
            <input required value='$dateOfBirth' placeholder=\"Enter Date of Birth\" name=\"dateOfBirth\" type=\"text\">
            <br>
            <input value='$email' placeholder=\"Enter Email\" name=\"email\" type=\"email\">
            <br>
            <input value='$ahv' required placeholder=\"Enter AHV\" name=\"ahv\" type=\"text\">
            <br>
            <input value='$personalNr' required placeholder=\"Enter Personal Number\" name=\"personalNr\" type=\"text\">
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
            <textarea placeholder=\"Enter Describtion\" name=\"description\"></textarea>
        </label>
        <br>
        <button type=\"submit\">Send</button>
        <br>
        <a href=\"./delete.php?id=$id\"><button>Delete Person</button></a>
        <a href=\"./show.php\"><button>Cancel</button></a>
    </form>
</div>
";

echo $html_Out;

