<?php
if(!empty($_GET['component'])){
    $component = $_GET['component'];
}else{
    header("Location: /");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php'; ?>
    </head>
    <body>
        <header>
            <?php include 'components/navbar.php'; ?>
            <section class="light-bg pt2 pb2 cover relative" style="background-image: url(assets/images/header.jpg);">
                <div class="container wide">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="white">JS components</h1>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumbs white lh1 right-md">
                                <li><a href="http://mycode.in.ua/">MyCode</a></li>
                                <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                                <li>JS components</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="floating-button">
                    <a href="#" class="btn-fl pink-bg hover-bg-darken ripple" title="Propose additions"><i class="mti">add</i></a>
                </div>
            </section>
        </header>
        <main>
        <?php include 'components/'.$component.'.php'; ?>
        </main>
    </body>
</html>