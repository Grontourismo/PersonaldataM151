<?php
$html_Out = "";
$id = $_GET["id"];

//get Persondata from view by id

$lastname;
$firstname;
$dateOfBirth;
$email;
$ahv;
$personalNr;
$telefonenr;
$companyName;
$department;
$jobTitle;
$description;

$html_Out = "
<div>
    <form method=\"post\" action=\"../backend/insertNew.php\">
        <label>
            Personaldata
            <br>
            <input required placeholder=\"Enter Lastname\" name=\"lastname\" type=\"text\">
            <br>
            <input required placeholder=\"Enter Firstname\" name=\"firstname\" type=\"text\">
            <br>
            <input required placeholder=\"Enter Date of Birth\" name=\"dateOfBirth\" type=\"text\">
            <br>
            <input placeholder=\"Enter Email\" name=\"email\" type=\"email\">
            <br>
            <input required placeholder=\"Enter AHV\" name=\"ahv\" type=\"text\">
            <br>
            <input required placeholder=\"Enter Personal Number\" name=\"personalNr\" type=\"text\">
            <br>
            <input placeholder=\"Enter Telefonnumber\" name=\"telefonenr\" type=\"tel\">
            <br>
        </label>
        <br>
        <label>
            Companydata
            <br>
            <input placeholder=\"Enter Companyname\" name=\"companyName\" type=\"text\">
            <br>
            Department
            <br>
            <select required name=\"department\">
                <option value=\"HR\">HR</option>
                <option value=\"IT\">IT</option>
                <option value=\"Marketing\">Marketing</option>
                <option value=\"Ressorce Managment\">Ressorce Managment</option>
            </select>
            <br>
            Job title
            <br>
            <select required name=\"jobTitle\">
                <option value=\"Computer Scientist\">Computer Scientist</option>
                <option value=\"Clerk\">Clerk</option>
                <option value=\"Mediamatist\">Mediamatist</option>
                <option value=\"Administration\">Administration</option>
            </select>
            <br>
            <textarea placeholder=\"Enter Describtion\" name=\"description\"></textarea>
        </label>
        <br>
        <button type=\"submit\">Send</button>
    </form>
    <br>
    <a href=\"../backend/show.php\"><button>Show Personal Data</button></a>
</div>
";

