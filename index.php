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
            <li><a href="essentials.php">Essentials</a></li>
			<li><a href="Crime.php">Crime Watch App</a></li>
            <li><a href="Services.php">Services</a></li>
            <li><a href="HowTo.php">How To?</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

	  <h2>Welcome to Essential Amenities.</h2> 
<p>We are here to provide you help with essential every day tasks and other things that may be useful to your life.</p>
      <!-- Main Map -->

		<div class="col-md-12">
		<center>
			<video width="90%" height="700" controls>
			  <source src="img/Promo.mp4" type="video/mp4">
			</video>
		</center>
		</div><br><br><br><br>
	  
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
    <script>
      $(function() {
        function initialize() {
          var myLatlng = new google.maps.LatLng(geoplugin_latitude(), geoplugin_longitude());
          var mapOptions = {
            center: myLatlng,
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map(document.getElementById("map-canvas"),
              mapOptions);

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
      });
    </script>
  </body>
</html>