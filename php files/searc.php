<?php

include "datbaselink.php";
$book = ($_GET['boek']);
if(empty($book)){
    header('Location: /bdweb/html pages\indexsearchtest.html');
}else{
    
    //create a query and does it
    $sql = "SELECT * FROM boek.booking WHERE naam='$book'";
    $result = $conn->query($sql);


    // Check if a row was returned if yes that means there is a a correct boek 
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            echo"<br>";
            echo  "gevonden";
            echo"<br>";
            echo $book;
        } else {
            echo"<br>";

            echo "Incorrect credentials";
            header('Location: /bdweb/html pages\indexsearchtest.html');
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}







$conn->close();  

?>

