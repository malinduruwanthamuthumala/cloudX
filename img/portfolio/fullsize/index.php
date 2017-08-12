<!DOCTYPE html>
<html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title>Google Maps Javascript API v3 Example: Add Marker with open infowindow on map click</title> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="scripts/downloadxml.js"></script>

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="mapradius.html">page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"></a>Page 1-2</li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="mapradius.html">Other jobs</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- background div -->
<div class="container-fluid">
	<img src="images/a.jpg" class="img-fluid " alt="Responsive image" style="width:100%;height:590px">

	
	
	<div class="container-fluid">
		<img src="images/s.png" class="img-fluid col-md-sm-12" alt="Responsive image" style="margin-top:50px; width:500px">	
	</div>
</div>



<div class="well col-md-4 container-fluid col-md-offset-1" style="margin-top:50px;" id="postj">
<h1>POST A JOB</h1>
	<form action="data.php" method="post">
		<label for="fname">NAME</label>
		<input type="text"  name="fname" id="fname" class="form-control"><br>
		<label for="lname">country</label>
		<input type="text" name="country" id="country" placeholder="" class="form-control"><br>
		<label for="email">hometown</label>
		<input type="text" name="hometown" id="hometown" placeholder="" class="form-control"><br>
		<label for="tp">interested field</label>
		<input placeholder="" id="txp" name="ixf" type="text" class="form-control"><br>

    <input type="hidden1" placeholder="" id="latlng1" name="latlng1" type="text" class="form-control"/>
		
		<input type="submit" value="SUBMIT" class="btn btn-primary">
		<input type="reset" value="RESET" class="btn btn-default">
		
		
	</form>
</div>

<div class="well col-md-4 container-fluid col-md-offset-1" style="margin-top:50px;" id="postj">
<h1>register as a worker</h1>
	<form action="data1.php" method="post">
		<label for="fname">NAME</label>
		<input type="text"  name="fnamew" id="fnamew" class="form-control"/><br>
		<label for="lname">country</label>
		<input type="text" name="countryw" id="countryw" placeholder="" class="form-control"/><br>
		<label for="email">hometown</label>
		<input type="text" name="hometownw" id="hometown" placeholder="" class="form-control"/><br>
		<label for="tp">interested field</label>
		<input placeholder="" id="txp" name="ixfw" type="text" class="form-control"/><br>
		
    <input hidden="true" placeholder="" id="latlng2" name="latlng2" type="text" class="form-control"/>

		<input type="submit" value="SUBMIT" class="btn btn-primary">
		<input type="reset" value="RESET" class="btn btn-default">
		
	</form>

</div>
	</div>
<div>

</div>
<!--Google maps-->
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
    $("#latlng1").val(latlng);
    $("#latlng2").val(latlng);

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

  <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
 

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
           <div id="map_canvas" style="width: 500px; height: 450px"></div> 
        </td> 
        <td valign="top" style="width:150px; text-decoration: underline; color: #4444ff;"> 
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


  
</body>
</html>