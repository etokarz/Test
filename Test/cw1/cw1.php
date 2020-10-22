<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.line{margin: 20px 30px;}
		label{display: inline-block; width: 160px; text-align: right;}
		input[type=submit]{width: 150px;padding: 10px; margin-left: 170px;transition-duration: 0.3s;}
		input[type=submit]:hover{color: white;background-color: black;}
		table{border-collapse: collapse;margin: 30px;}
		td{border:solid 2px lightgray; padding: 10px;}
		.wyr{background-color: darkblue;color: lightgreen;}
	</style>
</head>
<body>
	<h1>Cwiczenie 1</h1>
	<div>
	<form method="post">
		<div class="line">
			<label for="rows">Podaj ilość wierszy:</label>
			<input type="number" name="rows" id="rows">
		</div>
		<div>
			<label for="cols">Podaj ilość kolumn:</label>
			<input type="number" name="cols" id="cols">
		</div>
		<input type="submit" value="Utwórz">
	</form>
	</div>
	<div>
		<?php
		require 'functions.php';
		//var_dump($_POST);
		if(isset($_POST['rows'])){
			$rows = intval($_POST['rows']);
			$cols = intval($_POST['cols']);
			//echo "rows: {$rows} cols: {$cols}";
			$rows = $rows <=0 || $rows >50 ? 20 : $rows;
			$cols = $cols <=0 || $cols >50 ? 20 : $cols;
			echo generTab($rows,$cols);
		}
		?>
	</div>
</body>
</html>