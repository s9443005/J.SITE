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
                <h1>產品編號查詢-手風琴</h1><hr>
                <?php include "connectDB.php"; ?>
                
                <form method="post" action="productsQueryShowAccordionB.php" class='m-5'>
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
                <?php
                echo "<h5>查詢結果：</h5>";
                $sql = "select * from products where productCode='".$productCode."'";    /* 編輯SQL指令  */
                $result = $conn->query($sql);                           /* 執行SQL指令  */
                if ($result->num_rows > 0){                             /* 筆數大於0    */
                    while ($row = $result->fetch_assoc()){              /* 讀取下一筆   */
                ?>
                    <div class="accordion accordion-flush" id="accordionFlushExample"> <!--手風琴BEGIN-->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <?php echo "編號：" . $row['productCode'] . "   名稱：" .  $row['productName']; ?>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                <?php
                                    echo "<table class='table'>";
                                    echo "<tr>";
                                    echo "<th class='bg-primary text-white'>產品線</th>";
                                    echo "<th class='bg-primary text-white'>比例</th>";
                                    echo "<th class='bg-primary text-white'>供應商</th>";
                                    echo "<th class='bg-primary text-white'>產品描述</th>";
                                    echo "<th class='bg-primary text-white'>存貨</th>";
                                    echo "<th class='bg-primary text-white'>進貨價格</th>";
                                    echo "<th class='bg-primary text-white'>建議售價</th>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td>".$row['productLine']."</td>";
                                    echo "<td>".$row['productScale']."</td>";
                                    echo "<td>".$row['productVendor']."</td>";
                                    echo "<td>".$row['productDescription']."</td>";
                                    echo "<td>".$row['quantityInStock']."</td>";
                                    echo "<td>".$row['buyPrice']."</td>";
                                    echo "<td>".$row['MSRP']."</td>";
                                    echo "</tr>";
                                    echo "</table>";

                                ?>
                                </div>
                            </div>
                        </div>
                    </div><!--手風琴END-->








                <?php
                        /* echo $row['productCode'];
                        echo $row['productName'];
                        echo $row['productLine'];
                        echo $row['productScale'];
                        echo $row['productVendor'];
                        echo $row['productDescription'];
                        echo $row['quantityInStock'];
                        echo $row['buyPrice'];
                        echo $row['MSRP'];*/
                    }
                } elseif ($result->num_rows == 0){echo "<p>無產品資料</p>";}
                ?>                                                

                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>