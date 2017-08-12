<?php 


include ('connection.php');

 ?>

<?php  


  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];
 $country=$_POST['country'];
  $hometown=$_POST['hometown'];
 $interested=$_POST['if'];
 $lati=$_POST['lat2'];
 $longi=$_POST['lng2'];


$db=mysql_select_db("goworknearby");
	if(!$db){
		echo "database selection failled";
	}
$insert=mysql_query("INSERT INTO workers VALUES ('$fname','$lname','$email','$tel','$hometown','$country','$interested','$lati','$longi')");
if(!$insert){
	echo "data insertion failled";
}
mysql_close($con);





?>
