<div class="skills">
	<div class="row tile">

		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #e5a228">JS</span></div>
				<div class="sector" data-color="#e5a228" data-value="95"></div>
			</div>

		</div>

		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #0868ac">jQuery</span></div>
				<div class="sector" data-color="#0868ac" data-value="95"></div>
			</div>

		</div>

		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #e23237">AngularJS</span></div>
				<div class="sector" data-color="#e23237" data-value="85"></div>
			</div>

		</div>

		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #f14b4d">Angular2</span></div>
				<div class="sector" data-color="#f14b4d" data-value="70"></div>
			</div>

		</div>

		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #e55126">HTML5</span></div>
				<div class="sector" data-color="#e55126" data-value="95"></div>
			</div>

		</div>


		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #1c88c7">CSS3</span></div>
				<div class="sector" data-color="#1c88c7" data-value="95"></div>
			</div>

		</div>

		<div class="col-md-3">

			<div class="skill">
				<div class="title"><span style="color: #6c7eb7">PHP</span></div>
				<div class="sector" data-color="#6c7eb7" data-value="75"></div>
			</div>

		</div>

	</div>
</div>

<script>
	$(function() {

		$('.sector').each(function() {
			var angle = parseInt($(this).data('value') || 75)*3.6;
			var color = $(this).data('color') || '#12cc21';
			var sector = new Sektor(this, {
				size: 160,
				stroke: 7,
				arc: true,
				angle: angle,
				sectorColor: color,
				fillCircle: false
			})
		});

	})
	
</script>