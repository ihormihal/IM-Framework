<?php $h1 = 'IM Images Upload'; ?>

<div class="container">
  <h2 class="text-center h1 mt1"><?php echo $h1; ?></h2>
</div>

<section>
  <div class="container pt2 pb2">

    <?php 
      // $images = [
      //   [
      //     'id' => 1,
      //     'src' => 'server/images-controller/uploads/image.jpg',
      //     'thumb' => 'server/images-controller/uploads/image.jpg'
      //   ]
      // ];

      $images = [];

      $uploaddir = 'server/images-controller/uploads/';
      foreach(glob($uploaddir.'*') as $key => $filename){
        $images[] = [
          'id' => $key,
          'src' => $uploaddir.basename($filename),
          'thumb' => $uploaddir.basename($filename)
        ];
      }
    ?>

    <form action="" name="form">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb1">Single Image Upload<a class="show-code" href="#single-img-upload-code"> <i class="fa fa-code"></i></a></h2>
          <!-- <upload-images
            template="app/modules/templates/upload-image.html"
            url="server/images-controller/upload.php"
            delete="server/images-controller/delete.php"
            name="image"
            input='<?= json_encode($images[0]); ?>'
            output="json_image"
            ng-model="object_image"
            title="Добавить фото">
          </upload-images> -->
          <pre>{{object_image|json}}</pre>
        </div>
        <div class="col-md-6">
          <h2 class="mb1">Multiple Image Upload<a class="show-code" href="#multiple-img-upload-code"> <i class="fa fa-code"></i></a></h2>
          
          <upload-images
            template="assets/app/modules/templates/upload-images.html"
            url="server/images-controller/upload.php"
            delete="server/images-controller/delete.php"
            name="image"
            input='<?= json_encode($images); ?>'
            output="json_images"
            ng-model="object_images"
            multiple="true"
            title="Добавить фото"
          >
          </upload-images>
          <pre>{{object_images|json}}</pre>
        </div>
      </div>
    </form>
  </div>
</section>

<div class="hidden" id="single-img-upload-code">
<?php
$code =
'';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>

<div class="hidden" id="multiple-img-upload-code">
<?php
$code =
'<upload-images
  template="assets/app/modules/templates/upload-images.html"
  url="server/images-controller/upload.php"
  delete="server/images-controller/delete.php"
  name="image"
  input="<?= json_encode($images); ?>"
  output="json_images"
  ng-model="object_images"
  multiple="true"
  title="Добавить фото"
>
</upload-images>';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>