<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/head.php'; ?>
        <link href="design/css/styled.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php include 'components/navbar.php'; ?>
            <section class="light-bg pt2 pb2 cover relative" style="background-image: url(design/images/header.jpg);">
                <div class="container wide">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="white">Styled Elements</h1>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumbs white lh1 right-md">
                                <li><a href="http://mycode.in.ua/">MyCode</a></li>
                                <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                                <li>Styled</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="floating-button">
                    <a href="#" class="btn-fl pink-bg hover-bg-darken ripple" title="Propose additions"><i class="mti">add</i></a>
                </div>
            </section>
        </header>

        <?php include 'components/styled/buttons.php'; ?>
    </body>
</html>