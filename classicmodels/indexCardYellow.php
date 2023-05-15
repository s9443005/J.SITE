    <!--總收款項文字BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ffff00)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-coin px-3 text-info"></i>支付</h5>
            <?php
            $sql = "SELECT sum(amount) as totalPayments FROM payments";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站總收款項：" . number_format($row['totalPayments']) . "元</p>";
            ?>
            <a href="paymentsAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div><!--總收款項文字END-->
    
    <!--總銷售文字BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ffff00)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "SELECT sum(quantityOrdered*priceEach) as totalSales FROM orderdetails";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站總銷售金額：" . number_format($row['totalSales']) . "元</p>";
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
        </div><!--總銷售文字END-->
    </div>

    <!--產品線內產品數BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ffff00)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "SELECT productLine, count(productCode) as countProducts FROM products group by productLine;";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    echo $row['productLine']."--".$row['countProducts']."項</br>";
                };
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div><!--產品線內產品數END-->

    <!--分公司內員工BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ffff00)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "SELECT officeCode, count(employeeNumber) as countEmployees FROM employees group by officeCode;";
            $result = $conn->query($sql);
            if ($result->num_rows >0){
                while($row = $result->fetch_assoc()){
                    echo "分公司".$row['officeCode']."--".$row['countEmployees']."人</br>";
                };
            }
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div><!--分公司內員工END-->


    

