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
    <!-- Angular APP -->
    <?php include 'components/react-head.php'; ?>
</head>

<body>
    <header>
        <?php include 'components/elements/navbar.php'; ?>
        <section class="light-bg pt2 pb2 cover" style="background-image: url(design/images/background.jpg);">
            <div class="container wide">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="white">ReactJS</h1>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs white lh1 right-md">
                            <li><a href="http://mycode.in.ua/">MyCode</a></li>
                            <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                            <li>ReactJS components</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
    <?php include 'components/'.$component.'.php'; ?>
    </main>
    
    <script src="design/js/build.js" type="text/javascript"></script>
</body>

</html>
