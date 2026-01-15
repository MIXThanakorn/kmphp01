<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Money Share Result</h1>
    <hr>

    <?php
// ตรวจสอบว่ามีการส่งค่า GET มาหรือไม่
if (!isset($_GET['amount'], $_GET['people'])) {
    header("Location: index.php?error=missing");
    exit;
}

$amount = $_GET['amount'];
$people = $_GET['people'];

// validate ว่าเป็นตัวเลข
if (!is_numeric($amount) || !is_numeric($people)) {
    header("Location: index.php?error=notnumber");
    exit;
}

// validate ค่าต้องมากกว่า 0
if ($amount <= 0 || $people <= 0) {
    header("Location: dti05.php?error=invalid");
    exit;
}

// คำนวณ
$result = $amount / $people;

echo "Each person should pay: " . $result;

?>
   
</body>
</html>