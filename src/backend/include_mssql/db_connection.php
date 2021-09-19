<?php

$user = "root";
$pw = "";
$server = "DESKTOP-LEF4URT\SQLEXPRESS01";
$database = "PersonalDataM151";
$driver = "Driver={SQL Server Native Client 10.0}";

$connection = "$driver; SERVER=$server; DATABASE=$database";

//connect to database
$dsn ="DESKTOP-LEF4URT\SQLEXPRESS01";

$con = odbc_connect($connection, $user, $pw);

if ($con){
    echo "Connection Successful";
}
else {
    die("Connection ERROR");
}

$dbconn= new PDO($dsn,$user,$pw);