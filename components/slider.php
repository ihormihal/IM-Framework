<div id="slider" class="navbar-target"></div>
<section class="section">
  <div class="container">
    <h2 class="text-center up h2 mb1">OWL Slider <a class="show-code" href="#owl-slider-code"><i class="fa fa-code"></i></a></h2>
  </div>
  <div class="slider" data-navigation="true" data-pagination="true">
    <div class="item">
      <img class="background" src="design/images/background.jpg" alt="">
      <div class="container white pt6 pb6 animated" data-animated="fadeInDown">
        <h1>Slide 1</h1>
        <h3>Slide subtitle</h3>
      </div>
    </div>
    <div class="item">
      <img class="background" src="design/images/background.jpg" alt="">
      <div class="container white pt6 pb6">
        <h1 class="animated" data-animated="fadeInDownBig">Slide 2</h1>
        <h2 class="animated" data-animated="fadeInRight">Slide subtitle</h2>
      </div>
    </div>
    <div class="item">
      <img class="background" src="design/images/background.jpg" alt="">
      <div class="container white pt6 pb6 animated" data-animated="fadeInUp">
        <h1>Slide 3</h1>
        <h3>Slide subtitle</h3>
      </div>
    </div>
  </div>
</section>
<div class="hidden" id="owl-slider-code">
<?php
$code =
'<div class="slider" data-navigation="true" data-pagination="true">
  <!-- repeat -->
  <div class="item">
    <img class="background" src="design/images/background.jpg" alt="">
    <div class="container white pt6 pb6">
      <h1 class="animated" data-animated="fadeInDownBig">Slide 2</h1>
      <h2 class="animated" data-animated="fadeInRight">Slide subtitle</h2>
    </div>
  </div>
  <!-- /repeat -->
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>