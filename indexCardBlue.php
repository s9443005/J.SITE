    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-people px-3 text-info"></i>顧客</h5>
            <?php
            $sql = "SELECT count(*) as totalCustomers FROM customers";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站顧客數：" . $row['totalCustomers'] . "位</p>";
            ?>
            <a href="customersAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div>
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-boxes px-3 text-info"></i></i>產品線</h5>
            <?php
            $sql = "SELECT count(*) as totalproductlines FROM productlines";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站產品線：" . $row['totalproductlines'] . "條</p>";
            ?>
            <a href="productLinesAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div>
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-box-seam px-3 text-info"></i></i>產品</h5>
            <?php
            $sql = "SELECT count(*) as totalproducts FROM products";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站產品數：" . $row['totalproducts'] . "項</p>";
            ?>
            <a href="productsAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div>
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i></i>訂單</h5>
            <?php
            $sql = "SELECT count(*) as totalorders FROM orders";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站訂單數：" . $row['totalorders'] . "張</p>";
            ?>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div>
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-coin px-3 text-info"></i>支付</h5>
            <?php
            $sql = "SELECT count(*) as totalpayments FROM payments";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站支付記錄：" . $row['totalpayments'] . "筆</p>";
            ?>
            <a href="paymentsAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div>
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-house-door-fill px-3 text-info"></i>分公司管理</h5>
            <?php
            $sql = "SELECT count(*) as totaloffices FROM offices";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站分公司數：" . $row['totaloffices'] . "家</p>";
            ?>
            <a href="officesAll.php" class="btn btn-primary">更多...</a>
        </div>
    </div>
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-person-vcard px-3 text-info"></i>內部員工</h5>
            <?php
            $sql = "SELECT count(*) as totalemployees FROM employees";
            $result = $conn->query($sql);
            $row    = $result->fetch_assoc();
            echo "<p class='card-text'>J站員工數：" . $row['totalemployees'] . "位</p>";
            ?>
            <a href="employeesAll.php" class="btn btn-primary" data-bs-title="This top tooltip is themed via CSS variables.">更多...</a>
        </div>
    </div>

    <!--總收款項文字BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
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
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
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
