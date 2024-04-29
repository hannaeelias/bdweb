<?php
// Start the session
session_start();

if($_SESSION['value'] == null or $_SESSION['value'] == 0){
  header('Location: /bdweb/pages\admin login.php');
}

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

    <h1>admin page</h1>

    <input type="button" value="write"  class="write_deletebtn"
    <?php if ($_SESSION['value'] == '1' or $_SESSION['value'] ==2){
      }
      else
      {
           echo ' disabled=disabled ';
      }
    ?> />
    
    <a  <?php if ($_SESSION['value'] == '1' or $_SESSION['value'] ==2){
      }
      else
      {
           echo ' disabled=disabled ';
      }
    ?> href="add book.php"><button>logout</button></a>


    <input type="button" value="delete"  class="write_deletebtn"
     <?php if ($_SESSION['value'] == '2'){
         ;
      }
      else
      {
           echo ' disabled=disabled ';
      }
    ?> />

    <div class="writefooter"></div>
    <script src="/bdweb/js files/header.js"></script>
    <script src="/bdweb/js files/footer.js"></script>

</body>
</html>