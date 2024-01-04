<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="astronomy_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);
// Check connection
if (!$conn) {
 die("Connection failed from check.php: " . mysqli_connect_error());
}
?>