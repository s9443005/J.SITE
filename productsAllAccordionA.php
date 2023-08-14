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
                <h1>以產品線手風琴總覽產品項目</h1><hr>
                <?php include "connectDB.php"; ?>

                <?php
                    $sql ="SELECT * FROM products;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        echo '<div class="accordion accordion-flush" id="accordionFlushExample"><!--手風琴BEGIN-->';
                        $i=0;
                        while($row = $result->fetch_assoc()) {
                            $i=$i+1;
                ?>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-heading<?php echo $i; ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
                                    <?php
                                        echo "<div>產品編號" . $row['productCode'] . "</div>";
                                        echo "<div class='ms-5'>名稱："   . $row['productName'] . "</div>";
                                    ?>
                                </button>
                              </h2>
                              <div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $i; ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php
                                        echo $row['productScale'];
                                        echo $row['productVendor'];
                                        echo $row['productDescription'];
                                        echo $row['quantityInStock'];
                                        echo $row['buyPrice'];
                                        echo $row['MSRP'];
                                        echo $row['productLine'];
                                    ?>
                                </div>
                              </div>
                            </div>
                <?php
                        }
                        echo '</div><!--手風琴END-->';
                    }            
                ?>
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>