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
            <h1>分公司記錄修改</h1><hr>
            <div class="accordion" id="accordionExample"><!-- 手風琴BEGIN -->
            <?php include "connectDB.php"; ?>
            <?php
            $sql = "SELECT * FROM offices where officeCode = '2';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<form>";
                echo "</form>";
            } else{
                echo "發生錯誤，無記錄顯示！"
            }
            ?>

            <?php


            ?>
            <?php include "disconnectDB.php"; ?>
            </div><!-- 手風琴END -->
            </div><!-- 邊欄右END -->
            

        </div><!-- ROW結束 -->
    </div><!-- CONTAINER結束 -->
</body>

</html>