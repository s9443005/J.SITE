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
                <p>固定回應5號，接下來練習依接收幾號來查詢。</p>
                <?php include "connectDB.php"; ?><!-- 連線DB-->
                <?php
                $sql = "select * from offices where officeCode='5'";            /* 編輯SQL指令---先練習固定回應5號  */
                $result = $conn->query($sql);       /* 執行SQL指令  */
                if ($result->num_rows > 0){         /* 筆數大於0    */
                    $row = $result->fetch_assoc();  /* 讀取下一筆   */
                    echo $row['officeCode'];
                    echo $row['city'];
                    echo $row['phone'];
                    echo $row['addressLine1'];
                    echo $row['addressLine2'];
                    echo $row['state'];
                    echo $row['country'];
                    echo $row['territory'];
                }
                ?>
                <?php include "disconnectDB.php"; ?><!-- 斷線DB-->
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>