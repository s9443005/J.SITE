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
                    $i = 0;
                    while ($row = $result->fetch_assoc()){              /* 讀取下一筆   */
                        $i = $i + 1;
                        echo "<div class='accordion-item m-1'><!-- 手風琴項目BEGIN -->";
                        echo "<h2 class='accordion-header' id='heading" .$i. "'>";
                        echo "<button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse" . $i . "'  aria-expanded='true' aria-controls='collapse" . $i . "'>";
                        echo "第" . $row['officeCode'] . "號分公司<div class='ms-5'>" . $row['city'] . "</div>";
                        echo "</button>";
                        echo "</h2>";
                        echo "<div id='collapse" . $i . "' class='accordion-collapse collapse' aria-labelledby='heading" . $i . "' data-bs-parent='#accordionExample'>";
                        echo "<div class='accordion-body'>";
                        echo "<table class='table table-hover'>";
                        echo "<tr>";
                        echo "<th class='bg-primary text-white'>分公司編號</th>";
                        echo "<th class='bg-primary text-white'>城市</th>";
                        echo "<th class='bg-primary text-white'>電話</th>";
                        echo "<th class='bg-primary text-white'>住址一</th>";
                        echo "<th class='bg-primary text-white'>住址二</th>";
                        echo "<th class='bg-primary text-white'>州</th>";
                        echo "<th class='bg-primary text-white'>國家</th>";
                        echo "<th class='bg-primary text-white'>郵遞區號</th>";
                        echo "<th class='bg-primary text-white'>區域</th>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>".$row['officeCode']."</td>";
                        echo "<td>".$row['city']."</td>";
                        echo "<td>".$row['phone']."</td>";
                        echo "<td>".$row['addressLine1']."</td>";
                        echo "<td>".$row['addressLine2']."</td>";
                        echo "<td>".$row['state']."</td>";
                        echo "<td>".$row['country']."</td>";
                        echo "<td>".$row['postalCode']."</td>";
                        echo "<td>".$row['territory']."</td>";
                        echo "</tr>";
                        echo "</table>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div><!-- 手風琴項目END -->";
                    }
                } elseif ($result->num_rows == 0){echo "<p>無分公司資料</p>";}
                ?>
                <?php include "disconnectDB.php"; ?><!-- 斷線DB -->

            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>