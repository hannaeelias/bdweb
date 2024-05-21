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
    <title>admin headqaurtes</title>
    <link rel="stylesheet" href="/bdweb/css files/style.css">
    <link rel="icon" href="\bdweb\imgs\logo\luna (2).jpg">
</head>
<body>
    <div class="writeHeader"></div>

    <h1>admin page</h1>

    <?php if ($_SESSION['value'] == '1' or $_SESSION['value'] ==2){
       echo '<a href="add book.php"><button>add book</button></a>';
      }
    ?>

    <?php if ($_SESSION['value'] == '2'){
        echo '<a href="remove book.php"><button>remove book</button></a>';
      }
  
    ?> 


    <div class="writefooter"></div>
    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>

</body>
</html>