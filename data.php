<?php 

$fname=$_POST['fname'];
$lname=$_POST['country'];
$email=$_POST['hometown'];
$tel=$_POST['ixf'];



$con=mysqli_connect("localhost","root","","malindus");
if(!$con){
	echo "connection failled";

			}

// $db=mysqli_select_db("malindus");
// 	if(!$db){
// 		echo "database selection failled";
// 	}
$insert=mysqli_query($con,"INSERT INTO userss VALUES ('$fname','$lname','$tel','$email')");
if(!$insert){
	echo "data insertion failled";
}



mysqli_close($con);




















 ?>