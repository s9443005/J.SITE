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
                <h1>員工總覽-手風琴</h1><hr>
                <div class="accordion accordion-flush" id="accordionFlushExample"><!--手風琴BEGIN-->
                <?php include "connectDB.php"; ?>

                <?php
                    $sql ="SELECT * FROM employees;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $i = 0;
                        while($row = $result->fetch_assoc()) {
                            $i = $i + 1;
                            echo '<div class="accordion-item"><!--手風琴項目BEGIN-->';
                            echo '<h2 class="accordion-header" id="flush-heading'.$i.'">';
                            echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$i.'" aria-expanded="false" aria-controls="flush-collapse'.$i.'">';
                            echo $row['employeeNumber'] ." ". $row['firstName'] ." ". $row['lastName'];
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="flush-collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$i.'" data-bs-parent="#accordionFlushExample">';
                            echo '<div class="accordion-body">';
                            echo $row['firstName'].$row['lastName'].$row['extension'].$row['email'].$row['officeCode'].$row['reportsTo'].$row['jobTitle'];
                            echo '</div>';
                            echo '</div><!--手風琴項目END-->';
                        }
                    }            
                ?>
                <?php include "disconnectDB.php"; ?>
                </div><!--手風琴END-->
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>