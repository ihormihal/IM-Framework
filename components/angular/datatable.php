<?php $h1 = 'IM Datatable'; ?>

<div class="container">
  <h2 class="text-center h1 mt1"><?php echo $h1; ?></h2>
</div>

<?php $countries = json_decode(file_get_contents('server/data/countries.json'),true); ?>

<?php include 'components/datatable/ajax-serverside.php'; ?>
<?php include 'components/datatable/ajax-clientside.php'; ?>
<?php include 'components/datatable/html-default.php'; ?>
<?php include 'components/datatable/ajax-multiple.php'; ?>
