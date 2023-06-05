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
                <h1>更新訂單日期欄位</h1><hr>
                <?php include "connectDB.php"; ?><!-- 連線DB-->
                <?php
                $sql = "select * from orders limit 0,10";     /* 編輯SQL指令  */
                $result = $conn->query($sql);       /* 執行SQL指令  */
                if ($result->num_rows > 0){         /* 筆數大於0    */
                    $row = $result->fetch_assoc();  /* 讀取下一筆   */
                    echo "<p>orderNumber".  $row['orderNumber']."</p>";
                    echo "<p>orderDate".    $row['orderDate']."</p>";
                    echo "<p>requiredDate". $row['requiredDate']."</p>";
                    echo "<p>shippedDate".  $row['shippedDate']."</p>";
                }
                ?>  
                <?php
                $sql  = "update orders ";
                $sql .= "set orderDate=Date_Add(orderdate, interval 18 year),  ";     /* 編輯SQL指令  */
                $sql .= " requiredDate=Date_Add(requiredDate, interval 18 year), " ;
                $sql .= " shippedDate=Date_Add(shippedDate, interval 18 year)" ;
                //$sql .= "where orderNumber='10100'";
                $sql .= ";";
                if ($result = $conn->query($sql)){echo "UPDATE OK!";};       /* 執行SQL指令  */
                ?>
                <?php
                $sql = "select * from orders limit 0,10";     /* 編輯SQL指令  */
                $result = $conn->query($sql);       /* 執行SQL指令  */
                if ($result->num_rows > 0){         /* 筆數大於0    */
                    $row = $result->fetch_assoc();  /* 讀取下一筆   */
                    echo "<p>orderNumber".  $row['orderNumber']."</p>";
                    echo "<p>orderDate".    $row['orderDate']."</p>";
                    echo "<p>requiredDate". $row['requiredDate']."</p>";
                    echo "<p>shippedDate".  $row['shippedDate']."</p>";
                }
                ?>
                <?php include "disconnectDB.php"; ?><!-- 斷線DB-->
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>