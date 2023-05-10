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
            <?php include "connectDB.php"; ?>
            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>儀表板</h1>
                <hr>
                <div class="row">
                    <?php include "indexCardBlue.php"; ?>
                    <?php include "indexCardMagenta.php"; ?>
                </div>
                <?php include "disconnectDB.php"; ?>
            </div>
            <!-- 邊欄右END -->

        </div>
    </div>
</body>

</html>