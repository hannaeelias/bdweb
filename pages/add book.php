<?php
// Start the session
session_start();
if($_SESSION['value'] == null or $_SESSION['value'] == 0){
    $_SESSION['value'] = '0';
    header('Location: /bdweb/pages\admin login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add book</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
    <link rel="icon" href="\bdweb\imgs\logo\luna (2).jpg">
</head>
<body>
    <div class="writeHeader"></div>

  
    <h1>admin page</h1>
    <br>
    <h2>Scan Barcode</h2>
    <form action="\bdweb\php files\barcodereader.php" method="post">
        <label for="barcode">Scan Barcode:</label>
        <input type="text" name="barcode" >
        <input type="submit" value="Submit">
    </form>
    <br>
    <h2>Edit Book Information</h2>
    <form action="\bdweb\php files\editbook.php" method="post">
    <label for="title">Title:</label>
    <input type="text" name="title" value="<?php echo isset($_GET['title']) ? htmlspecialchars($_GET['title']) : ''; ?>"><br>
    <label for="author">Author:</label>
    <input type="text" name="author" value="<?php echo isset($_GET['author']) ? htmlspecialchars($_GET['author']) : ''; ?>"><br>
    <label for="isbn">ISBN:</label>
    <input type="text" name="isbn" value="<?php echo isset($_GET['isbn']) ? htmlspecialchars($_GET['isbn']) : ''; ?>"><br>
    <label for="category">category:</label>
    <input type="text" name="category" value="<?php echo isset($_GET['category']) ? htmlspecialchars($_GET['category']) : ''; ?>"><br>
    <label for="artist">artist</label>
    <input type="text" name="artist" value=""><br>
    <input type="submit" value="Submit">

</form>


    <a href="admin page.php"><button>back</button></a>

    <div class="writefooter"></div>
    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>

</body>
</html>