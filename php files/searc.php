<?php
session_start();
include "datbaselink.php";

$book = ($_GET['boek']);
if(empty($book)){
    header('Location:/bdweb/pages\indexsearchtest.php');
}else{
    
    //create a query and does it
   
    $sql = "SELECT * FROM boek.booking WHERE naam LIKE '%$book%'";
    $result = $conn->query($sql);


    // Check if a row was returned if yes that means there is a a correct boek 
    if ($result) {
        if (mysqli_num_rows($result) >= 1) {
            echo"<br>";
            echo  "gevonden";
            echo"<br>";
            while($row = $result->fetch_assoc()) {
                echo $row["naam"];
                echo"<br>";
              }
        } else {
            echo"<br>";
            echo "Incorrect credentials";

        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}







$conn->close();  

?>