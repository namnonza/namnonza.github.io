<?php
    //init
    $fileStatus = "";
    $uploadOk = true;
    $target_dir = "../uploads/img/";
    $target_file = $target_dir . "default.jpg";
    if($_FILES["fileToUpload"]['error'] == 0){
        $target_type = strtolower(preg_split("[/]",$_FILES["fileToUpload"]["type"])[1]);
        $target_file = $target_dir . "img_" . uniqid() . "." . $target_type;
        
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $fileStatus = "Sorry, your file is too large.";
            $uploadOk = false;
        }
        
        // Allow certain file formats
        if($target_type != "jpg" && $target_type != "png" && $target_type != "jpeg"
        && $target_type != "gif" ) {
            $fileStatus = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = false;
        }
        
        // Check if $uploadOk is set to false by an error
        if (!$uploadOk) {
            $fileStatus = "Sorry, your file was not uploaded.";
            
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $fileStatus = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                $_SESSION['pic'] = $target_file;
            } else {
                $fileStatus = "Sorry, there was an error uploading your file.";
            }
        }
    }
        
    // set data
    $_SESSION['status']['fileStatus'] = $fileStatus;
    $_SESSION['data']['profileLocate'] = $target_file;
        
?>