<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 10/6/12
 * Time: 11:06 AM
 * To change this template use File | Settings | File Templates.
 */
    $username = $_POST['ud_username'];
    $password = $_POST['ud_password'];
    $rePassword = $_POST['ud_repassword'];

    if ($password == $rePassword){
        include("C:/xampp/htdocs/VinhLS/config.php");
        $query ="INSERT INTO userInfo values('','$username', '$password', '3')";
        mysql_query($query);
        mysql_close();
    }
    else{
        echo "Your re-type password is not match!";
    }


