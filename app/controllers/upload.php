<?php
    function guid(){
       if (function_exists('com_create_guid')){
           return com_create_guid();
       }else{
           mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
           $charid = strtoupper(md5(uniqid(rand(), true)));
           $hyphen = chr(45);
           $uuid = substr($charid, 0, 8).$hyphen
                   .substr($charid, 8, 4).$hyphen
                   .substr($charid,12, 4).$hyphen
                   .substr($charid,16, 4).$hyphen
                   .substr($charid,20,12);
           return $uuid;
       }
    }

    if($myUser == null){
        echo "Error";
        die();
    }

    $upload_picture = $_FILES['upload_picture'];
    if($upload_picture['error'] == UPLOAD_ERR_OK && $upload_picture['size'] <= 33554432){
        $target_folder = "/var/www/uoj/files/upload/";
        $temp_name = $upload_picture['tmp_name'];
        $file_name = guid().$upload_picture['name'];
        if(!move_uploaded_file($temp_name,$target_folder.$file_name)) echo "Error";else echo $file_name;
    }else{
        echo "Error";
    }
    die();
 ?>
