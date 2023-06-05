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
                <h1>員工查詢-詳細</h1><hr>
                <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" id="employeeNumberForm" class="m-5">
                    <div class="mb-3 col-2">
                        <label for="offices" class="form-label">請選擇員工</label>
                        <select class="form-select" id="employeeNumber" name="employeeNumber" size="1">
                            <?php include "connectDB.php"; ?>
                            <?php
                            $sql = "SELECT * FROM employees ORDER BY employeeNumber;";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0 ){
                                while ($row= $result->fetch_assoc()) {
                                    echo '<option value="'  .$row['employeeNumber']. '">' .$row['employeeNumber'].' '.$row['firstName'].' '.$row['lastName'].'</option>';
                                }
                            }
                            ?>
                        </select>
                        <button type="submit" class="btn btn-primary text-white my-2">提交查詢</button>
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
                <div class="row"><!--右欄ROW開始-->
                <?php
                    $sql  = "SELECT * FROM offices, employees WHERE offices.officeCode=employees.officeCode and employeeNumber='".$employeeNumber."';";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                ?>
                            <img class="col-sm-4 col-md-2 img-thumbnail" style="max-height: 100%; max-width=100%" src="<?php echo $row['employeePhoto']; ?>" alt="<?php echo $row['firstName']; ?>">
                            <div class="col-sm-8 col-md-10">
                                            <div class="fs-4 text-primary"><?php echo $row['firstName']." ".$row['lastName']; ?></div>
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
                    }            
                ?><!--右欄ROW結束-->
            </div><!-- 邊欄右END -->
            <?php include "disconnectDB.php"; ?>
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>