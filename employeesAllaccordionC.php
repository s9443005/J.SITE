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
                <h1>員工總覽-手風琴&表格&多表格</h1><hr>
                <?php include "connectDB.php"; ?>
                <div class="accordion accordion-flush" id="accordionFlushExample"><!--手風琴BEGIN-->
                <?php
                    $sql ="SELECT * FROM employees, offices WHERE employees.officeCode=offices.officeCode;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $i = 0;
                        while($row = $result->fetch_assoc()) {
                            $i= $i + 1;
                ?>
                            <div class="accordion-item"><!--手風琴項目BEGIN-->
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                                    <?php   echo '<div class="col-4">編號 '.$row['employeeNumber'].'</div>';
                                            echo '<div class="col">姓名 '.$row['firstName']." ".$row['lastName'] . '</div>' ?>
                                </button>
                                </h2>
                                <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <img class="col-sm-4 col-md-2 img-thumbnail" src="<?php echo $row['employeePhoto']; ?>" alt="<?php echo $row['firstName']; ?>">
                                        <div class="col-sm-8 col-md-10">
                                            <div>職稱：<?php echo $row['jobTitle']; ?></div>
                                            <div>分機：<?php echo $row['extension']; ?></div>
                                            <div>信箱：<?php echo $row['email']; ?></div>
                                            <div>駐地：<?php echo $row['city']; ?></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div><!--手風琴項目END-->
                <?php
                        } //while結束
                    }//if結束
                ?>
                </div><!--手風琴END-->
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>