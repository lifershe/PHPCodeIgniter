<?= $this->extend('item/layout/main') ?>

<?= $this->section('content') ?>
	<body>
		<div class="chart-container">
			<h1>Chart</h1>
			<div class="mb-5 mt-5">
				<div id="GoogleLineChart" style="height: 400px; "></div>
			</div>
			<div class="mb-5">
				<div id="GoogleBarChart" style="height: 400px; "></div>
			</div>
		</div>

		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		<script>
			google.charts.load('current', {'packages':['corechart', 'bar']});
			google.charts.setOnLoadCallback(drawLineChart);
			google.charts.setOnLoadCallback(drawBarChart);
            // Line Chart
			function drawLineChart() {
				var data = google.visualization.arrayToDataTable([
					['Name', 'Products Count', 'Average Price'], // Added 'Average Price' column
					<?php
					foreach ($products as $row) {
						echo "['" . $row['name'] . "', " . $row['qty'] . ", " . $row['price'] . "],";
					}
					?>
				]);
				var options = {
					title: 'Line chart product qty and price wise', // Updated chart title
					curveType: 'function',
					legend: {
						position: 'top'
					}
				};
				var chart = new google.visualization.LineChart(document.getElementById('GoogleLineChart'));
				chart.draw(data, options);
			}

			function drawBarChart() {
				var data = google.visualization.arrayToDataTable([
					['Name', 'Products Count', 'Average Price'], // Added 'Average Price' column
					<?php
					foreach ($products as $row) {
						echo "['" . $row['name'] . "', " . $row['qty'] . ", " . $row['price'] . "],";
					}
					?>
				]);
				var options = {
					title: 'Bar chart products qty and price wise', // Updated chart title
					is3D: true,
				};
				var chart = new google.visualization.BarChart(document.getElementById('GoogleBarChart'));
				chart.draw(data, options);
			}

			
		</script>
	</body>
<?= $this->endSection('content') ?>