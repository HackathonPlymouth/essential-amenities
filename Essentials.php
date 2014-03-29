<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hackathon - Local Essentials</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/core.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Essential Amenities</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Essentials.php">Essentials</a></li>
			<li><a href="Crime.php">Crime Watch App</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="HowTo.php">How To?</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
		
		<h2>Welcome to Essentials </h2>
		<p>Here you can find local shops or places of interest that provide you with your essential amenities. </p>		
      <!-- Main Map -->
        <div class="jumbotron">
          <div id="map-canvas"></div>
        </div>

			  
	  <!-- Footer -->
	  <?php include 'IncludeFiles/Footer.php';?>
	  
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-hRwn4WF9SjbtYY7tjezXRVYOePfH3tY&sensor=true"></script>
    <script src="http://www.geoplugin.net/javascript.gp"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/core.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true&libraries=places"></script>
    <script>
        var map;
		var infowindow;

		function initialize() {
			var current = new google.maps.LatLng(geoplugin_latitude(), geoplugin_longitude());

				map = new google.maps.Map(document.getElementById('map-canvas'), {
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				center: current,
				zoom: 15
					});

			var request = {
				location: current,
				radius: 700,
				types: ['food']
					};

			infowindow = new google.maps.InfoWindow();
			var service = new google.maps.places.PlacesService(map);
			service.nearbySearch(request, callback);
		}

		function callback(results, status) {
			if (status == google.maps.places.PlacesServiceStatus.OK) {
				for (var i = 0; i < results.length; i++) {
					createMarker(results[i]);
				}
			}
		}

		function createMarker(place) {
			var placeLoc = place.geometry.location;
			var marker = new google.maps.Marker({
			map: map,
			position: place.geometry.location
				});
		
			google.maps.event.addListener(marker, 'click', function() {
			infowindow.setContent(place.name);
			infowindow.open(map, this);
				});
		}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>