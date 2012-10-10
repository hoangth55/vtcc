<html>
<head>
    <title>Database management</title>

</head>
</html>
<?php
    include 'header.php';
?>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <div class="nav-collapse">
                <ul class="nav pull-right">
                <?
                    include("Account/login.php");
                ?>
                    <form action="index.php" class="form-inline" method="post">
                        <input type="text" class="input-small" placeholder="User" name="input_User"/>
                        <input type="password" class="input-small" placeholder="Password" name="input_Password"/>
                        <label class="checkbox">
                            <input type="checkbox"> Remember?
                        </label>
                        <input type="submit" class="btn" value="Sign in" name="ok"/>
                    </form>
                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>

<div class="hero-unit">
    <img src="library_media/bootstrap/img/DSCF1114.JPG" alt="" width="200" height="500"/>
</div>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Title</a>
            <div class="nav-collapse">
                <ul class="nav">
                    <li class="active"><a href="">Home</a></li>
                    <li><a href="#">Link</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-left" action="">
                    <input type="text" class="search-query span2" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>




                </ul>
            </div><!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div>


<form action="cms.php" method="post">
    <input class="btn" type="submit" value="Administrator Page"/>
</form>


<form action="uploads/upload.php" method="post">
    <input class="btn" type="submit" value="Upload file"/>
</form>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none; ">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h3 id="myModalLabel">Form registration</h3>
    </div>
    <div class="modal-body">
        <form action="Account/register.php" method="post">
            User name: <input type="text" name="ud_username"> <br>
            Password: <input type="password" name="ud_password"/> <br>
            Re-type password again: <input type="password" name="ud_repassword"/>
            <div class="modal-footer">
                <input class ="btn" type="submit" value="Register"/>
                <button class="btn" data-dismiss="modal">Close</button>
            </div>

        </form>


    </div>

</div>
<div class="bs-docs-example" style="padding-bottom: 24px;">
    <a data-toggle="modal" href="#myModal" class="btn btn-primary btn-large">Sign up</a>
</div>

<script type="text/javascript">
    $(document).ready(function(){

    })
</script>



<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 10/6/12
 * Time: 9:21 AM
 * To change this template use File | Settings | File Templates.
 */
//    include("Account/connectDB.php");
//    $query="CREATE TABLE UserInfo (id INT(10) NOT NULL auto_increment, username varchar(50) NOT NULL,
//        password char(50) NOT NULL, level int(10) NOT NULL, PRIMARY KEY (id), UNIQUE  id(id), Key id_2(id))";
//    mysql_query($query);
//    mysql_close();


?>

<?
    include 'footer.php';
?>