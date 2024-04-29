<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
</head>


<body>
    <div class="writeHeader"></div>
  
    <div class="bar">
        <form action="/bdweb/php files\searc.php" method="GET">
            <input type="text" name="boek" placeholder="search" id="livesearch">
            <input type="submit" value="enter">
    
        </form>
    </div>
    
    
    <div class="dropdownwrite"></div>

        <h1>welcome <?php if (isset($_SESSION['userName'])) {
            echo $_SESSION['userName'];
        }
       ?></h1>


    <div class="writefooter"></div>
    <script src="/bdweb/js files/dropdown.js"></script>

    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>
</body>


</html>