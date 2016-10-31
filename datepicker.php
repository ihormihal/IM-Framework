<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>
    <!-- Angular APP -->
    <?php include 'components/ng-head.php'; ?>
</head>
<body ng-app="app">
    <header>
        <?php include 'components/navbar.php'; ?>
        <section class="light-bg pt2 pb2 cover relative" style="background-image: url(design/images/header.jpg);">
          <div class="container wide">
            <div class="row">
              <div class="col-md-6">
                <h1 class="white">IM Datepicker</h1>
              </div>
              <div class="col-md-6">
                <ul class="breadcrumbs white lh1 right-md">
                  <li><a href="http://mycode.in.ua/">MyCode</a></li>
                  <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                  <li>IM Datepicker</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="floating-button">
            <a href="#" class="btn-fl pink-bg hover-bg-darken ripple" title="Propose additions"><i class="mti">add</i></a>
          </div>
        </section>
    </header>
    <main ng-controller="mainController">

      <section>
        <div class="container pt2 pb2">
          <im-datepicker inpopup="true">
            <input type="text" value="10.10.2016">
          </im-datepicker>
        </div>
      </section>

    </main>

    <footer>
    </footer>
</body>
</html>