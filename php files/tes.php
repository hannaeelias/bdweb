<?php

include "datbaselink.php";

$namee = ($_POST['username']);
$password = ($_POST['PWD']);


//maaks a message using the given info from the user
if (empty($namee) || empty($password)) {
    header('Location: /bdweb/html pages\login.html');
    
} else {

    $sql = "SELECT * FROM user.gebruikt WHERE naam='$namee' AND pwd='$password'";
    $result = $conn->query($sql);
    
    //shows what is in the database
    if ($result) {
        // Check if a row was returned if yes that means there is a a correct usenamer and password
        if (mysqli_num_rows($result) == 1) {
            echo"<br>";
    
            echo "Correct credentials";
            header('Location: /bdweb/html pages\welcome.html');
            echo "<script> var namee = '" . $namee . "'; </script>";
        } else {
            header('Location: /bdweb/html pages\login.html');
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
    $conn->close();
}   
?>
