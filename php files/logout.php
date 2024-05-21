<?php 
session_start();
session_destroy();
session_start();
if($_SESSION['value'] == null or $_SESSION['value'] == 0){
    $_SESSION['value'] = '0';

}
header('Location: \bdweb\pages\indexsearchtest.php');
exit;
?>