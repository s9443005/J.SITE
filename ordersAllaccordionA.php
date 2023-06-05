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
            <h1>訂單手風琴總覽</h1><hr>
            <?php include "connectDB.php"; ?>

            <div class="accordion accordion-flush" id="accordionFlushExample"><!-- 手風琴BEGIN -->
            <?php
            $sql = "select * from orders;";
            $result = $conn->query($sql);
            if ($result->num_rows>0){
                $i = 0;
                while ($row=$result->fetch_assoc()){
                    $i = $i + 1;
                    echo '<div class="accordion-item m-1">'; /* 手風琴ITEM-BEGIN */
                    echo '<h2 class="accordion-header" id="flush-heading'.$i.'">';
                    echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$i.'" aria-expanded="false" aria-controls="flush-collapse'.$i.'">';
                    echo "訂單編號：" . $row['orderNumber'];
                    echo '</button>';
                    echo '</h2>';
                    echo '<div id="flush-collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$i.'" data-bs-parent="#accordionFlushExample">';
                    echo '<div class="accordion-body">';
                    echo "<div class='row'>";
                    echo "訂單編號" . $row['orderNumber'] . "</br>";
                    echo "訂單日期" . $row['orderDate'] . "<br>";
                    echo "交貨日期" . $row['requiredDate'] . "<br>";
                    echo "出貨日期" . $row['shippedDate'] . "<br>";
                    echo "狀態" . $row['status'] . "<br>";
                    echo "附註" . $row['comments'] . "<br>";
                    echo "顧客編號" . $row['customerNumber'] . "<br>";
                    echo "</div>";
                    echo '</div>';
                    echo '</div>';
                    echo '</div>'; /* 手風琴ITEM-END */
                }
            }
            ?>
            </div><!-- 手風琴END -->



            <?php
            /*
            $sql = "SELECT * FROM orders;";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table'>";
                echo "<tr class='bg-primary text-white'>";
                echo "<td>訂單編號</td>";
                echo "<td>訂單日期</td>";
                echo "<td>下單日期</td>";
                echo "<td>出貨日期</td>";
                echo "<td>狀態</td>";
                echo "<td>附註</td>";
                echo "<td>顧客編號</td>";
                echo "</tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['orderNumber'] . "</td>";
                    echo "<td>" . $row['orderDate'] . "</td>";
                    echo "<td>" . $row['requiredDate'] . "</td>";
                    echo "<td>" . $row['shippedDate'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['comments'] . "</td>";
                    echo "<td>" . $row['customerNumber'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
            echo "0 results";
            }
            */
            ?>
            <?php include "disconnectDB.php"; ?>
            </div>
            <!-- 邊欄右END -->

        </div>
    </div>
</body>

</html>