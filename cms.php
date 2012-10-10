<?php
    /**
     * Created by JetBrains PhpStorm.
     * User: Administrator
     * Date: 10/7/12
     * Time: 12:27 AM
     * To change this template use File | Settings | File Templates.
     */
    session_start();
if (!(isset($_SESSION['userid']) && $_SESSION['level'] == 1)){
    header("location: login.php");
    exit();
}
else{
    echo "This is page for admin <br><br>";
    include('add_user.php');

    echo "<br><br>";

    ?>
    <table align="center" width="400" border="1">
         <tr>
             <td>STT</td>
             <td>Username</td>
             <td>Level</td>
             <td>Edit</td>
             <td>Delete</td>

         </tr>
        <?
        include ('config.php');
        $sql_cms = "SELECT * FROM userInfo order by id DESC";
        $query_cms = mysql_query($sql_cms);
        if (mysql_num_rows($query_cms) == 0) {
            echo "<tr><td colspan=5 align=center>Chua co username nao</td></tr>";
        }

        else{
            $stt = 0;
            while ($row = mysql_fetch_array($query_cms)) {
                $stt++;
                echo "<tr>";
                echo "<td>$stt</td>";
                $temp = $row['username'];
                echo "<td>$temp</td>";
                if ($row['level'] == "1") {
                    echo "<td>SuperAdminr</td>";
                }
                elseif ($row['level']=="2"){
                    echo"<td>Admin</td>";
                }
                else
                {
                    echo "<td>Member</td>";
                }

                echo "<td><a href='edit_user.php?userid=$row[id]'>Edit</a></td>";

                echo "<td><a href='del_user.php?userid=$row[id]'>Del</a></td>";

                echo "</tr>";
            }
        }
        ?>
    </table>

<?
}
?>