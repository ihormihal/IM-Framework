<div id="section3"></div>
<section>
  <div class="container mt2 mb4">
    <h2 class="text-center up">Sample section #3 <a class="show-code" href="#section3-code"><i class="fa fa-code"></i></a></h2>
  </div>
  <div class="container full side-by-side">
    <?php for ($i = 1; $i <= 4; $i++): ?>
    <div class="row condensed">
      <div class="col-md-6">
        <div class="cell background" style="background-image: url(assets/images/img_<?php echo $i;?>.png);">
          <div class="p2 text-center">
            <h4 class="mb2">Step <?php echo $i;?>:</h4>
            <h2 class="mb2">Lorem ipsum dolor</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="cell image hover-scale">
          <img src="assets/images/950x520.jpg" alt="">
        </div>
      </div>
    </div>
    <?php endfor ?>
  </div>
</section>

<div class="hidden" id="section3-code">
<?php
$code =
'<div class="container full side-by-side">
  <!-- repeat -->
  <div class="row condensed">
    <div class="col-md-6">
      <div class="cell background" style="background-image: url(assets/images/img_1.png);">
        <div class="p2 text-center">
          <h4 class="mb2">Step 1:</h4>
          <h2 class="mb2">Lorem ipsum dolor</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="cell image hover-scale">
        <img src="assets/images/950x520.jpg" alt="">
      </div>
    </div>
  </div>
  <!-- /repeat -->
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>