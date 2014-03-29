$(function () {
	
	if ($('#search-postcode').length) {
		$('#search-postcode').on('click', function(e) {
			e.preventDefault();

			var postcode = $("#postcode").val();

			var mapOptions = {
	            center: new google.maps.LatLng(geoplugin_latitude(), geoplugin_longitude()),
	            zoom: 12,
	            mapTypeId: google.maps.MapTypeId.ROADMAP
	          };
	          var map = new google.maps.Map(document.getElementById("map-canvas"),
	              mapOptions);
		});
	}

})