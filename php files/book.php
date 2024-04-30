<?php 


// Include database connection
include "datbaselink.php";

// Determine current page number
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$booksPerPage = 5;
$offset = ($page - 1) * $booksPerPage;

// neem de book in de datab
$sql = "SELECT * FROM boek.booking LIMIT $offset, $booksPerPage";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='book'>";
        echo "<img src='" . $row["img_url"] . "' alt='Image'>";
        echo "<h2><a href='\bdweb\pages\bookresult.php?id=" . $row["usrid"] . "'>" . $row["name"] . "</a></h2>";
        echo "</div>";
    }
} else {
    echo "0 results";   
}

// Generate pagination links
$sql = "SELECT COUNT(*) AS total FROM boek.booking";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalBooks = $row['total'];
$totalPages = ceil($totalBooks / $booksPerPage);

echo "<div class='pagination'>";
for ($i = 1; $i <= $totalPages; $i++) {
    echo "<a href='?page=$i'>$i</a> ";
}
echo "</div>";

$conn->close();
?>
