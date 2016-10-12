<!DOCTYPE html>
<html lang="en" class="admin">
	<head>
	<?php include 'components/head.php'; ?>
	<?php include 'components/ng-head.php'; ?>
	</head>
	<body ng-app="app">
		<header>
			<?php include 'components/navbar.php'; ?>
		</header>
		<main class="collumns" ng-controller="mainController">

			<div class="col-aside dark-bg">
				<?php include 'components/admin/menu.php'; ?>
			</div>

			<div class="col-main">
				
				<section class="pt1 pb1 white-bg">
					<div class="container wide">
						<ul class="breadcrumbs">
							<li><a href="#">Main</a></li>
							<li><a href="#">Parent page</a></li>
							<li>Current Page</li>
						</ul>
					</div>
				</section>

				<section class="pt1 pb1 orange-bg">
					<div class="container wide">
						<span class="thin">Статус:</span> Новый документ
					</div>
				</section>

				<div class="container wide pt2">

					<form action="">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Alias <sup>*</sup></label>
									<input class="default full" type="text" placeholder="Alias" reguired>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label>Author <sup>*</sup></label>
									<select class="default full" disabled>
										<option value="0">developer</option>
										<option value="1">user</option>
									</select>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group no-label">
									<div class="checkbox">
										<label>
											<input type="checkbox" value="1">
											<span class="check"></span>
											Published
										</label>
									</div>
								</div>
							</div>
						</div>

						<div class="mt2"></div>

						<section class="images">
							<!-- <div class="row tile">
								<?php for ($i = 1; $i <= 8; $i++): ?>
								<div class="col-md-2">
									<a rel="gallery" href="http://placehold.it/500x500" class="fancybox">
										<div class="image hover-scale">
											<img src="http://placehold.it/200x200" alt="">
										</div>
									</a>
								</div>
								<?php endfor ?>
							</div> -->
							<upload-images
								template="app/modules/templates/upload-images-mini.html"
								url="server/upload.php"
								delete="server/delete-uploaded.php"
								name="pass_photo"
								input='["content/500x500.png"]'
								output="form.files"
								multiple="true"
								title="Добавить фото"
							>
							</upload-images>
						</section>

						<div class="mt2"></div>
						
						<ul class="tab-control nav nav-inline" data-target="#tabs-horizontal">
						    <li class="active"><a class="ripple" href="javascript:void(0)">Українська</a></li>
						    <li><a class="ripple" href="javascript:void(0)">Русский</a></li>
						    <li><a class="ripple" href="javascript:void(0)">English</a></li>
						</ul>
						<div class="clear"></div>
						<div class="tab-content" id="tabs-horizontal">
						    <div class="tab fade active in">
						    	<div class="mt1"></div>
						        <div class="form-group">
									<label>Title <sup>*</sup></label>
									<input class="default full" type="text" placeholder="Title" reguired>
								</div>
								<div class="form-group">
									<label>Description <sup>*</sup></label>
									<textarea class="full default" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label>Content <sup>*</sup></label>
									<textarea class="full default" rows="5"></textarea>
								</div>
						    </div>
						    <div class="tab fade">
						        <div class="mt1"></div>
						        <div class="form-group">
									<label>Title <sup>*</sup></label>
									<input class="default full" type="text" placeholder="Title" reguired>
								</div>
								<div class="form-group">
									<label>Description <sup>*</sup></label>
									<textarea class="full default" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label>Content <sup>*</sup></label>
									<textarea class="full default" rows="5"></textarea>
								</div>
						    </div>
						    <div class="tab fade">
						        <div class="mt1"></div>
						        <div class="form-group">
									<label>Title <sup>*</sup></label>
									<input class="default full" type="text" placeholder="Title" reguired>
								</div>
								<div class="form-group">
									<label>Description <sup>*</sup></label>
									<textarea class="full default" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label>Content <sup>*</sup></label>
									<textarea class="full default" rows="5"></textarea>
								</div>
						    </div>
						</div>

						<div class="mt2"></div>

						<div class="form-group">
							<button class="btn btn-mt btn-primary">Save</button>
						</div>
					</form>
				</div>
				

			</div>


		</main>
		<!-- <footer>
			<?php include 'components/footer.php'; ?>
		</footer> -->
		<!-- Google Icons -->
		<!-- https://design.google.com/icons/ -->
	</body>
</html>