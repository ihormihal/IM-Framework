<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'components/head.php'; ?>
	<!-- Angular APP -->
	<?php include 'components/ng-head.php'; ?>
</head>

<body ng-app="app">
	<header>
		<?php include 'components/navbar.php'; ?>
		<section class="light-bg pt2 pb2 cover relative" style="background-image: url(design/images/header.jpg);">
			<div class="container wide">
				<div class="row">
					<div class="col-md-6">
						<h1 class="white">IM Angular Datatable</h1>
					</div>
					<div class="col-md-6">
						<ul class="breadcrumbs white lh1 right-md">
							<li><a href="http://mycode.in.ua/">MyCode</a></li>
							<li><a href="http://mycode.in.ua/framework/">Framework</a></li>
							<li>IM Datatable</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="floating-button">
				<a href="#" class="btn-fl pink-bg hover-bg-darken ripple" title="Propose additions"><i class="mti">add</i></a>
			</div>
		</section>
	</header>
	<main ng-controller="mainController">

		<?php $countries = json_decode(file_get_contents('app/data/countries.json'),true); ?>

		<?php include 'components/datatable/ajax-serverside.php'; ?>
		<?php include 'components/datatable/ajax-clientside.php'; ?>
		<?php include 'components/datatable/html-default.php'; ?>
		<?php include 'components/datatable/ajax-multiple.php'; ?>

	</main>

	<footer>
		<?php include 'components/footer.php'; ?>
	</footer>
</body>

</html>
