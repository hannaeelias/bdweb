<?php
// Start the session
session_start();
if($_SESSION['value'] == null or $_SESSION['value'] == 0){
    $_SESSION['value'] = '0';

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
    <link rel="icon" href="\bdweb\imgs\logo\luna (2).jpg">
</head>


<body>
    <div class="writeHeader"></div>
  
    <div class="searchcontainer">
        <h1>Books</h1>

        <?php include "C:/xampp/htdocs/bdweb/php files/searc.php"; ?>

    </div>

    

    <div class="writefooter"></div>


    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>
</body>


</html>