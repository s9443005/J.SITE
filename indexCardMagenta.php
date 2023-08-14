

        <!--黃金 歷年訂單文字統計BEGIN-->
        <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "select YEAR(orderDate) as Year, count(orderNumber) as countOrdersByYear from orders group by year(orderDate);";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p class='card-text'>歷年訂單數目</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td>" . $row['Year'] . "年</td><td class='px-2 text-end'>" . number_format($row['countOrdersByYear']) . "單</td></tr>";
                }
                echo "</table>";
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 歷年訂單文字統計END-->

   


    <!--黃金 前5名熱銷產品數量文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-person-vcard px-3 text-info"></i>訂單/銷售</h5>
            <?php
            $sql = "SELECT productCode, SUM(quantityOrdered) as QuantityByProductCode FROM orderdetails ";
            $sql .= "group by productCode order by QuantityByProductCode DESC Limit 0, 5;";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                echo "<p class='card-text'>熱銷TOP5產品排行榜</p>";
                echo "<table>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productCode']. "</td><td class='px-2 text-end'>" . number_format($row['QuantityByProductCode'])."件</td></tr>";
                };
                echo "</table>";
            }
            ?>
            <a href="" class="btn btn-primary">更多...</a>
        </div>
    </div><!--黃金 前5名熱銷產品數量文字統計END-->  


    <!--黃金 前5名熱銷產品金額統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-person-vcard px-3 text-info"></i>訂單/銷售</h5>
            <?php
            $sql =  "SELECT productCode, SUM(quantityOrdered) as QuantityByProductCode, ";
            $sql .= "SUM(quantityOrdered*priceEach) as RevenueByProductCode FROM orderdetails ";
            $sql .= "group by productCode order by QuantityByProductCode DESC Limit 0, 5;";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                echo "<p class='card-text'>熱銷TOP5產品排行榜-收益</p>";
                echo "<table>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productCode']. "</td><td class='px-2 text-end'>" . number_format($row['RevenueByProductCode'])."元</td></tr>";
                };
                echo "</table>";
            }
            ?>
            <a href="" class="btn btn-primary">更多...</a>
        </div>
    </div><!--黃金 前5名熱銷產品金額統計END-->      

    <!--黃金 前5名產品金額排行榜BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-person-vcard px-3 text-info"></i>訂單/銷售</h5>
            <?php
            $sql =  "SELECT productCode, SUM(quantityOrdered) as QuantityByProductCode, ";
            $sql .= "SUM(quantityOrdered*priceEach) as RevenueByProductCode FROM orderdetails ";
            $sql .= "group by productCode order by RevenueByProductCode DESC Limit 0, 5;";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                echo "<p class='card-text'>TOP5產品收益排行榜</p>";
                echo "<table>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productCode']. "</td><td class='px-2 text-end'>" . number_format($row['RevenueByProductCode'])."元</td></tr>";
                };
                echo "</table>";
            }
            ?>
            <a href="" class="btn btn-primary">更多...</a>
        </div>
    </div><!--黃金 前5名產品金額排行榜END-->

    <!--黃金 前5名產品金額排行榜BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-person-vcard px-3 text-info"></i>訂單/銷售</h5>
            <?php
            $sql =  "SELECT productCode, SUM(quantityOrdered) as QuantityByProductCode, ";
            $sql .= "SUM(quantityOrdered*priceEach) as RevenueByProductCode FROM orderdetails ";
            $sql .= "group by productCode order by RevenueByProductCode DESC Limit 0, 5;";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                echo "<p class='card-text'>TOP5產品收益排行榜</p>";
                echo "<table>";
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productCode']. "</td><td class='px-2 text-end'>" . number_format($row['QuantityByProductCode'])."件
                    </td></tr>";
                };
                echo "</table>";
            }
            ?>
            <a href="" class="btn btn-primary">更多...</a>
        </div>
    </div><!--黃金 前5名產品金額排行榜END-->


    <!--黃金 2021歷月訂單文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "select YEAR(orderDate) AS Year, MONTH(orderDate) AS Month, count(orderNumber) AS countOrdersByMonth from orders group by Year, Month HAVING Year='2021';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p class='card-text'>2021年逐月訂單數目</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td class='px-2 text-end'>" . $row['Month'] . "月</td><td class='px-2 text-end'>" . number_format($row['countOrdersByMonth']) . "單</td></tr>";
                }
                echo "</table>";
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 2021歷月訂單文字統計END-->  
    
    <!--黃金 2022歷月訂單文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "select YEAR(orderDate) AS Year, MONTH(orderDate) AS Month, count(orderNumber) AS countOrdersByMonth from orders group by Year, Month HAVING Year='2022';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p class='card-text'>2022年逐月訂單數目</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td class='px-2 text-end'>" . $row['Month'] . "月</td><td class='px-2 text-end'>" . number_format($row['countOrdersByMonth']) . "單</td></tr>";
                }
                echo "</table>";
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 2022歷月訂單文字統計END-->  

    <!--黃金 2023歷月訂單文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "select YEAR(orderDate) AS Year, MONTH(orderDate) AS Month, count(orderNumber) AS countOrdersByMonth from orders group by Year, Month HAVING Year='2023';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p class='card-text'>2023年逐月訂單數目</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td class='px-2 text-end'>" . $row['Month'] . "月</td><td class='px-2 text-end'>" . number_format($row['countOrdersByMonth']) . "單</td></tr>";
                }
                echo "</table>";
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 2023歷月訂單文字統計END-->      

