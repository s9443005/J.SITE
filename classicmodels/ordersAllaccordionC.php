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
                <h1>訂單手風琴總覽</h1>
                <hr>
                <?php include "connectDB.php"; ?>

                <div class="accordion accordion-flush" id="accordionFlushExample"><!-- 手風琴BEGIN -->
                    <?php
                    $sql = "select * from orders, customers where orders.customerNumber=customers.customerNumber;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $i = 0;
                        while ($row = $result->fetch_assoc()) {
                            $i = $i + 1;
                            echo '<div class="accordion-item m-1">'; /* 手風琴ITEM-BEGIN */
                            echo '<h2 class="accordion-header" id="flush-heading' . $i . '">';
                            echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse' . $i . '" aria-expanded="false" aria-controls="flush-collapse' . $i . '">';
                            echo "訂單編號：" . $row['orderNumber'];
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="flush-collapse' . $i . '" class="accordion-collapse collapse" aria-labelledby="flush-heading' . $i . '" data-bs-parent="#accordionFlushExample">';
                            echo '<div class="accordion-body">';
                            echo "<h5>訂單基本資料</h5><hr>";
                            echo '<table class="table table-hover">'; /* 手風琴BODY表格-BEGIN */
                            echo "<tr>";
                            echo "<th class='bg-primary text-white'>訂單編號</th>";
                            echo "<th class='bg-primary text-white'>訂單日期</th>";
                            echo "<th class='bg-primary text-white'>到貨日期</th>";
                            echo "<th class='bg-primary text-white'>出貨日期</th>";
                            echo "<th class='bg-primary text-white'>狀態</th>";
                            echo "<th class='bg-primary text-white'>附註</th>";
                            echo "<th class='bg-danger text-white'>顧客姓名</th>";
                            echo "<th class='bg-danger text-white'>聯絡人</th>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>" . $row['orderNumber'] . "</td>";
                            echo "<td>" . $row['orderDate'] . "</td>";
                            echo "<td>" . $row['requiredDate'] . "</td>";
                            echo "<td>" . $row['shippedDate'] . "</td>";
                            echo "<td>" . $row['status'] . "</td>";
                            echo "<td>" . $row['comments'] . "</td>";
                            echo "<td>" . $row['customerName'] . "</td>";
                            echo "<td>" . $row['contactFirstName'] . " " . $row['contactLastName'] . "</td>";
                            echo "</tr>";
                            echo "</table>"; /* 手風琴BODY表格-END */

                            /* 顯示本訂單明細BEGIN */
                            $conn2 = new mysqli($servername, $username, $password, $dbname);
                            // Check connection
                            if ($conn2->connect_error) {
                                die("Connection failed: " . $conn2->connect_error);
                            }
                            $sql2 = "select orderNumber, orderdetails.productCode, productName, quantityOrdered, priceEach, quantityOrdered*priceEach as subtotal from products, orderdetails where orderNumber = '" . $row['orderNumber'] . "' and products.productCode=orderdetails.productCode; ";
                            //echo $sql2;
                            echo "<h5>訂單明細</h5><hr>";
                            $result2 = $conn2->query($sql2);
                            if ($result2->num_rows > 0) {
                                echo "<table class='table table hover'>";
                                echo "<tr>";
                                echo "<th class='bg-primary text-white'>產品編號</th>";
                                echo "<th class='bg-danger text-white'>產品名稱</th>";
                                echo "<th class='bg-primary text-white'>訂購數量</th>";
                                echo "<th class='bg-primary text-white'>產品單價</th>";
                                echo "<th class='bg-warning text-white'>合計</th>";
                                echo "</tr>";
                                while ($row = $result2->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row['productCode']       . "</td>";
                                    echo "<td>" . $row['productName']       . "</td>";
                                    echo "<td>" . $row['quantityOrdered']   . "</td>";
                                    echo "<td>" . $row['priceEach']         . "</td>";
                                    echo "<td>" . $row['subtotal']          . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                            /* 顯示本訂單明細END */

                            echo '</div>';
                            echo '</div>';
                            echo '</div>'; /* 手風琴ITEM-END */
                        }
                    }
                    ?>
                </div><!-- 手風琴END -->

                <?php include "disconnectDB.php"; ?>
            </div>
            <!-- 邊欄右END -->

        </div>
    </div>
</body>

</html>