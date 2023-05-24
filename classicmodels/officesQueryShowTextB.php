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
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" class='m-5'>
                    <label>輸入分公司編號</label>
                    <input type="text" name="officeCode" placeholder="請輸入編號1-10">
                    <input type="submit" value="查詢">
                </form>
                <hr>
                <?php
                if (!($_SERVER["REQUEST_METHOD"] == "POST")) { die("沒有POST"); }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $officeCode = $_POST['officeCode'];
                    //echo $officeCode;
                }
                ?><!--處理接收參數POST或GET-->


                <?php include "connectDB.php"; ?><!-- 連線DB -->
                <?php
                echo "<h5>查詢結果：</h5>";
                $sql = "select * from offices where officeCode='".$officeCode."'";    /* 編輯SQL指令  */
                $result = $conn->query($sql);                           /* 執行SQL指令  */
                if ($result->num_rows > 0){                             /* 筆數大於0    */
                    while ($row = $result->fetch_assoc()){              /* 讀取下一筆   */
                    echo $row['officeCode'];
                    echo $row['city'];
                    echo $row['phone'];
                    echo $row['addressLine1'];
                    echo $row['addressLine2'];
                    echo $row['state'];
                    echo $row['country'];
                    echo $row['territory'];
                    }
                } elseif ($result->num_rows == 0){echo "<p>無分公司資料</p>";}
                ?>
                <?php include "disconnectDB.php"; ?><!-- 斷線DB -->

            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>