<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?>
            <!-- 邊欄左ENG -->
            
            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>員工查詢-詳細</h1><hr>
                    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" id="employeeNumberForm" class="m-5">
                        <div class="row">
                            <div class="col-xl-2 fs-4"><label for="offices" class="form-label">請選擇員工</label></div>
                            <div class="col-xl-3"><select class="form-select" id="employeeNumber" name="employeeNumber" size="1">
                                <?php include "connectDB.php"; ?>
                                <?php
                                    $sql = "SELECT * FROM employees ORDER BY employeeNumber;";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0 ){
                                        while ($row= $result->fetch_assoc()) {
                                            echo '<option value="'  .$row['employeeNumber']. '"';
                                            if (isset($_POST['employeeNumber']) && $_POST['employeeNumber']==$row['employeeNumber']) {echo 'selected';}
                                            echo '>' .$row['employeeNumber'].' '.$row['firstName'].' '.$row['lastName'].'</option>';
                                        }
                                    }
                                ?>
                            </select>
                            </div>
                            <div class="col-xl-2"><button type="submit" class="btn btn-primary text-white">提交查詢</button></div>
                        </div>
                    </form>
                <hr>
                        <?php
                        if (!($_SERVER["REQUEST_METHOD"] == "POST")) { die("沒有POST"); }
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $employeeNumber = $_POST['employeeNumber'];
                            //echo $employeeNumber;
                        }
                        ?><!--處理接收參數POST或GET-->
                        <?php
                            $sql  = "SELECT * FROM offices, employees WHERE offices.officeCode=employees.officeCode and employeeNumber='".$employeeNumber."';";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0){
                                echo '<div class="row"><!--右欄ROW開始-->';
                                $row = $result->fetch_assoc();
                        ?>
                                <img class="col-sm-8 col-md-6 col-lg-4 col-xl-3 img-thumbnail" style="height: 100%; width=100%" src="<?php echo $row['employeePhoto']; ?>" alt="<?php echo $row['firstName']; ?>">
                                <div class="col">
                                    <div><span class="fs-4 text-primary bg-warning-subtle round p-2"><?php echo $row['firstName']." ".$row['lastName']; ?></span></div>
                                    <div>編號：<?php echo $row['employeeNumber']; ?></div>
                                    <div>職稱：<?php echo $row['jobTitle']; ?></div>
                                    <div>分機：<?php echo $row['phone']." ".$row['extension']; ?></div>
                                    <div>信箱：<?php echo $row['email']; ?></div>
                                    <div>聯絡：<?php echo $row['addressLine1']." ".$row['addressLine2']." ".$row['state']." ".$row['city']." ".$row['country']." ".$row['postalCode']; ?></div>
                                    <div>駐地：<?php echo $row['city']; ?></div>
                                    <div>區域：<?php echo $row['territory']; ?></div>
                                </div>
                        <?php
                                }
                                echo '</div><!--右欄ROW結束-->';
                        ?>

                        <?php 
                            $sql  = "SELECT jobTitle, orderNumber, orderDate, customerName ";
                            $sql .= "FROM employees, customers, orders ";
                            $sql .= "WHERE customers.salesRepEmployeeNumber='".$employeeNumber."'";
                            $sql .= "AND employeeNumber=customers.salesRepEmployeeNumber ";
                            $sql .= "AND customers.customerNumber=orders.customerNumber ";
                            $sql .= "ORDER BY orders.orderDate DESC";
                            $sql .= ";";
                            //echo $sql;
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0){
                                    echo "<h4 class='mt-3'>業績表列</h4>";
                                    echo "<table class='table table-hover   '>";
                                    echo "<tr class='bg-primary text-white'>";
                                    echo "<th>訂單日期</th><th>訂單號碼</th><th>顧客姓名</th>";
                                    echo "</tr>";
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>";
                                    echo "<td>".$row['orderDate']."</td>";
                                    echo "<td>".$row['orderNumber']."</td>";
                                    echo "<td>".$row['customerName']."</td>";
                                    echo "</tr>";
                                }
                                    echo "</table>";
                            }
                            else if ($row['jobTitle'] == 'Sales Rep') {echo "無銷售業績";}
                        ?>
                        <?php include "disconnectDB.php"; ?>

            </div><!--nav-tabs結束-->
            </div><!-- 邊欄右END -->




        </div><!--row結束-->
    </div><!-- container結束-->
</body>
</html>