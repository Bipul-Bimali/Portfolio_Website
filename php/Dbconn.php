<?php
$servername = "localhost";
$username   = "Username";
$password   = "password";
$dbname     = "_Message";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("There was a problem connecting to the database.");
}
?>
