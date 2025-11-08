<?php 
 
 function sumOddNumber($number) {
    $sum = 0;
    if ($number <= 1) {
        return "Số không hợp lệ, lớn hơn 1";
    }

    for ($i = 1; $i <= $number; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
        }
    }
    return "Tổng số chẵn là $sum";
 }

 $result = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = $_POST['number'];
    $result = sumOddNumber($number);
}   


?>