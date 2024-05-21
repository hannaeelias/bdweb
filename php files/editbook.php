<?php
// Include database connection
include "datbaselink.php";

// Retrieve form data
$title = $_POST['title'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$category = $_POST['category'];
$artist = $_POST['artist'];
// Sanitize data
$title = mysqli_real_escape_string($conn, $title);
$author = mysqli_real_escape_string($conn, $author);
$isbn = mysqli_real_escape_string($conn, $isbn);
$category = mysqli_real_escape_string($conn, $category);

// Update SQL statement
$sql = "UPDATE boek.booking SET 
            name = '$title', 
            author = '$author', 
            categori = '$category',
            artist = '$artist'
        WHERE isbn =$isbn";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    header('Location: /bdweb/pages\add book.php');
} else {
    echo "Error updating book information: " . $conn->error;
}

// Close connection
$conn->close();
?>
