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
    <title>add book</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
    <link rel="icon" href="\bdweb\imgs\logo\luna (2).jpg">
</head>
<body>
    <div class="writeHeader"></div>

    <h1>admin page remove book</h1>



    <a href="admin page.php"><button>back</button></a>

    <div class="writefooter"></div>
    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>

</body>
</html>