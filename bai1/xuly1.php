<?php 
    function kt_chanle($number) {
        if (!is_numeric($number)) {
            return "Vui lòng nhập số hợp lệ";
        }
        if($number % 2 == 0) {
            return "Số $number là số chẵn";
        }
        return "Số $number là số lẻ";
    }

    $result = ""; 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = $_POST['number'] ?? '';
    $result = kt_chanle($num);
    }

?>