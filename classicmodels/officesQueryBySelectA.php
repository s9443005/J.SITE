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
                    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" id="officeCodeForm" class="m-5">
                    <div class="mb-3 col-2">
                    <label for="offices" class="form-label">請選擇分公司</label>
                    <select class="form-select" id="officeCode" name="officeCode" size="1">
                        <?php include "connectDB.php"; ?>
                        <?php
                        $sql = "select * from offices;";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0 ){
                            while ($row= $result->fetch_assoc()) {
                                echo '<option value="'  .$row['officeCode']. '">' .$row['officeCode'].'---'.$row['city'].'</option>';
                            }
                        }
                        ?>
                        </select>
                        <button type="submit" class="btn btn-primary text-white">提交2查詢</button>
                    </div>
                    </form>
                <hr>
                <?php
                if (!($_SERVER["REQUEST_METHOD"] == "POST")) { die("沒有POST"); }
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo $_POST['officeCode'];
                    //echo $officeCode;
                }
                ?><!--處理接收參數POST或GET-->


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