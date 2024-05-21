<?php
session_start();
include "datbaselink.php";

$name = ($_POST['username']);
$password = ($_POST['PWD']);
$email = ($_POST['email']);

if(empty($name) || empty($password) || empty($email)){
    header('Location: /bdweb/pages\register.php');
}else{  
        
    //create a query and does it
    $sql = "SELECT * FROM user.gebruikt WHERE naam='$name' OR EMAIL='$email'";
    $result = $conn->query($sql);



    //shows what is in the database
    if ($result) {
        // checks if there isn't already a usernam like that
        if (mysqli_num_rows($result) == 1) {
            echo"<br>";

            echo "bestaat al";
        } else {
            $sql = "INSERT INTO user.gebruikt (naam, pwd,r,w,d) VALUES ('$name', '$password',true,false,false)";
            if ($conn->query($sql) === TRUE) {
                echo"<br>";

                echo "Registration successful!";
            } else {
                echo"<br>";

                echo "Error: " . $sql . "<br>" . $conn->error;
            }   

        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    $conn->close();

}

?>


