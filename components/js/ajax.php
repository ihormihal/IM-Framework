<section class="section pt1 pb1">
	<div class="container">
		<h2 class="text-center up h2 mb1">AJAX Button</h2>
		<h3 class="dark">Send ajax request on click</b></h3>
		<p><b>_btn_loading.scss</b> and <b>jQuery toastr plugin</b> is optional</p>
	</div>
	<div class="container">
		<a class="btn btn-mt btn-primary btn-loading ajax-link"
			href="server/response.json"
			data-filter="kiev"
		>AJAX Link</a>
	</div>
</section>

<section class="section pt1 pb1">
	<div class="container">
		<h2 class="text-center up h2 mb1">AJAX Nav</h2>
		<h3 class="dark">Load html content on click</b></h3>
	</div>
	<div class="container mt2">
		<div class="row">
			<div class="col-md-3">
				<nav>
					<ul class="nav nav-col aside-nav ajax-nav" data-target="#ajax-content">
						<li class="active"><a href="server/data/content-1.html" class="ripple">Page 1</a></li>
						<li><a href="server/data/content-2.html" class="ripple">Page 2</a></li>
						<li><a href="server/data/content-3.html" class="ripple">Page 3</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-md-6">
				<div id="ajax-content" class="loader"></div>
			</div>
			<div class="col-md-3">
				<nav>
					<ul class="nav nav-col nav-right aside-nav ajax-nav" data-target="#ajax-content">
						<li class="active"><a href="server/data/content-1.html" class="ripple">Page 1</a></li>
						<li><a href="server/data/content-2.html" class="ripple">Page 2</a></li>
						<li><a href="server/data/content-3.html" class="ripple">Page 3</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</section>