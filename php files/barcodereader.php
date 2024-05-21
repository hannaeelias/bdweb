<?php

include "datbaselink.php";

$barcode = $_POST["barcode"];

$url = "http://openlibrary.org/api/volumes/brief/isbn/" . $barcode . ".json";

$contents = file_get_contents($url);
$data = json_decode($contents, true);


if ($data === null || !array_key_exists('records', $data)) {
    echo "Error: Unable to fetch book information for the provided barcode.";
} else {
    // Access book details
    $bookInfo = reset($data['records'])['data'];

    // Display relevant information
    
    echo "Title: " . $bookInfo['title'] . "<br>";
    echo "Author(s): " . $bookInfo['authors'][0]['name'] . "<br>";
    echo "ISBN-13: " . $bookInfo['identifiers']['isbn_13'][0] . "<br>";
    echo "Number of Pages: " . $bookInfo['number_of_pages'] . "<br>";
    echo "Publisher: " . $bookInfo['publishers'][0]['name'] . "<br>";
    echo "Publish Date: " . $bookInfo['publish_date'] . "<br>";

    
    if(!empty($bookInfo['cover']['small'])){
        echo "Cover Image: <img src='" . $bookInfo['cover']['small'] . "' alt='Cover'><br>";
    } else {
        echo "Cover Image: Not Available<br>";
    }
    
    // Check if description is available
    if(isset($bookInfo['notes'])) {
        echo "Description: " . $bookInfo['notes'] . "<br>";
    } else {
        echo "Description: Not Available<br>";
    }
    
    $title = $bookInfo['title'];
    echo $title;
    $isbn = isset($bookInfo['identifiers']) ? "'" . $bookInfo['identifiers']['isbn_13'][0] . "'" : "NULL";
    $sqlsearch = "SELECT * FROM boek.booking WHERE name='$title' and isbn=$isbn";
    $doublbook = $conn->query($sqlsearch);

    if (mysqli_num_rows($doublbook) == 1) {
        $sqlupdate = "UPDATE boek.booking SET amount = amount + 1 WHERE name='$title'";
        $done = $conn->query($sqlupdate);
    }else{
        
        // Prepare SQL statement
        $title = isset($bookInfo['title']) ? "'" . $bookInfo['title'] . "'" : "NULL";
        $author = isset($bookInfo['authors'][0]['name']) ? "'" . $bookInfo['authors'][0]['name'] . "'" : "NULL";
        $publish_date = isset($bookInfo['publish_date']) ? "'" . $bookInfo['publish_date'] . "'" : "NULL";
        $number_of_pages = isset($bookInfo['number_of_pages']) ? $bookInfo['number_of_pages'] : "NULL";
        $publisher = isset($bookInfo['publishers'][0]['name']) ? "'" . $bookInfo['publishers'][0]['name'] . "'" : "NULL";
        $cover_url = isset($bookInfo['cover']['large']) ? "'" . $bookInfo['cover']['large'] . "'" : "NULL";
        $description = isset($bookInfo['notes']) ? "'" . $bookInfo['notes'] . "'" : "NULL";
        $isbn = isset($bookInfo['identifiers']) ? "'" . $bookInfo['identifiers']['isbn_13'][0] . "'" : "NULL";
        $sql = "INSERT INTO boek.booking (name, categori, resume, img_url, reserveren, author, artist, publication_year, pages, publisher,isbn,amount) 
                VALUES                  ($title, 'Uncategorized', $description, $cover_url, 0, $author, NULL, $publish_date, $number_of_pages, $publisher,$isbn,1)";

        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
           
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        header('Location: /bdweb/pages\add book.php?title=' . urlencode($title) . '&author=' . urlencode($bookInfo['authors'][0]['name']) . '&isbn=' . urlencode($bookInfo['identifiers']['isbn_13'][0]));
    }
   
    
    // Close connection
    $conn->close();
}
?>
