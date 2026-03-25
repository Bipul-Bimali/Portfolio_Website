<?php
$servername = "localhost";
$username   = "BipulB_readonly";
$password   = "./";
$dbname     = "BipulB_Message";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("There was a problem connecting to the database.");
}
?>