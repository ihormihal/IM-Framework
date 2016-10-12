<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include 'components/head.php'; ?>
    </head>
    <body>
        <header>
            <?php include 'components/navbar.php'; ?>
            <section class="light-bg pt2 pb2 cover relative" style="background-image: url(design/images/header.jpg);">
              <div class="container wide">
                <div class="row">
                  <div class="col-md-6">
                    <h1 class="white">Framework</h1>
                  </div>
                  <div class="col-md-6">
                    <ul class="breadcrumbs white lh1 right-md">
                      <li><a href="http://mycode.in.ua/">MyCode</a></li>
                      <li><span>Framework</span></li>
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
        <?php include 'components/grid.php'; ?>
        <?php include 'components/general.php'; ?>
        <?php include 'components/colors.php'; ?>
        <?php include 'components/text.php'; ?>

        </main>
        <!-- Google Icons -->
        <!-- https://design.google.com/icons/ -->
    </body>
</html>