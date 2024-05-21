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
    <title>register</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
    <link rel="icon" href="\bdweb\imgs\logo\luna (2).jpg">
</head>
<body>
    <div class="writeHeader"></div>

    <div class="center">
        <h1>register page</h1>
        <form action="/bdweb/php files/REGISTER_check.php" method="POST">
            <div class="inputbox">
                <input type="text" name="username" required placeholder="username" >
            </div>
            <div class="inputbox">
                <input type="text" name="email" required placeholder="email" >
            </div>
            <div class="inputbox">   
                <input type="password" name="PWD" required placeholder="password">
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