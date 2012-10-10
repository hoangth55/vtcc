<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 10/10/12
 * Time: 10:40 AM
 * To change this template use File | Settings | File Templates.
 */
    $site = 'localhost::';
    if (isset($_POST['ok_upload'])){
        $num = $_GET['file'];
        include("C:/xampp/htdocs/VinhLS/config.php");
        for ($i=0; $i < $num; $i++){
            move_uploaded_file($_FILES['dt']['tmp_name'][$i], "uploads/data/".$_FILES['dt']['name'][$i]);
            $url = "uploads/data/".$_FILES['dt']['name'][$i];
            $name = $_FILES['dt']['name'][$i];

            $query = "INSERT INTO data_upload values('','$url','$name')";
            mysql_query($query);

            echo "Upload thanh cong file <b>$name</b> <br/>";
            echo "<img src='$url' width='120' <br/> ";
            echo "File url: <input type='text' name='link' value='$site/$url' size='35'/> <br/>";


        }
        mysql_close();
    }
    else{
        echo "Please choose a file to upload before go to this site!";
    }