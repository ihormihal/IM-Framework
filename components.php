<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'components/head.php'; ?>
    </head>
    <body>
        <header>
          <?php include 'components/elements/navbar.php'; ?>
          <section class="light-bg pt2 pb2 cover relative" style="background-image: url(design/images/header.jpg);">
            <div class="container wide">
              <div class="row">
                <div class="col-md-6">
                  <h1 class="white">Components</h1>
                </div>
                <div class="col-md-6">
                  <ul class="breadcrumbs white lh1 right-md">
                    <li><a href="http://mycode.in.ua/">MyCode</a></li>
                    <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                    <li>Components</li>
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

        <?php  
            if(!empty($_GET['component'])){
                $component = $_GET['component'];
                if($component == 'owl'){
                    include 'components/elements/slider.php';
                    include 'components/elements/carousel.php';
                }elseif($component == 'sections'){
                    include 'components/elements/section1.php';
                    include 'components/elements/section2.php';
                    include 'components/elements/section3.php';
                }else{
                    include 'components/elements/'.$component.'.php';
                }
            }else{
                include 'components/elements/buttons.php';
                include 'components/elements/form.php';
                include 'components/elements/parallax.php';
                include 'components/elements/tabs.php';
            }
        ?>

        </main>
        <footer>
        <?php include 'components/footer.php'; ?>
        </footer>
        <!-- Google Icons -->
        <!-- https://design.google.com/icons/ -->
    </body>
</html>