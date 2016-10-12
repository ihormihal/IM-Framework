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
                <h1 class="white">IM Images Upload</h1>
              </div>
              <div class="col-md-6">
                <ul class="breadcrumbs white lh1 right-md">
                  <li><a href="http://mycode.in.ua/">MyCode</a></li>
                  <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                  <li>IM Images Upload</li>
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

      <section>
        <div class="container pt2 pb2">

          <form action="" name="form">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mb1">Single Image Upload<a class="show-code" href="#single-img-upload-code"> <i class="fa fa-code"></i></a></h2>
                <upload-images
                  template="app/modules/templates/upload-image.html"
                  url="http://mycode.in.ua/app/upload.php"
                  name="pass_photo"
                  input='server/uploads/image.jpg'
                  output="form.files"
                  title="Добавить фото">
                </upload-images>
              </div>
              <div class="col-md-6">
                <h2 class="mb1">Multiple Image Upload<a class="show-code" href="#multiple-img-upload-code"> <i class="fa fa-code"></i></a></h2>
                <upload-images
                  template="app/modules/templates/upload-images.html"
                  url="http://mycode.in.ua/app/upload.php"
                  name="pass_photo"
                  input='["server/uploads/image.jpg"]'
                  output="form.files"
                  multiple="true"
                  title="Добавить фото">
                </upload-images>
              </div>
            </div>
          </form>



          </div>
        </section>

    </main>

<div class="hidden" id="single-img-upload-code">
<?php
$code =
'<upload-images
  template="app/modules/templates/upload-image.html"
  url="http://mycode.in.ua/app/upload.php"
  name="photo"
  input="server/uploads/image.jpg"
  output="form.files"
  title="Добавить фото">
</upload-images>';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>

<div class="hidden" id="multiple-img-upload-code">
<?php
$code =
'<upload-images
  template="app/modules/templates/upload-images.html"
  url="http://mycode.in.ua/app/upload.php"
  name="pass_photo"
  input=\'["server/uploads/image.jpg"]\'
  output="form.files"
  multiple="true"
  title="Добавить фото">
</upload-images>';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>

</div>

    <footer>
    </footer>
</body>
</html>