<div id="parallax" class="navbar-target"></div>
<div class="container">
  <h2 class="text-center up h2 mb1">Parallax <a class="show-code" href="#parallax-code"><i class="fa fa-code"></i></a></h2>
</div>

<section class="pt4 pb4 shadow-inset parallax" data-speed="0.3" data-image="assets/images/background.jpg">
  <div class="container">
    <div class="div white">
      <h1 class="mb1 huge thin">Parallax</h1>
      <h2 class="mb2">This is parllax section</h2>
      <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-mt btn-primary"><i class="fa fa-sun-o"></i>First Button</a>
        <a href="javascript:void(0)" class="btn btn-mt btn-danger">Second Button</a>
      </div>
    </div>
  </div>
</section>

<div class="hidden" id="parallax-code">
<?php
$code =
'<section class="pt4 pb4 shadow-inset parallax" data-speed="0.3" data-image="assets/images/background.jpg">
  <div class="container">
    <div class="div white">
      <h1 class="mb1 huge thin">Parallax</h1>
      <h2 class="mb2">This is parllax section</h2>
      <div class="btn-group">
        <a href="javascript:void(0)" class="btn btn-primary btn-mt"><i class="fa fa-sun-o"></i>First Button</a>
        <a href="javascript:void(0)" class="btn btn-danger btn-mt">Second Button</a>
      </div>
    </div>
  </div>
</section>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>