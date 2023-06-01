<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?><!-- 邊欄左ENG -->
            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>分公司編號查詢</h1>
                <form method="post" action="productsQueryShowTextA.php" class='m-5'>
                    <label>輸入產品編號</label>
                    <input type="text" name="productCode" placeholder="請輸入編號產品編號">
                    <input type="submit" value="查詢">
                </form>
                <p>參考產品編號</p>
                <p>S10_1678</p>
                <p>S10_2016</p>
                <p>S10_4698</p>
                <p>S12_3891</p>
                <hr>
                <?php
                if (!($_SERVER["REQUEST_METHOD"] == "POST")) { die("沒有POST"); }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $productCode = $_POST['productCode'];
                    //echo $productCode;
                }
                ?><!--處理接收參數POST或GET-->


                <?php include "connectDB.php"; ?><!-- 連線DB -->
                <?php
                echo "<h5>查詢結果：</h5>";
                $sql = "select * from products where productCode='".$productCode."'";    /* 編輯SQL指令  */
                $result = $conn->query($sql);                           /* 執行SQL指令  */
                if ($result->num_rows > 0){                             /* 筆數大於0    */
                    while ($row = $result->fetch_assoc()){              /* 讀取下一筆   */
                        echo $row['productCode'];
                        echo $row['productName'];
                        echo $row['productLine'];
                        echo $row['productScale'];
                        echo $row['productVendor'];
                        echo $row['productDescription'];
                        echo $row['quantityInStock'];
                        echo $row['buyPrice'];
                        echo $row['MSRP'];
                    }
                } elseif ($result->num_rows == 0){echo "<p>無產品資料</p>";}
                ?>
                <?php include "disconnectDB.php"; ?><!-- 斷線DB -->

            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>