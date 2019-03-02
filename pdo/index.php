<?php
    try {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=book_list', 'root', '');
    } catch (PDOException $e){
        die("db connection error");
    }

    $query = $pdo->prepare('select * from book');
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_OBJ);

    require 'index.view.php';

?>