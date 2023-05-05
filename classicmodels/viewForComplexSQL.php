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
                <h1>建立VIEW</h1>
                <hr>
                <div>
                    <p>這是我想出來的方法，應該也有人想過吧。</p>
                    <p>若$sql無法下複雜指令，可以先建一個VIEW再做處理。</p>
                    <p>先刪VIEW、建立VIEW、進一步SELECT、顯示資料、刪VIEW。</p>
                </div>

                <?php include "connectDB.php";  ?>
                <!-- 因為$sql無法下複雜指令，可以先建一個VIEW再做處理-->
                <!-- 先刪VIEW、建立VIEW、進一步SELECT、顯示資料、刪VIEW -->
                <?php
                $sql = "drop view if exists hotProduct;";
                $result = $conn->query($sql);
                echo $result . "Drop view if exists hotProduct</br>"; /* 執行正確傳回1 */

                $sql = "create view hotProduct as select productCode, quantityOrdered, priceEach from orderdetails order by productCode;";
                $result = $conn->query($sql);
                echo $result . "create view hotProduct</br>";/* 執行正確傳回1 */

                $sql = "select productCode, quantityOrdered*priceEach as subtotal from hotProduct;";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                echo $result->num_rows . "</br>";
                echo $row['productCode'] . "</br>";
                //echo $row['quantityOrdered'] . "</br>";
                //echo $row['priceEach'] . "</br>";
                echo $row['subtotal'] . "</br>";
                $sql = "drop view hotProduct;";
                $result = $conn->query($sql);
                echo $result . "Drop view hotProduct</br>";
                ?>
                <?php include "disconnectDB.php";  ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>