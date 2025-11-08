<?php 

function findMaxValue($num1, $num2, $num3) {
    $maxNumber = $num1;
    if ($num2 > $maxNumber) {
        $maxNumber = $num2;
    } 

    if($num3 > $maxNumber) {
        $maxNumber = $num3;
    }
    return "$maxNumber là số lớn nhất trong 3 số";
}

$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $result = findMaxValue($num1,$num2,$num3); 
}




?>