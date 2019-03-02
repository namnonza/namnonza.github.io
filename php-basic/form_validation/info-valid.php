<?php

    $name = $nameerr = $price = $priceerr = "";
    $issetname = $issetprice = false;
    //valid name pattern
    if($_POST['name'] !== "" && isset($_POST['name'])){
        if (!preg_match("/^[A-Za-z]*$/", $_POST['name'])){
            $nameerr = "name must be a A-Z or a-z !";
        } else {
            $name = $_POST['name'];
            $issetname = true;
        }
    } else {
        $nameerr = "please input your name !";
    }

    //valid price pattern
    if($_POST['price'] !== "" && isset($_POST['price'])) {
        if (!preg_match("/^[0-9]*$/", $_POST['price'])){
            $priceerr = "price must be 0 - 9 !";
        } else {
            $price = $_POST['price'];
            $issetprice = true;
        }
    } else {
        $priceerr = "please input your price !";
    }
    //true if ticked, false if unticked
    $hasVat = isset($_POST['vat']);
    $hasSerC = isset($_POST['serviceCharge']);

    //set err status for name & price
    $_SESSION['name']['value'] = $name;
    $_SESSION['name']['isset'] = $issetname;
    $_SESSION['name']['status'] = $nameerr;

    $_SESSION['price']['value'] = $price;
    $_SESSION['price']['isset'] =  $issetprice;
    $_SESSION['price']['status'] = $priceerr;
    
    $_SESSION['data']['hasVat'] = $hasVat;
    $_SESSION['data']['hasServC'] = $hasSerC;

?>