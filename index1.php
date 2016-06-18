<?php
session_start();
$number1=$_POST["screen"];
$islem=$_POST["islem"];
$_SESSION["number1"]=$number1;
$_SESSION["islem"]=$islem;


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	

	<link rel="stylesheet" type="text/css" href="materialize/css/materialize.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="row" action="check.php" method="post">
<div class="col m3">
	<div class="ekran">
		<input id="screen" type="text" name="screen1" value="">
	</div>
	<div class="butonlar">
	<div class="col m12">
		<div id="clear" class="waves-effect waves-light btn black">C</div>
		<div class="waves-effect waves-light btn black">%</div>
		<div id="division" class="waves-effect waves-light btn black">/</div>
		<div id="multiply" class="waves-effect waves-light btn black">*</div>
	</div>
	<div class="col m12">
		<a class="waves-effect waves-light btn black">1</a>
		<a class="waves-effect waves-light btn black">2</a>
		<a class="waves-effect waves-light btn black">3</a>
		<span id="minus" class="waves-effect waves-light btn black">-</span>
	</div>
	<div class="col m12">
		<a class="waves-effect waves-light btn black">4</a>
		<a class="waves-effect waves-light btn black">5</a>
		<a class="waves-effect waves-light btn black">6</a>
		<span type="submit" id="plus" class="waves-effect waves-light btn black">+</span>
	</div>
	<div class="col m12">
		<a class="waves-effect waves-light btn black">7</a>
		<a class="waves-effect waves-light btn black">8</a>
		<a class="waves-effect waves-light btn black">9</a>
		<input type="submit" id="equal" class="waves-effect waves-light btn black" value="=">
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