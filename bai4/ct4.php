<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ct4.css">
    <title>Document</title>
</head>
<body>
    <?php include "../bai4/xuly4.php" ?>
    <a href="../index/index.php">
        <button type="button" class="back-btn">Quay về</button>
    </a>
    <h1>Chương trình tổng các số chẵn</h1>
    <form action="" method="post">
        <input type="text" name="number" value="<?php echo isset($number) ? $number : "" ?>" placeholder="Nhập 1 số muốn tổng chẵn">
        <button type="submit">Tổng</button>
        <br><br>
        <input style="border-style: none;" type="text" name="" value="<?php echo $result ?>">
    </form>
</body>
</html>