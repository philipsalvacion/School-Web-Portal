<?php
session_start();
$DB_servername = "localhost";
$DB_username = "root";
$DB_password = "";
$DB_name = "mizpah_web_portal";

$conn = new mysqli($DB_servername, $DB_username, $DB_password, $DB_name);
?>
