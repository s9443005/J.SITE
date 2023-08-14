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

                <h1>經典資料庫ERD</h1><hr>
                <img src="https://www.mysqltutorial.org/wp-content/uploads/2009/12/MySQL-Sample-Database-Schema.png" alt="經典資料庫ERD">
                
                <hr>
                <H2>取得每個Employee的銷售額</H2>
                SELECT employees.employeeNumber, employees.firstName, 
                       employees.lastName, SUM(quantityOrdered*priceEach) AS saleByEmployee 
                FROM   orderdetails, orders, customers, employees  
                WHERE  orderdetails.orderNumber=orders.orderNumber and 
                       orders.customerNumber=customers.customerNumber and 
                       customers.salesRepEmployeeNumber=employees.employeeNumber 
                GROUP BY employees.employeeNumber 
                ORDER BY saleByEmployee DESC;
                <hr>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>
</html>
