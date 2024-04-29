<?php
session_start();
include "datbaselink.php";

$namee = ($_POST['username']);
$password = ($_POST['PWD']);


//maaks a message using the given info from the user
if (empty($namee) || empty($password)) {
    header('Location: /bdweb/pages\login.php');
    
} else {

    $sql = "SELECT * FROM user.gebruikt WHERE naam='$namee' AND pwd='$password' ";
    $result = $conn->query($sql);
    
    $row = mysqli_fetch_assoc($result);
    $write_prevelages = $row['w'];
    $delete_prevelages = $row['d'];
    //shows what is in the database
    if ($result) {
        // Check if a row was returned if yes that means there is a a correct usenamer and password
        if (mysqli_num_rows($result) == 1) {
            if($write_prevelages == true){ 
                $_SESSION['value'] = '1';
                $_SESSION['userName'] = $namee;
                var_dump($_SESSION);
               if($delete_prevelages == true){
                $_SESSION['value'] = '2';
                $_SESSION['userName'] = $namee;
               
                header('Location: /bdweb/pages\admin page.php');

               }else{
                header('Location: /bdweb/pages\admin page.php');
               }
            }else{
                header('Location: /bdweb/pages\admin login.php');
            }
           
        } else {
            header('Location: /bdweb/pages\admin login.php');
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
    $conn->close();
}   
?>

