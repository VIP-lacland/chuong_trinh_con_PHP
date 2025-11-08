<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ct1.css">
    <title>Document</title>
</head>

<body>
    <?php include "../bai1/xuly1.php"; ?>
    <a href="../index/index.php">
        <button type="button" class="back-btn">Quay về</button>
    </a>
    <h1>Chương trình kiểm tra chẵn lẻ</h1>
    <form action="" method="post">
        <input type="text" name="number" placeholder="nhập 1 số" value="<?php echo isset($num) ? $num : "" ?>">
        <button type="submit">kiểm tra</button>
        <br><br>
        <input style="border-style: none;" type="text" value="<?php echo $result ?>">
    </form>
</body>
</html>