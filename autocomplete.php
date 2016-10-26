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
                <h1 class="white">IM Autocomplete</h1>
              </div>
              <div class="col-md-6">
                <ul class="breadcrumbs white lh1 right-md">
                  <li><a href="http://mycode.in.ua/">MyCode</a></li>
                  <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                  <li>IM Autocomplete</li>
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
          <h2 class="mb1">Attributes</h2>
          <table class="table noborder">

            <tr>
              <td><span class="label blue-bg">placeholder</span></td>
              <td>Input`s placeholder text</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">class</span></td>
              <td>Additional CSS classname for selection field</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">value</span></td>
              <td>Initial value (json)</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">name</span></td>
              <td>Input name attribute</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">url</span></td>
              <td>AJAX url (to get json)</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">min-length</span></td>
              <td>The minimum length of the string to search for</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">custom</span></td>
              <td>"true" - only custom variants, "false" - only loaded variants, by default - custom and loaded</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">output</span></td>
              <td>$scope variable name for output</td>
            </tr>
            <tr>
              <td><span class="label blue-bg">ng-model</span></td>
              <td>ngModel</td>
            </tr>

          </table>
        </div>
      </section>
      
      <form action="#" method="post">
        <section>
          <div class="container pt2 pb2">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mb1">Single select + custom variant</h2>
                <div class="form-group">
                  <label for="">Country</label>
                  <im-autocomplete-single
                    value='{"value": "UA", "text": "Ukraine"}'
                    name="country_code"
                    output="single_country"
                    ng-model="single_country_model"
                    url="app/data/autocomplete.php"
                    min-length="1"
                    placeholder="Type name"
                  ></im-autocomplete-single>
                  <div class="mt2">
                  <h2>Output:</h2>
                  <pre>{{single_country|json}}</pre>
                  <h2>ngModel:</h2>
                  <pre>{{single_country_model|json}}</pre>
                </div>
                </div>
              </div>
              <div class="col-md-6">
                <h2 class="mb1">Multiple select + custom variant</h2>
                <div class="form-group">
                  <label for="">Countries</label>
                  <im-autocomplete-multiple
                    value='[{"value": "UA", "text": "Ukraine"}, {"value": "RU", "text": "Russia"}]'
                    name="country_code"
                    output="multiple_countries"
                    ng-model="multiple_countries_model"
                    url="app/data/autocomplete.php"
                    min-length="0"
                    placeholder="Type via comma"
                    class="default"
                  ></im-autocomplete-multiple>
                </div>
                <div class="mt2">
                  <h2>Output:</h2>
                  <pre>{{multiple_countries|json}}</pre>
                  <h2>ngModel:</h2>
                  <pre>{{multiple_countries_model|json}}</pre>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container pt2 pb2">
            <div class="row">
              <div class="col-md-6">
                <h2 class="mb1">Single select on focus</h2>
                <div class="form-group">
                  <label for="">Country</label>
                  <im-autocomplete-single
                    value=''
                    name="country_code"
                    ng-model="singleTest"
                    output="single_country_onfocus"
                    url="app/data/autocomplete.php"
                    min-length="0"
                    placeholder="Type name"
                  ></im-autocomplete-single>
                  <div class="mt2">
                    <pre>{{single_country_onfocus|json}}</pre>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h2 class="mb1">Multiple select on focus</h2>
                <div class="form-group">
                  <label for="">Countries</label>
                  <im-autocomplete-multiple
                    value=''
                    name="country_code"
                    output="multiple_countries_onfocus"
                    url="app/data/autocomplete.php"
                    min-length="0"
                    placeholder="Type via comma"
                  ></im-autocomplete-multiple>
                </div>
                <div class="mt2">
                  <pre>{{multiple_countries_onfocus|json}}</pre>
                </div>
              </div>
            </div>
          </div>
        </section>
        <input type="submit" value="Submit">
      </form>

    </main>

    <footer>
    </footer>
</body>
</html>