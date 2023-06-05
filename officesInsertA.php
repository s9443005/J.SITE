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
                <h1>分公司資料新增結果</h1><hr>
                <?php include "connectDB.php"; ?>
                <!--重點：接收$_POST['參數']，寫成INSERT INTO指令-->
                <?php
                    //$sql  = "DELETE FROM offices WHERE officeCode='10';";
                    //$result = $conn->query($sql);

                    $officeCode = $city = $phone = $addressLine1 = $addressLine2 = $state = $country = $country = $postalCode = $territory = "";

                    $officeCode=    $_POST["officeCode"];
                    $city=          $_POST["city"];
                    $phone=         $_POST["phone"];
                    $addressLine1=  $_POST["addressLine1"];
                    $addressLine2=  $_POST["addressLine2"];
                    $state      =   $_POST["state"];
                    $country    =   $_POST["country"];
                    $postalCode =   $_POST["postalCode"];
                    $territory  =   $_POST["territory"];

                    $sql  = "INSERT INTO offices (officeCode, city, phone, addressLine1, addressLine2, state, country, postalCode, territory) ";
                    $sql .= "VALUES ('" . $officeCode . "', '". $city . "', '". $phone . "', '". $addressLine1 . "', '". $addressLine2 . "', '";
                    $sql .= $state . "', '". $country . "', '". $postalCode . "', '". $territory . "');";
                    //echo $sql;
                    if (!($result = $conn->query($sql))) {
                        echo $conn->error;
                        die("<p class='text-danger'>新增資料失敗</p>");
                    }
                    $sql = "SELECT * FROM offices WHERE officeCode='".$officeCode."';";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo "<p>" . $row["officeCode"] . $row["city"] . $row["phone"] . $row["addressLine1"] . $row["country"] . $row["postalCode"] . $row["territory"] . "</p>";

                ?>
                <div><a href="officesInsertAForm.php" class="btn btn-primary m-3">回上頁</a></div>
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>