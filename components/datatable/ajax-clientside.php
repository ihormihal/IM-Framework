<section>
	<div class="container pt2 pb2">
		<h2 class="mb1">AJAX JSON Datatable <a class="show-code" href="#json-datatable-code"> <i class="fa fa-code"></i></a></h2>
		<h3 class="mb2 grey">Client-side pagination, searching and filtering</h3>
		<div im-datatable get-url="server/data/countries.json" update-url="server/data/update_row.php" watch-url="server/data/country.json" watch-time="0">
			<div class="row">
				<div class="col-md-4">
					<input type="text" class="full" ng-model="s" placeholder="Search..." />
				</div>
			</div>
			<table class="full striped hoverable noborder ng-table">
				<thead>
					<tr>
						<th data-sortby="id" data-sortdir="ASC">ID</th>
						<th data-sortby="name">Name</th>
						<th data-sortby="code">Code</th>
						<th data-sortby="iso_code">ISO code</th>
						<th data-sortby="continent">Continent</th>
						<th data-sortby="capital">Capital</th>
						<th data-sortby="phone">Phone code</th>
						<th data-sortby="currency">Currency code</th>
						<th data-sortby="active">Active</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="row in rows" ng-class="row.class">
						<td>{{row.id}}</td>
						<td>{{row.name}}</td>
						<td>{{row.code}}</td>
						<td>{{row.iso_code}}</td>
						<td>{{row.continent}}</td>
						<td>{{row.capital}}</td>
						<td>{{row.phone}}</td>
						<td>{{row.currency}}</td>
						<td>
							<div class="switch">
								<label>
									<input type="checkbox" ng-integer ng-model="row.active" ng-change="updateRow($index)" checked>
									<span class="toggle"></span>
								</label>
							</div>
						</td>
					</tr>
				</tbody>
				<tfoot>
					<th></th>
					<th>
						<input ng-model="search.name" class="full" type="text" placeholder="Name">
					</th>
					<th>
						<input ng-model="search.code" class="full" type="text" placeholder="Code">
					</th>
					<th>
						<input ng-model="search.iso_code" class="full" type="text" placeholder="ISO code">
					</th>
					<th>
						<input ng-model="search.continent" class="full" type="text" placeholder="Continent">
					</th>
					<th>
						<input ng-model="search.capital" class="full" type="text" placeholder="Capital">
					</th>
					<th>
						<input ng-model="search.phone" class="full" type="text" placeholder="Phone code">
					</th>
					<th>
						<input ng-model="search.currency" class="full" type="text" placeholder="Currency code">
					</th>
					<th>
						<select class="full" ng-model="search.active">
							<option ng-repeat="value in unique(data, 'active')" value="{{value}}">{{value}}</option>
						</select>
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


<div class="hidden" id="json-datatable-code">
<?php
$code =
'<div
im-datatable
get-url="/app/data/countries.json"
update-url="/app/data/update_row.php"
watch-url="/app/data/country.json"
watch-time="0">
	<div class="row">
		<div class="col-md-4">
			<input type="text" class="full" ng-model="s" placeholder="Search..." />
		</div>
	</div>
	<table class="full striped hoverable noborder ng-table">
		<thead>
			<tr>
				<th data-sortby="id" data-sortdir="ASC">ID</th>
				<th data-sortby="name">Name</th>
				<th data-sortby="code">Code</th>
				<th data-sortby="iso_code">ISO code</th>
				<th data-sortby="continent">Continent</th>
				<th data-sortby="capital">Capital</th>
				<th data-sortby="phone">Phone code</th>
				<th data-sortby="currency">Currency code</th>
				<th data-sortby="active">Active</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="row in rows" ng-class="row.class">
				<td>{{row.id}}</td>
				<td>{{row.name}}</td>
				<td>{{row.code}}</td>
				<td>{{row.iso_code}}</td>
				<td>{{row.continent}}</td>
				<td>{{row.capital}}</td>
				<td>{{row.phone}}</td>
				<td>{{row.currency}}</td>
				<td>
					<div class="switch checked-blue">
						<input ng-integer ng-model="row.active" ng-change="updateRow($index)" id="ch-{{row.id}}" type="checkbox">
						<label for="ch-{{row.id}}"></label>
					</div>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<th></th>
			<th><input ng-model="search.name" class="full" type="text" placeholder="Name"></th>
			<th><input ng-model="search.code" class="full" type="text" placeholder="Code"></th>
			<th><input ng-model="search.iso_code" class="full" type="text" placeholder="ISO code"></th>
			<th><input ng-model="search.continent" class="full" type="text" placeholder="Continent"></th>
			<th><input ng-model="search.capital" class="full" type="text" placeholder="Capital"></th>
			<th><input ng-model="search.phone" class="full" type="text" placeholder="Phone code"></th>
			<th><input ng-model="search.currency" class="full" type="text" placeholder="Currency code"></th>
			<th>
				<select class="full" ng-model="search.active">
					<option ng-repeat="value in unique(data, \'active\')" value="{{value}}">{{value}}</option>
				</select>
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

</div>';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>