<div id="grid" class="navbar-target"></div>
<section class="section pt1 pb1">
	<div class="container">
        <h2 class="text-center up h2 mb1">Adaptive Grid</h2>
    </div>
    <div class="container full mb2">
    	<div class="box text-center darken-bg darken h5">
    		<b>xs</b> <i class="fa fa-angle-left"></i>
    		361  <i class="fa fa-angle-left"></i> <b>sm</b> <i class="fa fa-angle-left"></i>
    		769  <i class="fa fa-angle-left"></i> <b>md</b> <i class="fa fa-angle-left"></i>
    		1008 <i class="fa fa-angle-left"></i> <b>lg</b> <i class="fa fa-angle-left"></i>
            1264 <i class="fa fa-angle-left"></i> <b>xl</b> <i class="fa fa-angle-left"></i>
    		1904 <i class="fa fa-angle-left"></i> <b>xxl</b>
    	</div>
    </div>

    <div class="container mb1">
        <div class="grey-bg"><h2 class="text-center up white h2 pt1 pb1">container <span class="yellow">1200px - 32px</span></h2></div>
    </div>

    <div class="container wide mb1">
        <div class="grey-bg"><h2 class="text-center up white h2 pt1 pb1">container wide <span class="yellow">96% - 32px</span></h2></div>
    </div>

    <div class="container fit mb1">
        <div class="grey-bg"><h2 class="text-center up white h2 pt1 pb1">container fit <span class="yellow">100% - 64px (32px on mobile)</span></h2></div>
    </div>

    <div class="container full mb1">
        <div class="grey-bg"><h2 class="text-center up white h2 pt1 pb1">container full <span class="yellow">100%</span></h2></div>
    </div>

    <div class="container mt4 mb1">
        <h2 class="text-center up h2">Grid types</h2>
    </div>

    <div class="container">
        <div class="box white grey-bg text-center">class="row"</div>
        <div class="row">
        	<?php for ($i = 1; $i <= 6; $i++): ?>
        		<div class="col-md-4 col-sm-6">
                    <div class="box white light-blue-bg">
                        column #<?php echo $i; ?>
                    </div>
                </div>
        	<?php endfor ?>
        </div>
    </div>

    <div class="container">
        <div class="box white grey-bg text-center">class="row" > class="col-md-ten-2"</div>
        <div class="row">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <div class="col-md-ten-2">
                    <div class="box white light-blue-bg">
                        column #<?php echo $i; ?>
                    </div>
                </div>
            <?php endfor ?>
        </div>
    </div>

    <div class="container">
        <div class="box white grey-bg text-center">class="row thin"</div>
        <div class="row thin">
            <?php for ($i = 1; $i <= 6; $i++): ?>
        		<div class="col-md-4 col-sm-6">
                    <div class="box white light-blue-bg">
                        column #<?php echo $i; ?>
                    </div>
                </div>
        	<?php endfor ?>
        </div>
    </div>

    <div class="container">
        <div class="box white grey-bg text-center">class="row condensed"</div>
        <div class="row condensed">
            <?php for ($i = 1; $i <= 6; $i++): ?>
        		<div class="col-md-4 col-sm-6">
                    <div class="box white light-blue-bg">
                        column #<?php echo $i; ?>
                    </div>
                </div>
        	<?php endfor ?>
        </div>
    </div>

    <div class="container">
        <div class="box white grey-bg text-center">class="row tile"</div>
        <div class="row tile">
            <?php for ($i = 1; $i <= 6; $i++): ?>
        		<div class="col-md-4 col-sm-6">
                    <div class="box white light-blue-bg">
                        column #<?php echo $i; ?>
                    </div>
                </div>
        	<?php endfor ?>
        </div>
    </div>

    <div class="container">
        <div class="box white grey-bg text-center">class="row thin tile"</div>
        <div class="row thin tile">
            <?php for ($i = 1; $i <= 6; $i++): ?>
        		<div class="col-md-4 col-sm-6">
                    <div class="box white light-blue-bg">
                        column #<?php echo $i; ?>
                    </div>
                </div>
        	<?php endfor ?>
        </div>
    </div>
</section>

<section class="section mt1 mb1">
	<div class="container">
        <h2 class="text-center up h2 mb1">Special classes for adaptive markup</h2>
        <p class="text-center red">Note: you need to resize this window!</p>
    </div>
	<div class="container">
		<div class="hide-md-under mb1">
			<div class="box dark-bg white">class="hide-md-under" <span class="yellow">hidden if width &lt;= md</span></div>
		</div>
		<div class="hide-md-over mb1">
			<div class="box dark-bg white">class="hide-md-over" <span class="yellow">hidden if width &gt;= md</span></div>
		</div>
		<div class="show-md-under mb1">
			<div class="box dark-bg white">class="show-md-under" <span class="yellow">displayed if width &lt;= md</span></div>
		</div>
		<div class="show-md-over mb1">
			<div class="box dark-bg white">class="show-md-over" <span class="yellow">displayed if width &gt;= md</span></div>
		</div>

		<div class="box mb1 brown-bg white text-md-right">
			class="text-md-right" <span class="yellow">align text to right if width &gt;= md</span>
		</div>
		<div class="box mb1 brown-bg white text-md-center">
			class="text-md-center" <span class="yellow">align text to center if width &lt;= md</span>
		</div>

		<div class="mb1 grey-bg white">
			<div class="box purple-bg right-md" style="max-width: 50%;">
				class="right-md" <span class="yellow">right floating if width &gt;= md</span>
			</div>
			<div class="clear"></div>
		</div>
		<div class="mb1 grey-bg white">
			<div class="box purple-bg center-md" style="max-width: 50%;">
				class="center-md" <span class="yellow">align block to center if width &lt;= md</span>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</section>