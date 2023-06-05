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
                <h1>分公司文字總覽</h1><hr>
                <p>固定回應S10_2016號，下支程式練習依接變數查詢。</p>
                <?php include "connectDB.php"; ?><!-- 連線DB-->
                <?php
                $sql = "select * from products where productCode='S10_2016';";            /* 編輯SQL指令---先練習固查詢S10_2016  */
                $result = $conn->query($sql);       /* 執行SQL指令  */
                if ($result->num_rows > 0){         /* 筆數大於0    */
                    $row = $result->fetch_assoc();  /* 讀取下一筆   */
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
                ?>
                <?php include "disconnectDB.php"; ?><!-- 斷線DB-->
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>