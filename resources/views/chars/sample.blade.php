<script src="/js/Chart.min.js"></script>
<script src="/js/utils.js"></script>

<div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
</div>


	<script>
		var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль'],
			datasets: [{
				label: 'Доход',
				backgroundColor: color(window.chartColors.green).alpha(0.8).rgbString(),
				borderColor: window.chartColors.green,
				borderWidth: 1,
				data: [
                    100000,
                    20000,
                    120000
				]
			}, {
				label: 'Расход',
				backgroundColor: color(window.chartColors.red).alpha(1).rgbString(),
                borderColor: window.chartColors.red,
				borderWidth: 0,
				data: [
                    15000,
                    5000,
                    1000
				]
			}]

		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Расходы/Доходы'
					}
				}
			});

		};
	</script>
</body>