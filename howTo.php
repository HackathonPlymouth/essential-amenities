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
	<style>#iframe_a{overflow:hidden;}</style>
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
            <li><a href="Essentials.php">Essentials</a></li>
			<li><a href="Crime.php">Crime Watch App</a></li>
            <li><a href="Services.php">Services</a></li>
            <li class="active"><a href="howTo.php">How To?</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
		<div class="row">
			<div class="col-md-10">
				<h1>Problem?</h1><br>
				<h4><small>Confused about tasks in your home?</small></h4>
				<h4><small>Enter your problem in the search bar below...</small></h4>
			</div>	
			<div class="col-md-2">
				<img src="img/questionMark.jpg" width="140" height="140" class="img-circle">
			</div>
		</div>
		<div class="row">
                 <div class="form-group">
				  <div class="col-md-12">
					<br><input type="text" class="form-control input-lg" id="problemInput" placeholder="Enter your problem..."><br><a type="button" id="Go" class="btn btn-primary btn-lg">Go!</a>
				  </div>	
                 </div>
		</div>
		<div class="row">
			<iframe id="iframe_a" name="iframe_a" width="1050" height="700" frameborder="0"></iframe>
		</div>
      </div>
	  
	  	  
	  <!-- Footer -->
	  <?php include 'IncludeFiles/Footer.php';?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		var searchValue;
		$("#Go").click(function(e){
			e.preventDefault();
			searchValue = $('#problemInput').val();
			searchValue = searchValue.replace(/\ /g,'+');
			searchValue = "http://www.wikihow.com/Special:GoogSearch?cx=008953293426798287586%3Amr-gwotjmbs&cof=FORID%3A10&ie=UTF-8&q="+searchValue+"&siteurl=www.wikihow.com%2FMain-Page";
			$("#iframe_a").attr("src",searchValue);
		});
	
	</script> 
  </body>
</html>