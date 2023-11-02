<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>website ban hang</title>
</head>
<body>
	<?php
		include('inc/header.php');
		$hello = 'hello word';
	?>
	<h1>
		<?php
		  include_once('system/libs/Main.php');
		  include_once('app/controller/product.php');

		$main = new Main();
		$productControler = new product();

		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/',$url);

		echo "<pre>";
		print_r($url);
		echo "</pre>";

		echo 'class : ' .$url[0]. '</br>';
		echo 'methor : ' .$url[1]. '</br>';
		echo 'pramater : ' .$url[2]. '</br>';

		?>
	</h1>
	<?php

		include('inc/footer.php')
	?>
</body>
</html