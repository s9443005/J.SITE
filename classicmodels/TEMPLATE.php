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
                <h1>標題文字</h1><hr>
                <?php include "connectDB.php"; ?>

                <?php
                    $sql ="";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        while($row = $result->fetch_assoc()) {
                        }
                    }            
                ?>
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>