<div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fs-2 bi-box-seam px-3 text-info"></i></i>產品</h5>
                            <?php
                            $sql = "drop view if exists saleProductQuantity;";
                            $result = $conn->query($sql); /* 若有VIEW先DROP */
                            $sql  = "create view saleProductQuantity as ";
                            $sql .= "select orderdetails.productCode, productName, sum(quantityOrdered) as totalQuantityOrdered ";
                            $sql .= "from orderdetails, products ";
                            $sql .= "where orderdetails.productCode=products.productCode ";
                            $sql .= "group by productCode;";
                            $result = $conn->query($sql); /* 建立+VIEW先DROP */
                            $sql  = "select productCode, productName, max(totalQuantityOrdered) as maxQuantityOrdered from saleProductQuantity;";
                            $result = $conn->query($sql);
                            $row    = $result->fetch_assoc();
                            echo "<p class='card-text'>J站最熱銷商品：" . $row['productName'] . "</p>";
                            echo "<p class='card-text'>己賣出：" . $row['maxQuantityOrdered'] . "</p>";
                            $sql = "drop view if exists saleProductQuantity;";
                            $result = $conn->query($sql); /* 用完刪除 */
                            ?>
                            <a href="#" class="btn btn-primary">更多...</a>
                        </div>
                    </div>
                    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fs-2 bi-box-seam px-3 text-info"></i></i>產品</h5>
                            <?php
                            $sql = "drop view if exists saleProductAvenues;";
                            $result = $conn->query($sql); /* 若有VIEW先DROP */
                            $sql  = "create view saleProductAvenues as ";
                            $sql .= "select orderdetails.productCode, productName, sum(quantityOrdered*priceEach) as totalPerProductAvenues ";
                            $sql .= "from orderdetails, products ";
                            $sql .= "where orderdetails.productCode=products.productCode ";
                            $sql .= "group by productCode;";
                            $result = $conn->query($sql); /* 建立+VIEW先DROP */
                            $sql  = "select productCode, productName, max(totalPerProductAvenues) as maxProductAvenues from saleProductAvenues;";
                            $result = $conn->query($sql);
                            $row    = $result->fetch_assoc();
                            echo "<p class='card-text'>J站最收益商品：" . $row['productName'] . "</p>";
                            echo "<p class='card-text'>收入：\$" . $row['maxProductAvenues'] . "</p>";
                            $sql = "drop view if exists saleProductAvenues;";
                            $result = $conn->query($sql); /* 用完刪除 */ 
                            ?>
                            <a href="#" class="btn btn-primary">更多...</a>
                        </div>
                    </div>                    
                    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fs-2 bi-people px-3 text-info"></i></i>顧客</h5>
                            <?php
                            $sql = "drop view if exists customerOrderCount;";
                            $result = $conn->query($sql); /* 若有VIEW先DROP */
                            $sql  = "create view customerOrderCount as ";
                            $sql .= "select orders.customerNumber, customerName, count(orderNumber) as ordersCount ";
                            $sql .= "from orders, customers ";
                            $sql .= "where orders.customerNumber=customers.customerNumber ";
                            $sql .= "group by orders.customerNumber;";
                            $result = $conn->query($sql); /* 建立+VIEW先DROP */
                            $sql  = "select customerNumber, customerName, max(ordersCount) as maxOrdersCount from customerOrderCount;";
                            $result = $conn->query($sql);
                            $row    = $result->fetch_assoc();
                            echo "<p class='card-text'>J站最給力顧客編號：" . $row['customerNumber'] . "</p>";
                            echo "<p class='card-text'>姓名：" . $row['customerName'] . "</p>";
                            echo "<p class='card-text'>己成交：" . $row['maxOrdersCount'] . "單</p>";
                            $sql = "drop view if exists customerOrderCount;";
                            $result = $conn->query($sql); /* 用完刪除 */
                            ?>
                            <a href="#" class="btn btn-primary">更多...</a>
                        </div>
                    </div>
                    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #ff88ff)">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fs-2 bi-person-vcard px-3 text-info"></i></i>員工</h5>
                            <?php
                            $sql = "drop view if exists transaction4sales;";
                            $result = $conn->query($sql); /* 若有VIEW先DROP */
                            $sql  = "create view transaction4sales as ";
                            $sql .= "select sum(quantityOrdered*priceEach) as salePerEmployee, ";
                            $sql .= "       orderdetails.orderNumber, orders.customerNumber, ";
                            $sql .= "       customers.salesRepEmployeeNumber, ";
                            $sql .= "       employees.lastname, employees.firstname ";
                            $sql .= "from orderdetails, orders, customers, employees ";
                            $sql .= "where orderdetails.orderNumber = orders.orderNumber and ";
                            $sql .= "      orders.customerNumber    = customers.customerNumber and ";
                            $sql .= "      employees.employeeNumber = customers.salesRepEmployeeNumber ";
                            $sql .= "group by salesRepEmployeeNumber;";
                            $result = $conn->query($sql); /* 建立+VIEW先DROP */
                            $sql  = "select salesRepemployeeNumber, firstname, lastname, max(salePerEmployee) as MaxSale from transaction4sales;";
                            $result = $conn->query($sql);
                            $row    = $result->fetch_assoc();
                            echo "<p class='card-text'>J站最紅業務編號：" . $row['salesRepemployeeNumber'] . "</p>";
                            echo "<p class='card-text'>姓名：" . $row['firstname'] . " " . $row['lastname'] . "</p>";
                            echo "<p class='card-text'>己成交：" . $row['MaxSale'] . "元</p>";
                            $sql = "drop view if exists transaction4sales;";
                            $result = $conn->query($sql); /* 用完刪除 */
                            ?>
                            <a href="#" class="btn btn-primary">更多...</a>
                        </div>
                    </div>