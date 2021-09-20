<?php

$user = "root";
$pw = "";

//connect to database
$dsn ="odbc:MSSQLPersonalDataM151";
$dbconn= new PDO($dsn,$user,$pw);