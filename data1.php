<?php



$fnamew=$_POST['fnamew'];
$lnamew=$_POST['countryw'];
$emailw=$_POST['hometownw'];
$telw=$_POST['ixfw'];

$con=mysqli_connect("localhost","root","","malindus");
if(!$con){
	echo "connection failled";

}

// $db=mysqli_select_db("malindus");
// 	if(!$db){
// 		echo "database selection failled";
// 	}
$insert=mysqli_query($con,"INSERT INTO workers VALUES ('$fnamew','$lnamew','$telw','$emailw')");
if(!$insert){
	echo "data insertion failled";
}
mysqli_close($con);



?>
