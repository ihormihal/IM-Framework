<div id="cards" class="navbar-target"></div>
<section class="section pt1 pb1">
    <div class="container">
        <h2 class="text-center up h2 mb1">Cards #1 <a class="show-code" href="#card1-code"><i class="fa fa-code"></i></a></h2>
    </div>
    <div class="container mb2">
        <div class="row tile">
            <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-4">
                <div class="card-image shadow-2 shadow-3-hover">
                    <a href="#">
                        <div class="image hover-scale">
                            <img src="design/images/400x225.jpg" alt="">
                        </div>
                        <div class="box content">
                            <h3 class="white">The title</h3>
                        </div>
                    </a>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </div>
<div class="hidden" id="card1-code">
<?php
$code =
'<div class="card-image shadow-2 shadow-3-hover">
    <a href="#">
        <div class="image hover-scale">
            <img src="design/images/400x225.jpg" alt="">
        </div>
        <div class="box content">
            <h3 class="white">The title</h3>
        </div>
    </a>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

    <div class="container">
        <h2 class="text-center up h2 mb1">Cards #2 <a class="show-code" href="#card2-code"><i class="fa fa-code"></i></a></h2>
    </div>
    <div class="container mb2">
        <div class="row tile">
            <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-4">
                <div class="card-image slide shadow-2 shadow-3-hover">
                    <a href="#">
                        <div class="image">
                            <img src="design/images/400x225.jpg" alt="">
                        </div>
                        <div class="box content">
                            <h3 class="title white">The title</h3>
                            <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </div>

<div class="hidden" id="card2-code">
<?php
$code =
'<div class="card-image slide shadow-2 shadow-3-hover">
    <a href="#">
        <div class="image">
            <img src="design/images/400x225.jpg" alt="">
        </div>
        <div class="box content">
            <h3 class="title white">The title</h3>
            <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </a>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

    <div class="container">
        <h2 class="text-center up h2 mb1">Cards #3 <a class="show-code" href="#card3-code"><i class="fa fa-code"></i></a></h2>
    </div>
    <div class="container mb2">
        <div class="row tile">
            <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="col-md-4">
                <div class="card-box shadow-2 shadow-3-hover">
                    <div class="header image hover-scale">
                        <img src="design/images/400x225.jpg" alt="title">
                    </div>
                    <div class="content">
                        <div class="box">
                            <h3 class="title">The title</h3>
                            <p class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="actions">
                            <a href="javascript:void(0)" class="btn btn-flat btn-primary ripple">Some action</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor ?>
        </div>
    </div>

<div class="hidden" id="card3-code">
<?php
$code =
'<div class="card-box shadow-2 shadow-3-hover">
    <div class="header image hover-scale">
        <img src="design/images/400x225.jpg" alt="title">
    </div>
    <div class="content">
        <div class="box">
            <h3 class="title">The title</h3>
            <p class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="actions">
            <a href="javascript:void(0)" class="btn btn-flat btn-primary ripple">Some action</a>
        </div>
    </div>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

    <div class="container">
        <h2 class="text-center up h2 mb1">Cards #4 <a class="show-code" href="#card4-code"><i class="fa fa-code"></i></a></h2>
    </div>

    <div class="container">
        <div class="card-row shadow-2 shadow-3-hover">
            <div class="row condensed">
                <div class="col-md-4 header">
                    <div class="image hover-scale">
                        <img src="design/images/400x225.jpg" alt="title">
                    </div>
                </div>
                <div class="col-md-8 content">
                    <div class="box">
                        <h3 class="title">The title</h3>
                        <p class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="actions">
                        <a href="javascript:void(0)" class="btn btn-flat btn-primary ripple">Some action</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="hidden" id="card4-code">
<?php
$code =
'<div class="card-row shadow-2 shadow-3-hover">
    <div class="row condensed">
        <div class="col-md-4 header">
            <div class="image hover-scale">
                <img src="design/images/400x225.jpg" alt="title">
            </div>
        </div>
        <div class="col-md-8 content">
            <div class="box">
                <h3 class="title">The title</h3>
                <p class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="actions">
                <a href="javascript:void(0)" class="btn btn-flat btn-primary ripple">Some action</a>
            </div>
        </div>
    </div>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>
</section>