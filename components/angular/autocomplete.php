<?php $h1 = 'IM Autocomplete'; ?>

<div class="container">
  <h2 class="text-center h1 mt1"><?php echo $h1; ?></h2>
</div>

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
      <tr>
        <td><span class="label blue-bg">disable</span></td>
        <td>"disabled" attribute for input</td>
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
              url="server/data/autocomplete.php"
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
              url="server/data/autocomplete.php"
              min-length="2"
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
              url="server/data/autocomplete.php?cou={{single_country}}"
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
              url="server/data/autocomplete.php"
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