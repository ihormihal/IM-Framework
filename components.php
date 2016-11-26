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

        <?php include 'components/buttons.php'; ?>
        <?php include 'components/form.php'; ?>
        <?php include 'components/parallax.php'; ?>
        <?php include 'components/cards.php'; ?>
        <?php include 'components/slider.php'; ?>
        <?php include 'components/carousel.php'; ?>
        <?php include 'components/datatable.php'; ?>
        <?php include 'components/tabs.php'; ?>
        <?php include 'components/section1.php'; ?>
        <?php include 'components/section2.php'; ?>
        <?php include 'components/section3.php'; ?>

        </main>
        <footer>
        <?php include 'components/footer.php'; ?>
        </footer>
        <!-- Google Icons -->
        <!-- https://design.google.com/icons/ -->
    </body>
</html>