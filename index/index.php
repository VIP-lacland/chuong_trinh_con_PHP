<?php include "../index/xuly_index.php" ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./index.css">
        <title>Document</title>
    </head>
    <body>
        <h1>Chương trình thông minh</h1>
        <ul>
            <li>1.Chẳn lẻ</li>
            <li>2.Kiểm tra ngày</li>
            <li>3.Tìm giá trị lớn nhất</li>
            <li>4.Tính tổng các số chẵn</li>
        </ul>
        <form action="" method="post">
            <label>Nhập số bài (1 - 4): </label>
            <input type="number" name="choose"  min="1" max="4" required value="<?php  ?>">
            <button type="submit">Chọn</button>
        </form>
</body>
</html>