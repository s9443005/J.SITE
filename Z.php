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
                <h1>員工總覽-卡片</h1><hr>
                <div class="row"><!--右欄ROW卡片BEGIN-->
                <?php include "connectDB.php"; ?>

                <?php
                    $sql ="SELECT * FROM employees, offices WHERE employees.officeCode=offices.officeCode;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                ?>
                    <!--每張卡片BEGIN-->
                        <div class="card m-3" style="width: 15rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
                            <img src="<?php echo $row['employeePhoto']; ?>" class="card-img-top img-thumbnail" alt="<?php echo $row['firstName']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['jobTitle']; ?></h5>
                                <p class="card-text">
                                    <div><span class="me-3">姓名</span><?php echo $row['firstName'] . " " .$row['lastName']; ?></div>
                                    <div><span class="me-3">地點</span><?php echo $row['city']; ?></div>
                                </p>
                                <a href="#" class="btn btn-primary" >更多...</a>
                            </div>
                        </div>                
                    <!--每張卡片END-->
                <?php
                        }
                    }            
                ?>
                </div><!--右欄ROW卡片END-->
                <?php include "disconnectDB.php"; ?>

            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>