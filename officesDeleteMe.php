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
                <h1>標題文字</h1><hr>
                <?php include "connectDB.php"; ?>

                <?php
                    if (!($_SERVER["REQUEST_METHOD"] == "POST")) { die("沒有POST，中斷程式！"); }
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $officeCode = $_POST['officeCode'];
                    }
                ?><!--處理接收參數POST或GET-->

                <?php
                    $sql = "DELETE FROM offices WHERE officeCode='" . $officeCode . "';";
                    //echo $sql;
                    $result = $conn->query($sql);
                    if ($result) {
                        echo "<div>成功刪除分公司". $officeCode . "</div>";
                        echo "<a href='officesAll4DeleteA.php' type='button' class='button'>回上頁</a>";
                    }
                    else {
                        echo "<p class='text-danger'>錯誤代碼" . $conn->errno . "</p>";
                        echo "<p class='text-danger'>錯誤訊息" . $conn->error . "</p>";
                        /* switch ($conn->errno) {
                            case 1451:
                                echo "<p class='text-info'>本記錄違反資料庫的參考完整性規則，無法刪除。</p>";
                                break;
                            default :
                                echo "<p class='text-inf0'>發生錯誤！</p>"; 
                        } ERROR TRAPPING */
                    }
                ?>
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>