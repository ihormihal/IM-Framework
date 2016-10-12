<div id="carousel" class="navbar-target"></div>
<div class="container">
  <h2 class="text-center up h2 mb1">OWL Carousel <a class="show-code" href="#carousel1-code"><i class="fa fa-code"></i></a></h2>
</div>

<section class="section pt2 pb2 dark-bg">
  <div class="container">
    <div class="row"><!-- important -->
      <div class="carousel" data-navigation="true" data-pagination="true" data-scrollPerPage="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
        <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="box">
          <div class="card-image shadow-2 shadow-3-hover">
            <a href="javascript:void(0)">
              <div class="image hover-scale">
                <img src="design/images/400x225.jpg" alt="">
              </div>
              <div class="box content">
                <h3 class="white">The title <?php echo $i; ?></h3>
              </div>
            </a>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </div>
</section>

<div class="hidden" id="carousel1-code">
<?php
$code =
'<div class="carousel" data-navigation="true" data-pagination="true" data-scrollPerPage="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
  <!-- repeat -->
  <div class="box">
    <div class="card-image shadow-2 shadow-3-hover">
      <a href="javascript:void(0)">
        <div class="image hover-scale">
          <img src="design/images/400x225.jpg" alt="">
        </div>
        <div class="box content">
          <h3 class="white">The title 1</h3>
        </div>
      </a>
    </div>
  </div>
  <!-- /repeat -->
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

<section class="section pt2 pb2 light-bg">
  <div class="container">
    <h2 class="text-center up h2 mb1">Style #2 <a class="show-code" href="#carousel2-code"><i class="fa fa-code"></i></a></h2>
  </div>
  <div class="container">
    <div class="row"><!-- important -->
      <div class="carousel nav-dark aside-nav" data-navigation="true" data-pagination="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
        <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="box">
          <div class="card-image shadow-2 shadow-3-hover">
            <a href="javascript:void(0)">
              <div class="image hover-scale">
                <img src="design/images/400x225.jpg" alt="">
              </div>
              <div class="box content">
                <h3 class="white">The title <?php echo $i; ?></h3>
              </div>
            </a>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </div>
</section>

<div class="hidden" id="carousel2-code">
<?php
$code =
'<div class="carousel nav-dark aside-nav" data-navigation="true" data-pagination="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
  <!-- repeat -->
  <div class="box">
    <div class="card-image shadow-2 shadow-3-hover">
      <a href="javascript:void(0)">
        <div class="image hover-scale">
          <img src="design/images/400x225.jpg" alt="">
        </div>
        <div class="box content">
          <h3 class="white">The title 1</h3>
        </div>
      </a>
    </div>
  </div>
  <!-- /repeat -->
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

<section class="section pt2 pb2 lighten-bg">
  <div class="container">
    <h2 class="text-center up h2 mb1">Style #3 <a class="show-code" href="#carousel3-code"><i class="fa fa-code"></i></a></h2>
  </div>
  <div class="container">
    <div class="row"><!-- important -->
      <div class="carousel nav-dark bottom-nav" data-navigation="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
        <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="box">
          <div class="card-image shadow-2 shadow-3-hover">
            <a href="javascript:void(0)">
              <div class="image hover-scale">
                <img src="design/images/400x225.jpg" alt="">
              </div>
              <div class="box content">
                <h3 class="white">The title <?php echo $i; ?></h3>
              </div>
            </a>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </div>
</section>

<div class="hidden" id="carousel3-code">
<?php
$code =
'<div class="carousel nav-dark bottom-nav" data-navigation="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
  <!-- repeat -->
  <div class="box">
    <div class="card-image shadow-2 shadow-3-hover">
      <a href="javascript:void(0)">
        <div class="image hover-scale">
          <img src="design/images/400x225.jpg" alt="">
        </div>
        <div class="box content">
          <h3 class="white">The title 1</h3>
        </div>
      </a>
    </div>
  </div>
  <!-- /repeat -->
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

<section class="section pt2 pb2 bright-bg">

  <div class="container">
    <h2 class="text-center up h2 mb1">Style #4 <a class="show-code" href="#carousel4-code"><i class="fa fa-code"></i></a></h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-10"><h2>Custom nav</h2></div>
      <div class="col-md-2">
        <div class="owl-custom-nav text-right" data-target="#custom-nav-carousel">
          <div class="btn btn-flat owl-prev"><i class="fa fa-angle-left"></i></div>
          <div class="btn btn-flat owl-next"><i class="fa fa-angle-right"></i></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row"><!-- important -->
      <div id="custom-nav-carousel" class="carousel nav-dark" data-pagination="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
        <?php for ($i = 1; $i <= 12; $i++): ?>
        <div class="box">
          <div class="card-image shadow-2 shadow-3-hover">
            <a href="javascript:void(0)">
              <div class="image hover-scale">
                <img src="design/images/400x225.jpg" alt="">
              </div>
              <div class="box content">
                <h3 class="white">The title <?php echo $i; ?></h3>
              </div>
            </a>
          </div>
        </div>
        <?php endfor ?>
      </div>
    </div>
  </div>
</section>

<div class="hidden" id="carousel4-code">
<?php
$code =
'<div class="container">
  <div class="row">
    <div class="col-md-10"><h2>Custom nav</h2></div>
    <div class="col-md-2">
      <div class="owl-custom-nav text-right" data-target="#custom-nav-carousel">
        <div class="btn-mt flat owl-prev"><i class="fa fa-angle-left"></i></div>
        <div class="btn-mt flat owl-next"><i class="fa fa-angle-right"></i></div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row"><!-- important -->
    <div id="custom-nav-carousel" class="carousel nav-dark" data-pagination="true" data-xl="4" data-md="3" data-sm="2" data-xs="1">
      <!-- repeat -->
      <div class="box">
        <div class="card-image shadow-2 shadow-3-hover">
          <a href="javascript:void(0)">
            <div class="image hover-scale">
              <img src="design/images/400x225.jpg" alt="">
            </div>
            <div class="box content">
              <h3 class="white">The title 1</h3>
            </div>
          </a>
        </div>
      </div>
      <!-- /repeat -->
    </div>
  </div>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>