<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "../bai1/xuly1.php";
    $result = ""; 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = $_POST['number'] ?? '';
    $result = kt_chanle($num);
}
    ?>
    <h1>Chương trình kiểm tra chẵn lẻ</h1>
    <form action="xuly1.php" method="post">
    <input type="text" name="number" placeholder="nhập 1 số">
    <button type="submit">kiểm tra</button>
    </form>
    
    <div style="margin-top: 10px; color: blue;">
        <?php echo $result; ?>
    </div>

</body>
</html>