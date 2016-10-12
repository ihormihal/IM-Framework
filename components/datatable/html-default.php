<section>
	<div class="container pt2 pb2">
		<h2 class="mb1">HTML Datatable  <a class="show-code" href="#html-datatable-code"><i class="fa fa-code"></i></a></h2>
		<div im-datatable>
			<div class="row">
				<div class="col-md-4">
					<input type="text" class="full" ng-model="s" placeholder="Search..." />
				</div>
			</div>
			<table class="full striped hoverable clickable noborder ng-table">
				<thead>
					<tr>
						<th data-type="numeric">ID</th>
						<th>Name</th>
						<th>Code</th>
						<th>ISO code</th>
						<th data-sortdir="ASC">Continent</th>
						<th>Capital</th>
						<th>Phone code</th>
						<th data-type="date" data-format="dd.mm.yyyy">Ind. Date</th>
						<th>Currency code</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($countries as $key => $country): ?>
					<tr data-href="#">
						<td class="grey">
							<?php echo $country['id']; ?>
						</td>
						<td><i class="fa fa-star-o"></i>
							<?php echo $country['name']; ?>
						</td>
						<td>
							<?php echo $country['code']; ?>
						</td>
						<td>
							<?php echo $country['iso_code']; ?>
						</td>
						<td>
							<?php echo $country['continent']; ?>
						</td>
						<td>
							<?php echo $country['capital']; ?>
						</td>
						<td>
							<?php echo $country['phone']; ?>
						</td>
						<td>
							<?php echo $country['date']; ?>
						</td>
						<td>
							<?php echo $country['currency']; ?>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
				<tfoot>
					<th></th>
					<th>
						<input ng-model="search.cells.key1.text" class="full" type="text" placeholder="Name">
					</th>
					<th>
						<input ng-model="search.cells.key2.text" class="full" type="text" placeholder="Code">
					</th>
					<th>
						<input ng-model="search.cells.key3.text" class="full" type="text" placeholder="ISO code">
					</th>
					<th>
						<input ng-model="search.cells.key4.text" class="full" type="text" placeholder="Continent">
					</th>
					<th>
						<input ng-model="search.cells.key5.text" class="full" type="text" placeholder="Capital">
					</th>
					<th>
						<input ng-model="search.cells.key6.text" class="full" type="text" placeholder="Phone code">
					</th>
					<th>
						<input ng-model="search.cells.key7.text" class="full" type="text" placeholder="Currency code">
					</th>
				</tfoot>
			</table>
			<div class="row">
				<div class="col-md-10">
					<div im-datatable-pagination></div>
				</div>
				<div class="col-md-2">
					<select class="full" ng-model="table.onpage">
						<option value="10">10</option>
						<option value="25">25</option>
						<option value="50">50</option>
						<option value="100">100</option>
					</select>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="hidden" id="html-datatable-code">
<?php
$code =
'<div im-datatable>
	<div class="row">
		<div class="col-md-4">
			<input type="text" class="full" ng-model="s" placeholder="Search..." />
		</div>
	</div>
	<table class="full striped hoverable clickable noborder ng-table">
		<thead>
			<tr>
				<th data-type="numeric">ID</th>
				<th>Name</th>
				<th>Code</th>
				<th>ISO code</th>
				<th data-sortdir="ASC">Continent</th>
				<th>Capital</th>
				<th>Phone code</th>
				<th data-type="date" data-format="dd.mm.yyyy">Ind. Date</th>
				<th>Currency code</th>
			</tr>
		</thead>
		<tbody>
			<!-- repeat -->
			<tr data-href="#">
				<td class="grey">1</td>
				<td><i class="fa fa-star-o"></i> Ukraine</td>
				<td>UA</td>
				<td>UKR</td>
				<td>EU</td>
				<td>Kiev</td>
				<td>380</td>
				<td>24.08.1991</td>
				<td>UAH</td>
			</tr>
			<!-- /repeat -->
		</tbody>
		<tfoot>
			<th></th>
			<th><input ng-model="search.cells.key1.text" class="full" type="text" placeholder="Name"></th>
			<th><input ng-model="search.cells.key2.text" class="full" type="text" placeholder="Code"></th>
			<th><input ng-model="search.cells.key3.text" class="full" type="text" placeholder="ISO code"></th>
			<th><input ng-model="search.cells.key4.text" class="full" type="text" placeholder="Continent"></th>
			<th><input ng-model="search.cells.key5.text" class="full" type="text" placeholder="Capital"></th>
			<th><input ng-model="search.cells.key6.text" class="full" type="text" placeholder="Phone code"></th>
			<th><input ng-model="search.cells.key7.text" class="full" type="text" placeholder="Currency code"></th>
		</tfoot>
	</table>

	<div class="row">
		<div class="col-md-10">
			<div im-datatable-pagination></div>
		</div>
		<div class="col-md-2">
			<select class="full" ng-model="table.onpage">
				<option value="10">10</option>
				<option value="25">25</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>
		</div>
	</div>

</div>';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>