<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>

    <h1>TEST</h1>
    <hr>
    <?php include "connectDB.php"; ?>

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