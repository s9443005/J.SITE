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
                <?php include "connectDB.php"; ?><!-- 連線DB-->
                
                $sql = "select * from offices";     /* 編輯SQL指令  */
                $result = $conn->query($sql);       /* 執行SQL指令  */
                if ($result->num_rows > 0){         /* 筆數大於0    */
                    $row = $result->fetch_assoc();  /* 讀取下一筆   */
                    echo $row['officeCodes'];
                    echo $row['city'];
                }


                <?php include "connectDB.php"; ?><!-- 斷線DB-->
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>