<?php
    //init
    $csvStatus = "";
    $target_dir = "../uploads/csv/";
    $target_file = $target_dir . "csv_".uniqid() . ".csv";
    $uploadOk = true;

    // Check file size
    if ($_FILES["CSVupload"]["size"] > 5000000) {
        $csvStatus = "Sorry, your file is too large.";
        $uploadOk = false;
    }
        
    // Check if $uploadOk is set to 0 by an error
    if (!$uploadOk) {
        $csvStatus = "Sorry, your file was not uploaded.";
            
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["CSVupload"]["tmp_name"], $target_file)) {
            $csvStatus = "The file ". basename( $_FILES["CSVupload"]["name"]). " has been uploaded.";
            $_SESSION['csv'] = $target_file;
        } else {
            $csvStatus = "Sorry, there was an error uploading your file.";
            $uploadOk = false;
        }
    }
        
    //set data for next page
    $_SESSION['upload']['hasCSV'] = $uploadOk;
    $_SESSION['status']['csvStatus'] = $csvStatus;
    $_SESSION['data']['csvLocate'] = $target_file;
        
?>