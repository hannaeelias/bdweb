<?php
$servername = "'add your servername for the database here'";
$username = "'add your username for the database here'";
$password = "'add your password for the database here'";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die('Could not connect to MySQL server: ' . mysqli_error());
}

if ($conn) {
    ///
} else {
    echo 'Error connecting to MySQL server: ' . mysqli_error();
}
?>
