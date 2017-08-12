<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title>Google Maps Javascript API v3 Example: Add Marker with open infowindow on map click</title> 
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
		<script type="text/javascript" src="scripts/downloadxml.js"></script>


	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
include ('connection.php');

 ?>

<h1><center>REGISTER AS A WORKER</center></h1>;
<br>
	<div class="well col-md-4 col-md-offset-4 box ">
	<form action="dataworker.php" method="post">
		<label for="fname">First NAME</label>
		<input type="text" placeholder="first name" name="fname" id="fname" class="form-control"><br>
		
		<label for="lname">Last Name</label>
		<input type="text" name="lname" id="lname" placeholder="last name" class="form-control"><br>
		
		<label for="email">e-mail</label>
		<input type="email" name="email" id="email" placeholder="email" class="form-control"><br>
		
		<label for="tel">telephone</label>
		<input type="text" name="tel" id="tel" placeholder="telephone" class="form-control"><br>
		
		<label for="country">country</label>
		<input type="text" name="country" id="country" placeholder="country" class="form-control"><br>
		
		<label for="email">hometown</label>
		<input type="text" name="hometown" id="hometown" placeholder="hometown" class="form-control"><br>
		
		<label for="if">interested field</label>

		<input hidden="true" placeholder="" id="lng2" name="lng2" type="text" class="form-control"/>
		<input hidden="true" placeholder="" id="lat2" name="lat2" type="text" class="form-control"/>
	<div>
		
	</div>
		
 	<select name="if" id="if" class="form-control">
	 <?php 
 	$select=mysql_query("SELECT field FROM fields");
 	while ($row=mysql_fetch_array($select)){
 	$em=$row['field'];

 
 	echo	'<option value"'.$em.'">'.$em.'</option>';
 }
 ?>

 	</select>
		<br>
		<input type="submit" value="SUBMIT" class="btn btn-primary">
		<input type="reset" value="RESET" class="btn btn-default">
		
	</form>

	<h3>pick your location from the map</h3>

</div>





<div class="col-md-6 col-md-offset-1 col-xs-12" >
			<style type="text/css">
html, body { height: 100%; } 
</style>
<script type="text/javascript"> 
//<![CDATA[

     // global "map" variable
      var map = null;
      var marker = null;

var infowindow = new google.maps.InfoWindow(
  { 
    size: new google.maps.Size(10000,50000)
  });

// A function to create the marker and set up the event window function 
function createMarker(latlng, name, html) {
  
    //alert("pass this location " + latlng);
  console.log("console1: " + latlng);
    $("#lat2").val(latlng.lat());
    $("#lng2").val(latlng.lng());

    var contentString = html;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });
    google.maps.event.trigger(marker, 'click');    
    return marker;
}

 

function initialize() {
  // create the map
  var myOptions = {
    zoom: 5,
    center: new google.maps.LatLng(25.907787,70.359741),
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"),
                                myOptions);
 
  google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

  google.maps.event.addListener(map, 'click', function(event) {
	//call function to create marker
         if (marker) {
            marker.setMap(null);
            marker = null;
         }
	 marker = createMarker(event.latLng, "name", "<b>API Inne</b><br>"+event.latLng);
  });

}
    

//]]>
</script> 

  </head> 
<body style="margin:0px; padding:0px;" onload="initialize()"> 
 
    <!-- you can use tables or divs for the overall layout --> 
    <table border="1"> 
      <tr> 
        <td> 
           <div id="map_canvas" style="width: 1100px; height: 450px"></div> 
        </td> 
        <td valign="top" style="width:auto; text-decoration: underline; color: #4444ff;"> 
           <div id="side_bar"></div> 
        </td> 
      </tr> 
    </table> 
 
    <noscript><p><b>JavaScript must be enabled in order for you to use Google Maps.</b> 
      However, it seems JavaScript is either disabled or not supported by your browser. 
      To view Google Maps, enable JavaScript by changing your browser options, and then 
      try again.</p>
    </noscript> 
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"> 
</script> 
<script type="text/javascript"> 
_uacct = "UA-162157-1";
urchinTracker();
</script> 
<script type="text/javascript"><!--
google_ad_client = "pub-8586773609818529";
google_ad_width = 728;
google_ad_height = 90;
google_ad_format = "728x90_as";
google_ad_type = "text";
google_ad_channel ="";
google_color_border = "CCCCCC";
google_color_bg = "FFFFFF";
google_color_link = "000000";
google_color_url = "666666";
google_color_text = "333333";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> 

        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXDloIdsBIBrlfKMsf6p5DER1jnvPTjJI&callback=initMap">
    </script>
</div>
</body>
</html>