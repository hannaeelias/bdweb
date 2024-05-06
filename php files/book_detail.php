<?php
  include "datbaselink.php";

  $book_id = $_GET['id'];

    // Fetch book details from the database based on the book ID
    $sql = "SELECT * FROM boek.booking WHERE usrid = $book_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<div class='detail_book'>";
        echo "<h1>" . $row["name"] . "</h1>";
        echo "<h4>" . $row["categori"] . "</h4  >";
        echo "<img src='" . $row["img_url"] . "' alt='Image'>";
        echo "<p class='resume' >" . $row["resume"]."</p>";
        echo "<p> writer " . $row["author"]."</p>";
        echo "<p>" . $row["publication_year"]."</p>";
        echo "<p> pages " . $row["pages"]."</p>";
        echo "</div>";
        // Display other details of the book as needed
    } else {
        echo "Book not found";
    }

    $conn->close();

?>
