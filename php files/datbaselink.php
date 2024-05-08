<?php
$servername = 'localhost';
$username = 'root';
$password = 'Jessica7793';

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