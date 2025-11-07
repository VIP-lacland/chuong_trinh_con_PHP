<?php 
    function kt_chanle($number) {
        if (!is_numeric($number)) {
            return "Vui lòng nhập số hợp lệ";
        }
        if($number % 2 == 0) {
            return "Số $number là <b>chẵn</b>";
        }
        return "Số $number là <b>lẻ</b>";
    }

?>