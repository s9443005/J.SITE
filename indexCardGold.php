    <!--黃金 7大產品線銷售金額文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-boxes px-3 text-info"></i>產品線</h5>
            <?php
            $sql = "SELECT productlines.productLine AS productline, SUM(quantityOrdered) AS quantityByProductLine ";
            $sql .= "FROM  orderdetails, productlines, products ";
            $sql .= "WHERE orderdetails.productCode=products.productCode and products.productLine=productlines.productLine ";
            $sql .= "GROUP BY productlines.productLine; ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p>七大產品線銷售數量</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productline'] . "</td><td class='text-end'>" . number_format($row['quantityByProductLine']) . "件</td></tr>";
                }
                echo "</table>";
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 7大產品線銷售金額文字統計END-->

    <!--黃金 7大產品線銷售金額文字統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-boxes px-3 text-info"></i>產品線</h5>
            <?php
            $sql = "SELECT productlines.productLine AS productline, SUM(quantityOrdered*priceEach) AS salesByProductLines ";
            $sql .= "FROM  orderdetails, productlines, products ";
            $sql .= "WHERE orderdetails.productCode=products.productCode and products.productLine=productlines.productLine ";
            $sql .= "GROUP BY productlines.productLine; ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p>七大產品線銷售金額</p>";
                echo "<table>";
                while($row    = $result->fetch_assoc()){
                    echo "<tr><td>".$row['productline'] . "</td><td class='text-end'>" . "$" . number_format($row['salesByProductLines']) . "</td></tr>";
                }
                echo "</table>";
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 7大產品線銷售金額文字統計END-->