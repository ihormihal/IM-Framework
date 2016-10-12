<section>
	<div class="container pt2 pb2">
		<h2 class="mb1">AJAX Extended Table<a class="show-code" href="#ajax-multiple-table"> <i class="fa fa-code"></i></a></h2>
		<h3 class="mb2 grey">Select and update multiple rows</h3>
		<div
			im-datatable
			get-url="app/data/countries.json" 
			update-url="app/data/update_row.php"
			>

			<div class="row tile">
				<div class="col-md-6">
					<a href="" class="btn btn-mt btn-warning ripple" ng-disabled="selected.length == 0" ng-click="updateSelected({active: false});">Disable</a>
				</div>
				<div class="col-md-6">
					<p class="table-results-text text-md-right">{{data.length}} search results (of {{table.total}} in total)</p>
					<!-- data.length : length of table rows -->
				</div>
			</div>

			<div class="table-responsive">

				<table class="datatable">
					<thead>
						<tr>
							<th>Actions</th>
							<th data-sortby="id" data-sortdir="ASC">ID</th>
							<th data-sortby="name">Name</th>
							<th data-sortby="code">Code</th>
							<th data-sortby="iso_code">ISO code</th>
							<th data-sortby="continent">Continent</th>
							<th data-sortby="capital">Capital</th>
							<th data-sortby="phone">Phone code</th>
							<th data-sortby="currency">Currency code</th>
						</tr>
					</thead>
					<tbody>
						<tr ng-repeat="row in rows" ng-class="row.class">
							<td>
								<div class="checkbox">
									<label>
										<input type="checkbox" ng-model="row.selected" checked>
										<span class="check"></span>
									</label>
								</div>
							</td>
							<td>{{row.id}}</td>
							<td data-edit="name">{{row.name}}</td>
							<td>{{row.code}}</td>
							<td>{{row.iso_code}}</td>
							<td>{{row.continent}}</td>
							<td>{{row.capital}}</td>
							<td>{{row.phone}}</td>
							<td>{{row.currency}}</td>
						</tr>
					</tbody>
				</table>

			</div>
			
			<div class="mt1"></div>
			<div class="row tile">
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


<div class="hidden" id="ajax-multiple-table">
<?php
$code =
'';
echo '<pre><code class="lang-html" ng-non-bindable>'.htmlspecialchars($code).'</code></pre>';
?>
</div>