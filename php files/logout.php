<?php 
session_start();
session_destroy();
header('Location: \bdweb\pages\indexsearchtest.php');
exit;
?>