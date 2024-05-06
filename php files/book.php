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
        echo "<a href='/bdweb/pages/bookresult.php?id=" . $row["usrid"] . "'>";
        echo "<img src='" . $row["img_url"] . "' alt='Image'>";
        
      
        if(mb_strlen($row["name"], 'UTF-8') < 20 ){
            echo "</a>";
            echo "<h2><a href='/bdweb/pages/bookresult.php?id=" . $row["usrid"] . "'>" . $row["name"] . "</a></h2>";
        }else{
            $maxchracter = 20;
            $naam = substr($row["name"], 0,$maxchracter);
            echo "</a>";
            echo "<h2><a href='/bdweb/pages/bookresult.php?id=" . $row["usrid"] . "'>" . $naam .  "..."."</a></h2>";
        }

        if(mb_strlen($row["resume"], 'UTF-8') < 0 ){
            echo "<p>" . $row["resume"] . "</p>";
        }else{
            $maxchracter = 40;
            $discription = substr($row["resume"], 0,$maxchracter);
            echo  $discription . "...";
        }
       
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
