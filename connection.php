
<?php 
//include "config.php";
$Host="localhost";
$Username="root";
$Password="";
$Db="malindus";
$con=mysql_connect($Host,$Username,$Password,$Db);
if(!$con){
	echo "failed";
}

$db=mysql_select_db($Db);
if (!$db) {
	echo "failled";
}

 ?>