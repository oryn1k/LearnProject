<?php
require_once("Calc.php");

$a = $_POST["a"];
$b = $_POST["b"];
$sym = $_POST["Symphol"];
$calc = new Calc();

$result = $calc->DefiningAction($a,$b,$sym);

if($sym == "^"){
    $b = $a;
}

echo "$a $sym $b = $result<br>";
echo "<a href = '../index.html'>Вернуться к форме</a>";
?>