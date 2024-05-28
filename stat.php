<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/style.css">
	<title>Статистика</title>
</head>
<body>
	<?php
	$q1 = $_POST["q1"];
	$q2 = $_POST["q2"];
	$q3 = $_POST["q3"];
	?>
	

	<p> Ответ на вопрос 1 <?= $q1 ?> </p>
	<p> Ответ на вопрос 2 <?= $q2 ?> </p>
	<p> Ответ на вопрос 3 <?= $q3 ?> </p>


	<div style = "position: relative; height:40vh; width:80vw">
		<canvas id="myChart"></canvas>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


	<script>
		const ctx = document.getElementById('myChart');

		new Chart(ctx, {
			type: 'bar',

			data: {
				labels: ['1 вопрос', '2 вопрос', '3 вопрос'],
				datasets: [{
					label: '1 вариант ответа',
					data: [1, 9, 5],
					borderWidth: 1
				},
				{
					label: '2 вариант ответа',
					data: [2, 1, 2],
					borderWidth: 1
				},
				{
					label: '3 вариант ответа',
					data: [7, 0, 3],
					borderWidth: 1
				}],

			},

			options: {
				scales: {
					y: {
						beginAtZero: true
					}
				}
			}
		});
	</script>

</body>
</html>