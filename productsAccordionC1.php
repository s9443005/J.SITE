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
                <h1>以產品線手風琴總覽產品項目</h1><hr>
                <?php include "connectDB.php"; ?>

                <?php
                    $sql ="SELECT * FROM products;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        echo '<div class="accordion accordion-flush" id="accordionFlushExample"><!--手風琴BEGIN-->';
                        $i=0;
                        while($row = $result->fetch_assoc()) {
                            $i=$i+1;
                ?>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                                    <?php
                                        echo "<div>產品編號" . $row['productCode'] . "</div>";
                                        echo "<div class='ms-5'>名稱："   . $row['productName'] . "</div>";
                                    ?>
                                </button>
                              </h2>
                              <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <table class='table'>
                                    <tr>
                                        <th class="bg-primary text-white">比例</th>
                                        <th class="bg-primary text-white">供應商</th>
                                        <!-- th class="bg-primary text-white">描述</th -->
                                        <th class="bg-primary text-white">存量</th>
                                        <th class="bg-primary text-white">進價</th>
                                        <th class="bg-primary text-white">售價</th>
                                        <th class="bg-primary text-white">產品線</th>
                                    </tr>
                                    <tr>
                                    <?php
                                        echo "<td>" . $row['productScale']      ."</td>";
                                        echo "<td>" . $row['productVendor']     ."</td>";
                                        //echo "<td>" . $row['productDescription']."</td>";
                                        echo "<td>" . $row['quantityInStock']   ."</td>";
                                        echo "<td>" . $row['buyPrice']          ."</td>";
                                        echo "<td>" . $row['MSRP']              ."</td>";
                                        echo "<td><a href='#'>".$row['productLine']."</a></td>";
                                    ?>
                                    </tr>
                                    </table>
                                    <?php 
                                        $conn2 = new mysqli($servername, $username, $password, $dbname);
                                        $conn2->query("SET character_set_connection = UTF8");
                                        // Check connection
                                        if ($conn2->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        /* 用 productCode 找出所有的訂單記錄之銷售數量*/
                                        $sql2  = "SELECT orderdetails.ordernumber, orders.orderDate, customers.customerName, orderdetails.priceEach, orderdetails.quantityOrdered ";
                                        $sql2 .= "FROM orderdetails, orders, customers ";
                                        $sql2 .= "WHERE orders.orderNumber=orderdetails.orderNumber ";
                                        $sql2 .= "AND customers.customerNumber=orders.customerNumber ";
                                        $sql2 .= "AND orderdetails.productCode='" . $row['productCode'] . "' ";
                                        $sql2 .= "ORDER BY orders.orderDate;";
                                        /* -----------------------------------------*/
                                        $result2 = $conn2->query($sql2);
                                        
                                    ?>
                                    <div><!--切換產品產品線說明按鈕BEGIN--><!--樣板來自Bootstrap3官網-->
                                        <p>
                                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">產品描述</a>
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">銷售記錄</button>
                                        </p>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <div class="card card-body shadow">
                                                    <?php echo $row['productDescription']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                                                <div class="card card-body shadow">
                                                    <?php
                                                        if ($result2->num_rows>0) {
                                                            echo "<table class='table table-hover'>";
                                                            echo "<tr>";
                                                            echo "<th class='bg-primary text-white'>訂單號碼</th>";
                                                            echo "<th class='bg-primary text-white'>訂單日期</th>";
                                                            echo "<th class='bg-primary text-white'>客戶名稱</th>";
                                                            echo "<th class='bg-primary text-white'>售價</th>";
                                                            echo "<th class='bg-primary text-white'>數量</th>";
                                                            echo "</tr>";
                                                            while ($row2 = $result2->fetch_assoc()){
                                                                echo "<tr>";
                                                                echo "<td><a href='#'>".$row2['ordernumber']."</a></td>";
                                                                echo "<td>".$row2['orderDate']."</td>";
                                                                echo "<td>".$row2['customerName']."</td>";
                                                                echo "<td>".$row2['priceEach']."</td>";
                                                                echo "<td>".$row2['quantityOrdered']."</td>";
                                                                echo "</tr>";
                                                            }
                                                            echo "</table>";
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div><!--切換產品產品線說明按鈕END-->
                                </div>
                              </div>
                            </div>
                <?php
                        }
                        echo '</div><!--手風琴END-->';
                    }            
                ?>
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>