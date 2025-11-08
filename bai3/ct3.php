<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ct3.css">
    <title>Document</title>
</head>
<body>
    <!-- số 3: tính giá trị lớn nhất của ba số 'a,b,c' (so sánh 3 số) -->
    <?php include "../bai3/xuly3.php" ?>
    <a href="../index/index.php">
        <button type="button" class="back-btn">Quay về</button>
    </a>
    <h1>Chương trình tìm giá trị lớn nhất</h1>
    <form action="" method="post">
        <label for="">Số thứ nhất</label>
        <input type="text" name="num1" value="<?php echo isset($num1) ? $num1 : "" ?>">
        <br><br>
        <label for="">Số thứ hai</label>
        <input type="text" name="num2" value="<?php echo isset($num2) ? $num2 : "" ?>">
        <br><br>
        <label for="">Số thứ ba</label>
        <input type="text" name="num3" value="<?php echo isset($num3) ? $num3 : "" ?>">
        <br><br>
        <button type="submit">tìm</button>
        <br><br>
        <input style="border-style: none;" type="text" name="" id="" value="<?php echo isset($result) ? $result : "" ?>">
    </form>
</body>
</html>