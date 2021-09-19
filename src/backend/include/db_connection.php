<?php

$user = "root";
$pw = "";
$server = "LAPTOP-9IMNPBH8\SQLEXPRESS";
$database = "MSSQLPersonalDataM151";
$driver = "MSSQL ODBC 8.0 ANSI Driver";

$connection = "DRIVER=$driver; SERVER=$server; DATABASE=$database";

//connect to database
//$dsn ="odbc:MSSQLPersonalDataM151";
$dbconn = odbc_connect($connection, $user, $pw);