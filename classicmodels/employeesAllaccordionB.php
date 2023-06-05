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
                <h1>員工總覽-手風琴&表格</h1><hr>
                <div class="accordion accordion-flush" id="accordionFlushExample"><!--手風琴BEGIN-->
                <?php include "connectDB.php"; ?>

                <?php
                    $sql ="SELECT * FROM employees, offices WHERE employees.officeCode=offices.officeCode;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $i= 0;
                        while($row = $result->fetch_assoc()) {
                            $i = $i + 1;
                            echo '<div class="accordion-item"><!--手風琴項目BEGIN-->';
                            echo '<h2 class="accordion-header" id="flush-heading'.$i.'">';
                            echo '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$i.'" aria-expanded="false" aria-controls="flush-collapse'.$i.'">';
                            echo $row['employeeNumber'].' '.$row['firstName'].' '.$row['lastName'];
                            echo '</button>';
                            echo '</h2>';
                            echo '<div id="flush-collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$i.'" data-bs-parent="#accordionFlushExample">';
                            echo '<div class="accordion-body">';
                                echo '<table class="table">';
                                echo '<tr>';
                                echo '<th class="bg-primary text-white">編號</th>';
                                echo '<th class="bg-primary text-white">姓名</th>';
                                echo '<th class="bg-primary text-white">分機</th>';
                                echo '<th class="bg-primary text-white">電子郵件</th>';
                                echo '<th class="bg-warning text-white">分公司</th>';
                                echo '<th class="bg-primary text-white">直屬主管</th>';
                                echo '<th class="bg-primary text-white">職稱</th>';
                                echo '</tr>';
                                echo '<tr>';
                                echo '<td><form method="POST" action="employeeQueryBySelectA.php"><input type="hidden" name="employeeNumber" value='.$row['employeeNumber'].'><button type="submit" class="btn" tooltip="click me">'.$row['employeeNumber'].'</button></form></td>';
                                echo '<td>'.$row['firstName'].' '.$row['lastName'].'</td>';
                                echo '<td>'.$row['extension'].'</td>';
                                echo '<td>'.$row['email'].'</td>';
                                echo '<td><form method="POST" action="officesQueryBySelectA.php">';
                                echo '<button class="btn" type="submit" name="officeCode" value='.$row['officeCode'].'>'.$row['officeCode'].$row['city'].'</button>';
                                echo '</form></td>';
                                echo '<td>'.$row['reportsTo'].'</td>';
                                echo '<td>'.$row['jobTitle'].'</td>';
                                echo '</tr>';
                                echo '</table>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div><!--手風琴項目END-->';
                        }
                    }   
                ?>
                </div><!--手風琴END-->
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>