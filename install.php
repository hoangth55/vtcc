<?php
include 'header.php';
?>

<?php
// include 'config.php';
/*
 * MAYBE CHANGE PRE-CONFIG BY A FORM FOR MAKE A CONFIGURATION FILE FIRST
 * THE CONFIG FILE WILL BE WRITE AFTER THE FIRST-SETUP PROCESS FINISHED!
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$db0server=$_POST['server'];
	$db0username=$_POST['username'];
	$db0password=$_POST['password'];
	$db0database_name=$_POST['database_name'];
	
	mysql_connect($db0server,$db0username,$db0password);
	mysql_select_db($db0database_name);
	$query="
		CREATE TABLE virus(
			id INT( 9 ) UNSIGNED ZEROFILL AUTO_INCREMENT ,
			VTCC_No VARCHAR(32) NOT NULL,
			Other_No VARCHAR(32) ,
			Science_name VARCHAR(256) NOT NULL,
			Organism_Type ENUM( 'Yeast' ,  'Bacteria' ,  'Actomyces' ,  'Fungi' ) ,
			E_catalog ENUM( 'Yes' ,  'No' ) , 
			Catalog_year SMALLINT(4) ,
			Other_name VARCHAR(512) ,
			Source_of_Isolation VARCHAR(512) , 
			History VARCHAR(512) , 
			Depositor VARCHAR(512) , 
			Geographic_Origin VARCHAR(128) ,
			Country VARCHAR(32) , 
			Origin ENUM( 'Foreign'  , 'Domestric' ) ,
			Deposit VARCHAR(32) , 
			Isolation_method VARCHAR(64) , 
			Isolation_time VARCHAR(16) , 
			Isolation_person VARCHAR(64) ,
			Deep_frozen VARCHAR(32) , 
			Liquid_nitrogen VARCHAR(32) , 
			Freeze_dried VARCHAR(32) , 
			Cultivation_medium VARCHAR(32) , 
			Optimum_Temperature_for_Growth FLOAT(2,1) , 
			Minimum_Temperature_for_Growth FLOAT(2,1) , 
			Maximum_Temperature_for_Growth FLOAT(2,1) , 
			pH FLOAT (1,1) ,
			Most_recent_checking_date DATE ,
			Type_Strain ENUM( 'Yes'  , 'No' ) ,
			Natural_strain ENUM( 'Yes'  , 'No' ) ,
			Mutated_strain ENUM( 'Yes'  , 'No' ) ,
			Production_strain ENUM( 'Yes'  , 'No' ) ,
			Cell_photo VARCHAR(32) ,
			Colony_photo VARCHAR(32) ,
			Spore_photo VARCHAR(32) ,
			Growth_condition ENUM( 'Aerobic' ,  'Anaerobic' ) ,
			Applications VARCHAR(64) ,
			References1 VARCHAR(512) ,
			Biosafety VARCHAR(16) ,
			PRIMARY KEY ( id ) ,
			UNIQUE (
				VTCC_No
			)
		) DEFAULT COLLATE utf8_general_ci
	";
	$result = mysql_query($query);
	if ( !$result ){
		die( mysql_error() );
	}
?>
<div class="alert">A third of process done!</div>
<?php
	$query='
		CREATE TABLE news(
			id INT( 6 ) UNSIGNED ZEROFILL AUTO_INCREMENT ,
			title VARCHAR( 192 ) NOT NULL ,
			content TEXT NOT NULL ,
			time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
			tag VARCHAR( 64 ) ,
			PRIMARY KEY ( id )
		) DEFAULT COLLATE utf8_general_ci
	';
	mysql_query($query);
?>
<div class="alert">Two third of process done!</div>
<?php
    $query="CREATE TABLE userInfo(id
            INT(10) NOT NULL auto_increment,
            username varchar(50) NOT NULL,
            password char(50) NOT NULL,
            level int(10) NOT NULL,
            PRIMARY KEY (id), UNIQUE  id(id), Key id_2(id))DEFAULT COLLATE utf8_general_ci";

    mysql_query($query);
    $query_add = "INSERT INTO userInfo VALUES('','superadmin', 'superadmin','1')";
    mysql_query($query_add);
    mysql_close();
?>

<div class="alert">Almost done!</div>
<?php 
} else {
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<p><input type="text" value="" placeholder="localhost" name="server" class="input-xlarge"></p>
	<p><input type="text" value="" placeholder="username" name="username" class="input-xlarge"></p>
	<p><input type="password" value="" placeholder="password" name="password" class="input-xlarge"></p>
	<p><input type="text" value="" placeholder="database_name" name="database_name" class="input-xlarge"></p>
	<p><input type="submit" value="Install" class="btn">
	<input type="reset" value="Clear" class="btn"></p>
</form>
<?php 
}
?>
<?php 
include 'footer.php';
?>