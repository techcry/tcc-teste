<?php
$servername = "localhost";
$database = "anluiprojects";
$username = "username";
$password = "password";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>