<form action="upload.php" method="post">
    Enter the number of your file : <input type="text" name="txtnum" value="<? echo $_POST['txtnum']; ?>"  size="10" />
    <input type="submit" name="ok_num" value="Accept" />
</form>

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 10/10/12
 * Time: 10:40 AM
 * To change this template use File | Settings | File Templates.
 */
if(isset($_POST['ok_num']))
{
    $num=$_POST['txtnum'];
    echo "<hr />";
    echo "Ban dang chon $num file upload<br />";
    echo "<form action='do_upload.php?file=$num' method='post' enctype='multipart/form-data'>";
    for($i=1; $i <= $num; $i++)
    {
        echo "<input type='file' name='dt[]' /><br />";
    }
    echo "<input type='submit' name='ok_upload' value='Upload' />";
    echo "</form>";
}
?>
