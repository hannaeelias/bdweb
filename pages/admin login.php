<?php
// Start the session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
    <link rel="icon" href="\bdweb\imgs\logo\luna (2).jpg">
</head>
<body>
    <div class="writeHeader"></div>

    <div class="center">
        <h1>admin login</h1>
        <form action="/bdweb/php files/admin login.php" method="POST">
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

    


    
  
    <div class="writefooter"></div>
    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>
</body>

</html>