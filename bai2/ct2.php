<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./ct2.css">
    <title>Document</title>
</head>
<body>
    <?php include "../bai2/xuly2.php" ?>
    <a href="../index/index.php">
        <button type="button" class="back-btn">Quay về</button>
    </a>
    <h1>Kiểm tra ngày</h1>
    <form action="" method="post">
        <input type="text" name="day" value="<?php echo isset($day) ? $day : "" ?>">
        <button type="submit">kiểm tra</button>
        <br><br>
        <input style="border-style: none;" type="text" value=" <?php echo $result ?>">
    </form> 
</body>
</html> 