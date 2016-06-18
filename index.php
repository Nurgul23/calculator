<?php 
session_start();
$cavab=$_SESSION["cvb"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	

	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="row" action="index1.php" method="post">
<div class="col m3">
	<div class="ekran">
	<?php
		echo "<input id='screen' type='text' name='screen' value='$cavab'>"
		?>
	</div>
	<div class="butonlar">
	<div class="col m12">
		<div id="clear" class="waves-effect waves-light btn black">C</div>
		<div class="waves-effect waves-light btn black">%</div>
		<input type="submit" name="islem" id="division" class="waves-effect waves-light btn black" value="/">
		<input type="submit" name="islem" id="multiply" class="waves-effect waves-light btn black" value="*">
	</div>
	<div class="col m12">
		<a class="waves-effect waves-light btn black">1</a>
		<a class="waves-effect waves-light btn black">2</a>
		<a class="waves-effect waves-light btn black">3</a>
		<input type="submit" name="islem" id="minus" class="waves-effect waves-light btn black" value="-">
	</div>
	<div class="col m12">
		<a class="waves-effect waves-light btn black">4</a>
		<a class="waves-effect waves-light btn black">5</a>
		<a class="waves-effect waves-light btn black">6</a>
		<input type="submit" name="islem" id="plus" class="waves-effect waves-light btn black" value="+">
	</div>
	<div class="col m12">
		<a class="waves-effect waves-light btn black">7</a>
		<a class="waves-effect waves-light btn black">8</a>
		<a class="waves-effect waves-light btn black">9</a>
		<div id="equal" class="waves-effect waves-light btn black" >=</div>
	</div>
	<div class="col m10">
		<a class="waves-effect waves-light btn black">.</a>
		<a class="waves-effect waves-light btn black">0</a>
		<div id="clearOne" class="waves-effect waves-light btn black"><-</div>
		<!-- <div class="waves-effect waves-light btn black"></div> -->
	</div>
	</div>
</from>

<!-- <div class="butonlar col m3"></div> -->
</div>
<script type="text/javascript" src="jquery-1.12.4.js"></script>
<script type="text/javascript" src="materialize/js/materialize.js"></script>
</body>
</html>
<script src="main.js"></script>