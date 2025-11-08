<?php 

function checkDayInWeek($day) {
    switch ($day) {
        case 2: return "Hôm nay là thứ hai";
        case 3: return "Hôm nay là thứ ba";
        case 4: return "Hôm nay là thứ tư";
        case 5: return "Hôm nay là thứ năm";
        case 6: return "Hôm nay là thứ sáu";
        case 7: return "Hôm nay là thứ bảy";
        case 8: return "Hôm nay là chủ nhật";
        default: return "Số ngày không hợp lệ (Nhập từ 1 - 7)";
    }
}

$result = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $day = $_POST['day'];
    $result = checkDayInWeek($day);
}


?>