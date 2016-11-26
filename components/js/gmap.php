<script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyDt9wze3MCKr_lkQCXd-xETQBJJj1fI7ko" type="text/javascript"></script>
<section class="section pt1 pb1">

	<div class="container">
		<h2 class="text-center up h2 mb1">Gmap [Single point] <a class="show-code" href="#gmap-single"><i class="fa fa-code"></i></a></h2>
	</div>

	<div class="container">
		<div class="gmap single" data-point="52.3525, 24.0345" data-zoom="8"></div>
	</div>

	<!-- <div class="container mt2">
		<h2 class="text-center up h2 mb1">Gmap [Multiple points] <a class="show-code" href="#gmap-multiple"><i class="fa fa-code"></i></a></h2>
	</div>

	<div class="container">
		<div class="gmap multiple" 
			data-window-url="server/data/content-1.html" 
			data-points-url="server/data/map-points.json"
		></div>
	</div> -->

	<div class="container mt2">
		<h2 class="text-center up h2 mb1">AJAX Gmap [Multiple points with filters] <a class="show-code" href="#gmap-multiple"><i class="fa fa-code"></i></a></h2>
	</div>

	<div class="container">
		<form action="" id="map-filter">
			<div class="form-group btn-group">
				<a href="server/data/map-points.json" class="btn filter">All</a>
				<a href="server/data/map-point-1.json" class="btn filter">Kiev</a>
				<a href="server/data/map-point-2.json" class="btn filter">Zhitomir</a>
				<a href="server/data/map-point-3.json" class="btn filter">Cherkassy</a>
			</div>
		</form>
		<div id="ajax-map" class="gmap multiple" 
			data-window-url="server/data/content-1.html" 
			data-points-url="server/data/map-points.json"
			data-form-filter="#map-filter"
		></div>
	</div>
</section>