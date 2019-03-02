<?php
    session_start();
    session_unset();
    require 'upload.php';
    require 'csv-upload.php';
    require 'info-valid.php';
    
    if($_SESSION['upload']['hasCSV'] || ($_SESSION['price']['isset']&&$_SESSION['name']['isset'])){
        header("Location: /result/");
        die();
    } else {
        header("Location: /");
        die();
    }

?>