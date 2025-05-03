<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ดัชนีมวลกายของคุณ</title>
</head>
<body>
    <h1>ดัชนีมวลกายของคุณ</h1>
    <h3>67130065 พัชระพงษ์ ผุยหนองโพธิ์</h3>
    <form method="post">
        <label>น้ำหนัก<br><input type="number" name="weight" required></label><br>
        <label>ส่วนสูง<br><input type="number" name="height" required></label><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $w = $_POST["weight"];
        $h = $_POST["height"] / 100;
        $bmi = $w / ($h * $h);
        echo "<p>ดัชนีมวลกายของคุณคือ <strong style='color:red'>" . round($bmi, 2) . "</strong></p>";
        if ($bmi < 18.5) {
            echo "<p style='color:blue'>คุณผอมเกินไป</p>";
        } elseif ($bmi <= 22.9) {
            echo "<p style='color:green'>น้ำหนักปกติ</p>";
        } else {
            echo "<p style='color:red'>น้ำหนักเกิน</p>";
        }
    }
    ?>
</body>
</html>
