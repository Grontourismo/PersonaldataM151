<?php
$id = $_GET["id"];

//Delete in DB
$data = $dbconn->query("EXEC DeletePerson @Id=" . $id);

header('Location: show.php');
