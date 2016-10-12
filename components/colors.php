<div id="colors" class="navbar-target"></div>
<?php
$colors = array('black','darken','dark','dark-grey','grey','light-grey','light','lighten','bright','white');
$material_colors = array(
    'blue-grey','green','light-green','lime',
    'amber','yellow','orange','deep-orange','brown',
    'red','pink',
    'purple','deep-purple','indigo','blue','light-blue','cyan','teal'
    );
?>
<section class="section pt1 pb1">
    <div class="container">
        <h2 class="text-center up h2 mb1">Colors</h2>
    </div>
    <div class="container">
        <div class="row condensed">
        	<?php foreach ($colors as $color): ?>
        		<div class="col-md-4">
                    <div class="box <?php if($color == 'white'){echo 'grey';}else{echo 'white';} echo ' '.$color; ?>-bg">
                        <?php echo $color;?>
                    </div>
                </div>
        	<?php endforeach ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <h2 class="text-center up h2 mb1">Material Colors</h2>
    </div>
    <div class="container">
        <div class="row condensed">
        	<?php foreach ($material_colors as $color): ?>
        		<div class="col-md-4">
                    <div class="box white <?php echo $color; ?>-bg">
                        <?php echo $color;?>
                    </div>
                </div>
        	<?php endforeach ?>
        </div>
    </div>
</section>

<section class="section pt2 pb2">
    <div class="container">
        <h2 class="text-center up h2 mb1">Color Classes</h2>
        <table class="full mb2">
            <tr>
                <td>Color for text</td>
                <td><span class="label brown-bg">.{colorName}</span></td>
            </tr>
            <tr>
                <td>Background color</td>
                <td><span class="label brown-bg">.{colorName}-bg</span></td>
            </tr>
            <tr>
                <td>Border color</td>
                <td><span class="label brown-bg">.{colorName}-border</span></td>
            </tr>
            <tr>
                <td>Color for text on hover</td>
                <td><span class="label brown-bg">.hover-{colorName}</span></td>
            </tr>
            <tr>
                <td>Background color on hover</td>
                <td><span class="label brown-bg">.hover-{colorName}-bg</span></td>
            </tr>
            <tr>
                <td>Relative background color on hover</td>
                <td><span class="label brown-bg">.hover-bg-lighten</span>&nbsp;<span class="label brown-bg">.hover-bg-darken</span></td>
            </tr>
        </table>
    </div>
    <div class="container">
        <div class="row condensed">
            <div class="col-md-4">
                <div class="box white green-bg hover-bg-darken">
                    class="white green-bg hover-bg-darken"
                </div>
            </div>
            <div class="col-md-4">
                 <div class="box white blue-bg hover-bg-lighten">
                    class="white blue-bg hover-bg-lighten"
                </div>
            </div>
            <div class="col-md-4">
                <div class="box white indigo-bg hover-black-bg">
                    class="white indigo-bg hover-black-bg"
                </div>
            </div>
        </div>
    </div>
</section>