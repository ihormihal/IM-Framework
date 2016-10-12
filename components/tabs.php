<div id="tabs" class="navbar-target"></div>
<section class="section pt1 pb1">
    <div class="container">
        <h2 class="text-center up h2 mb1">Tabs Horizontal <a class="show-code" href="#tabsh-code"><i class="fa fa-code"></i></a></h2>
    </div>
    <div class="container mb2">
        <ul class="tab-control nav nav-inline" data-target="#tabs-horizontal">
            <li class="active"><a class="ripple" href="javascript:void(0)">Tab 1</a></li>
            <li><a class="ripple" href="javascript:void(0)">Tab 2</a></li>
            <li><a class="ripple" href="javascript:void(0)">Tab 3</a></li>
        </ul>
        <div class="clear"></div>
        <div class="tab-content" id="tabs-horizontal">
            <div class="tab fade active in">
                <div class="box">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="tab fade">
                <div class="box">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </div>
            </div>
            <div class="tab fade">
                <div class="box">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hidden" id="tabsh-code">
<?php
$code =
'<ul class="tab-control nav nav-inline" data-target="#tabs-horizontal">
    <li class="active"><a class="ripple" href="javascript:void(0)">Tab 1</a></li>
    <li><a class="ripple" href="javascript:void(0)">Tab 2</a></li>
    <li><a class="ripple" href="javascript:void(0)">Tab 3</a></li>
</ul>
<div class="clear"></div>
<div class="tab-content" id="tabs-horizontal">
    <div class="tab fade active in">
        <div class="box">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </div>
    <div class="tab fade">
        <div class="box">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        </div>
    </div>
    <div class="tab fade">
        <div class="box">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
    </div>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>

<section class="section pt1 pb1">
    <div class="container">
        <h2 class="text-center up h2 mb1">Tabs Vertical <a class="show-code" href="#tabsv-code"><i class="fa fa-code"></i></a></h2>
    </div>
    <div class="container mb2">
        <div class="row">
            <div class="col-md-2">
                <ul class="tab-control nav nav-col" data-target="#tabs-vertical">
                    <li class="active"><a class="ripple" href="javascript:void(0)">Tab 1</a></li>
                    <li><a class="ripple" href="javascript:void(0)">Tab 2</a></li>
                    <li><a class="ripple" href="javascript:void(0)">Tab 3</a></li>
                </ul>
            </div>
            <div class="col-md-10">
                <div class="tab-content" id="tabs-vertical">
                    <div class="tab fade active in">
                        <div class="box">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    <div class="tab fade">
                        <div class="box">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>
                    </div>
                    <div class="tab fade">
                        <div class="box">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hidden" id="tabsv-code">
<?php
$code =
'<div class="row">
    <div class="col-md-2">
        <ul class="tab-control nav nav-col" data-target="#tabs-vertical">
            <li class="active"><a class="ripple" href="javascript:void(0)">Tab 1</a></li>
            <li><a class="ripple" href="javascript:void(0)">Tab 2</a></li>
            <li><a class="ripple" href="javascript:void(0)">Tab 3</a></li>
        </ul>
    </div>
    <div class="col-md-10">
        <div class="tab-content" id="tabs-vertical">
            <div class="tab fade active in">
                <div class="box">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            <div class="tab fade">
                <div class="box">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                    eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                </div>
            </div>
            <div class="tab fade">
                <div class="box">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</div>';
echo '<pre><code class="lang-html">'.htmlspecialchars($code).'</code></pre>';
?>
</div>