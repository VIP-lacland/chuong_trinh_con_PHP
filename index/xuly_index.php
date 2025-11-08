<?php 
function moveToSubProgram($choose) {
    switch ($choose) {
        case 1:
            header("Location: ../bai1/ct1.php");
            break;
        case 2:
            header("Location: ../bai2/ct2.php");
            break;
        case 3:
            header("Location: ../bai3/ct3.php");
            break;
        case 4:
            header("Location: ../bai4/ct4.php");
            break;
        default:
            echo "Lựa chọn không hợp lệ!";
            exit;
    }
}



if (isset($_POST['choose'])) {
    $choose = $_POST['choose'];
    moveToSubProgram($choose);
}
