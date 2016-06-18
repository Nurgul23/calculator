<?php
$number2=$_POST["screen1"];
session_start();
$number1=$_SESSION["number1"];
$islem=$_SESSION["islem"];
echo $number2."<br>".$islem."<br>".$number1;
if($islem=="+"){
	$cvb=$number1+$number2;
}
else if($islem == "-"){
	$cvb=$number1-$number2;
}
elseif ($islem == "*") {
	$cvb=$number1*$number2;
}
elseif ($islem == "/") {
	$cvb=$number1/$number2;
}
$_SESSION["cvb"]=$cvb;
header("Location: index.php")	

?>