<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?>
            <!-- 邊欄左ENG -->

            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
            <h1>顧客表格總覽</h1><hr>
            <?php include "connectDB.php"; ?>
            <?php
            $sql = "SELECT * FROM customers;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-hover'>";
                echo "<tr>";
                echo "<th class='bg-primary text-white'>顧客編號</th>";
                echo "<th class='bg-primary text-white'>顧客名稱</th>";
                echo "<th class='bg-primary text-white'>聯絡人姓名</th>";
                echo "<th class='bg-primary text-white'>電話</th>";
                echo "<th class='bg-primary text-white'>住址21</th>";
                echo "<th class='bg-primary text-white'>城市</th>";
                echo "<th class='bg-primary text-white'>州</th>";
                echo "<th class='bg-primary text-white'>郵遞區號</th>";
                echo "<th class='bg-primary text-white'>國家</th>";
                echo "<th class='bg-primary text-white'>員工</th>";
                echo "<th class='bg-primary text-white'>額度</th>";
                echo "</tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['customerNumber'] . "</th>";
                    echo "<td>" . $row['customerName'] . "</th>";
                    echo "<td>" . $row['contactFirstName'] . " " . $row['contactLastName'] . "</th>";
                    echo "<td>" . $row['phone'] . "</th>";
                    echo "<td>" . $row['addressLine2']. " " .$row['addressLine1'] . "</th>";
                    echo "<td>" . $row['city'] . "</th>";                    
                    echo "<td>" . $row['state'] . "</th>";
                    echo "<td>" . $row['postalCode'] . "</th>";
                    echo "<td>" . $row['country'] . "</th>";
                    echo "<td>" . $row['salesRepEmployeeNumber'] . "</th>";
                    echo "<td class='text-end'>" . $row['creditLimit'] . "</th>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
            echo "0 results";
            }
            ?>
            <?php include "disconnectDB.php"; ?>
            </div>
            <!-- 邊欄右END -->

        </div>
    </div>
</body>

</html>