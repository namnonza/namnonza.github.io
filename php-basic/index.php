<?php
    session_start();
    $nameStatus = $priceStatus = $csvStatus = "";

    if(isset($_SESSION['name'])){
        $nameStatus = $_SESSION['name']['status'];
        if(isset($_SESSION['price'])){
            $priceStatus = $_SESSION['price']['status'];
            if(isset($_SESSION['status']['csvStatus'])){
                $csvStatus = "*".$_SESSION['status']['csvStatus'];
            }
        }
        session_unset();
    }
    require 'index.view.php';
?>