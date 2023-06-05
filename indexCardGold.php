
    <!--黃金 歷年訂單文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
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
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 歷年訂單文字統計END-->

    <!--黃金 前5名熱銷產品數量文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-box-seam px-3 text-info"></i>產品</h5>
            <?php
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            $sql = "create view top5Product as SELECT productCode, sum(quantityOrdered) as orderedEachProduct FROM orderdetails group by productCode;";
            $result = $conn->query($sql);
            $sql = "SELECT * FROM top5Product order by orderedEachProduct desc limit 0,5;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p class='card-text'>熱銷TOP5產品排行榜</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td>" . $row['productCode'] . "</td><td class='px-2 text-end'>" . number_format($row['orderedEachProduct']) . "件</td></tr>";
                }
                echo "</table>";
            }
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 前5名熱銷產品數量文字統計END-->

    <!--黃金 7大產品線銷售金額文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-boxes px-3 text-info"></i>產品線</h5>
            <?php
            $sql = "DROP view if exists salesProductlines;";
            $result = $conn->query($sql);
            $sql = "create view salesProductlines as SELECT orderdetails.productCode, products.productline, priceEach*quantityOrdered as subTotalProduct ";
            $sql .= "FROM orderdetails, products, productlines ";
            $sql .= "where orderdetails.productCode=products.productCode and products.productline=productlines.productline ";
            $result = $conn->query($sql);
            $sql = "SELECT productline, sum(subTotalProduct) as salesProductLine FROM salesProductlines GROUP BY productline;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p>'7大產品線銷售金額</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productline'] . "</td><td class='text-end'>" . "$" . number_format($row['salesProductLine']) . "</td>";
                }
                echo "</table>";
            }
            $sql = "DROP view if exists salesProductlines;";
            $result = $conn->query($sql);
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 7大產品線銷售金額文字統計END-->      