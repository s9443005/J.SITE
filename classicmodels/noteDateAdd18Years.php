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
                <h1>日期加18年</h1><hr>
                <div class='m-5 p-5'>
                    <h5>楔子</h5>
                    <p class='m-3'>這是一個有趣的問題。經典資料庫裡的訂單為2003-2005年，資料看起違和感很重。<br>所以我想把它加個18年，也接近陳述這個問題的時間--2023.05.07。</p>
                    <h5>SQL指令</h5>
                    <p class='m-3'>UPDATE orders set <br>orderDate=Date_Add(orderdate, interval 18 year), <br>requiredDate=Date_Add(requiredDate, interval 18 year), <br>shippedDate=Date_Add(shippedDate, interval 18 year);</p>
                    <h5>執行它！</h5>
                </div>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>