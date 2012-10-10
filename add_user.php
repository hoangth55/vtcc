<html>
<body>
<form action="add_user.php" method="post">
    Level: <select name='adu_level'>
    <option value='1'>SuperAdmin</option>
    <option value='2'>Admin</option>
    <option value='3'>User</option>
    </select> <br/>
    Username: <input type="text" name='adu_username' /> <br/>
    Password: <input type="password" name='adu_password' /> <br/>
    Re-Password: <input type="password" name='adu_rePassword'/> <br/>
    <input type = 'submit' name='adduser' value='Add New User'/>
</form>


<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 10/7/12
 * Time: 12:38 AM
 * To change this template use File | Settings | File Templates.
 */
    if (isset($_POST['adduser'])){
        $input_pass=$input_user="";
        if ($_POST['adu_username'] == NULL){
            echo "Please enter your username <br/>";
        }
        else{
            $input_user = $_POST['adu_username'];
        }
        if ($_POST['adu_password']!= $_POST['adu_rePassword']){
            echo "Your passwords does not match. Try it again! <br/>";
        }
        else{
            if ($_POST['adu_password'] == NULL){
                echo "Please enter a password";
            }
            else{
                $input_pass = $_POST['adu_password'];
            }
        }
        $input_level = $_POST['adu_level'];

        if ($input_pass && $input_user && $input_level){
            include('config.php');

            $query = "Select * from userInfo where username ='".$input_user."' ";
            $sql = mysql_query($query);
            if (mysql_num_rows($sql) > 0){
                echo "This user already have registation. Please try again with an other username!";
            }
            else{
                $query2 = "Insert into UserInfo values('', '$input_user', '$input_pass', '$input_level' )";
                mysql_query($query2);
                echo "Adding new user was successful!";
            }
        }
    }

?>
</body>
</html>