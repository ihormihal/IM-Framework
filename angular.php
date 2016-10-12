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
        <section class="light-bg pt2 pb2 cover" style="background-image: url(design/images/background.jpg);">
            <div class="container wide">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="white">AngularJS</h1>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main ng-controller="mainController">
        <div class="container">
            <div class="form-group">
                <label for="">AJAX Select <a class="show-code" href="#ajax-select-code"><i class="fa fa-code"></i></a></label>
                <im-ajax-select 
                name="country"
                url="app/data/ajax-select.php"
                value="UA"
                output="country"
                placeholder="Select country..."
                splaceholder="Search..."
                >
                </im-ajax-select>
            </div>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>
