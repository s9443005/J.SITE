<div class="row">
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
    </div>
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
        </div>
    </div>

</div>