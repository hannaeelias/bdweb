<?php
// Start the session
session_start();
if (isset($_SESSION['userName'])) {
    echo "Your session is running: " . $_SESSION['userName'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">

</head>
<body>
    <div class="writeHeader"></div>
    <div class="center">
        <h1>login page</h1>
        <form action="/bdweb/php files/tes.php" method="POST">
            <div class="inputbox">
                <input type="text" name="username" placeholder="username">
            </div>
            <div class="inputbox">   
                <input type="password" name="PWD" placeholder="password">
            </div>
            <div class="inputbox">
                <input type="submit" value="enter">
            </div>
           
        </form>
    </div>
    

    
    <div class="dropdownwrite"></div>
   
    <div class="writefooter"></div>
    <script src="/bdweb/js files/dropdown.js"></script>

    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>
    
</body>

</html>