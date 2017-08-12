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
 $description=$_POST['description'];


$db=mysql_select_db("goworknearby");
	if(!$db){
		echo "database selection failled";
	}
$insert=mysql_query("INSERT INTO jobs VALUES ('$fname','$lname','$email','$tel','$hometown','$country','$interested','$lati','$longi','$description')");
if(!$insert){
	echo "data insertion failled";
}

$longiincrement= $longi+0.05;
$longidecrement=$longi-0.05;
$latiidecrement= $lati-0.05;
$latiincrement= $lati+0.05;

$slct= mysql_query("SELECT email 
					FROM workers 
					WHERE lati<$latiincrement AND lati>$latiidecrement AND longi<$longiincrement AND longi>$longidecrement");

if(!$slct){
	echo "data select failled";
}
 
while($row=mysql_fetch_array($slct))
 {
 	
 	echo $email=$row['email'];

    mail("$email",
        "This is the message subject",
        "$description",
        "From: goworknearby@gmail.com" . "\r\n" . "Content-Type: text/plain; charset=utf-8",
        "-fsender@example.com");

 	}
 	

?>
