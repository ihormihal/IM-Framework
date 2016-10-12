<?php
  $countries = json_decode(file_get_contents('app/data/countries.json'),true);
?>
<div id="datatable" class="navbar-target"></div>
<section>
  <div class="container">
    <h2 class="text-center up h2 mb1">Responsive datatable</h2>
  </div>
  <div class="container">
    <table class="table-mobile datatable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Code</th>
          <th>ISO code</th>
          <th>Continent</th>
          <th>Capital</th>
          <th>Phone code</th>
          <th>Ind. Date</th>
          <th>Currency code</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i = 0; $i < 30; $i++): ?>
        <tr data-href="#">
          <td data-th="ID"><?php echo $countries[$i]['id']; ?></td>
          <td data-th="Name"><i class="fa fa-star-o"></i> <?php echo $countries[$i]['name']; ?></td>
          <td data-th="Code"><?php echo $countries[$i]['code']; ?></td>
          <td data-th="ISO Code"><?php echo $countries[$i]['iso_code']; ?></td>
          <td data-th="Continent"><?php echo $countries[$i]['continent']; ?></td>
          <td data-th="Capital"><?php echo $countries[$i]['capital']; ?></td>
          <td data-th="Phone code"><?php echo $countries[$i]['phone']; ?></td>
          <td data-th="Ind. Date"><?php echo $countries[$i]['date']; ?></td>
          <td data-th="Currency code"><?php echo $countries[$i]['currency']; ?></td>
        </tr>
        <?php endfor ?>
      </tbody>
    </table>
  </div>
</section>