<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>

    <h1>TEST</h1>
    <hr>
    <?php include "connectDB.php"; ?>

    <!--這個程式處理可能會接收到NULL或格式不符的參數。理想上在前端應該處理完畢。-->
    <!--重點放在從FORM傳送資料到PHP-->
    <!--順便瞭解一下什麼是POST和GET-->
    <?php
    if (!empty($_POST['employeeNumber'])) {
        $employeeNumber = $_POST['employeeNumber'];
    } else if (!empty($_GET['employeeNumber'])) {
        $employeeNumber = $_GET['employeeNumber'];
    } else {
        die("輸入值錯誤，程式結束執行");
    }
    echo "<p>輸入：" .  $employeeNumber . "</p>";
    $sql = "select * from employees where employeeNumber='" . $employeeNumber . "';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo "<p>查詢結果：</p>";
    echo $row['employeeNumber'] . "<br>";
    echo $row['firstName'] . " " . $row['lastName'] . "<br>";
    echo $row['jobTitle'] . "<br>";
    ?>

    <?php include "disconnectDB.php"; ?>
    </div>

</body>

</html>