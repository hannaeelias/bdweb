<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">

</head>
<body>
    <div class="writeHeader"></div>
    
    <h1>welcome <?php echo $_SESSION['userName'];?></h1>

    <div class="dropdownwrite"></div>

    <div class="writefooter"></div>
    <script src="/bdweb/js files/dropdown.js"></script>
    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>


</body>
</html>