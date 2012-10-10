<?
    if (isset($_POST['ok'])){
        $input_pass=$input_user="";
        if ($_POST['input_User'] == NULL){
            echo "Please enter your username <br/>";
        }
        else{
            $input_user = $_POST['input_User'];
        }
        if ($_POST['input_Password']== NULL){
            echo "Please enter your password <br/>";
        }
        else{
            $input_pass = $_POST['input_Password'];
        }

        if ($input_pass && $input_user){
            include("C:/xampp/htdocs/VinhLS/config.php");
            $query ="SELECT * FROM userInfo where username = '".$input_user."' and password = '".$input_pass."'";
            $sql = mysql_query($query);
            if (mysql_num_rows($sql) == 0){
                echo "Username or password is not correct, please try again";
            }
            else{
                echo "Login successfully!";
                $row = mysql_fetch_array($sql);
                session_start();
                #session_register("userid");
                #session_register("level");
                $_SESSION['userid'] = $row['id'];
                $_SESSION['level'] = $row['level'];
                setcookie("username", $input_user, time() + 3600);
                setcookie("password", $input_pass, time() + 3600);


            }

            mysql_close();
        }


    }

?>