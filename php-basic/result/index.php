<?php
    session_start();
    //init
    $NET = "";
    $NETS = [];
    $profile = $_SESSION['data']['profileLocate'];
    $name = $_SESSION['name']['value'];

    if($_SESSION['price']['isset']){
        $NET = $_SESSION['price']['value'] + $_SESSION['price']['value']*7/100*$_SESSION['data']['hasVat'] + $_SESSION['price']['value']*10/100*$_SESSION['data']['hasServC'];
        $NET = "has NET cost\n" . $NET;
    }

    if($_SESSION['upload']['hasCSV']){
        $row = 1;
        if(($handle = fopen($_SESSION['data']['csvLocate'],"r")) !== FALSE ){
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if($row > 1){
                    $NETS[$data[0]] = $data[1] + $data[1]*7/100*($data[2]=="yes") + $data[1]*10/100*($data[3]=="yes"); 
                }
                $row++;
            }
            fclose($handle);
        }
    }
    

    require 'index.view.php';
?>