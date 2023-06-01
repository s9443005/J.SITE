<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN --><?php include "sidebarLEFT.php"; ?><!-- 邊欄左ENG -->


            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>分公司資料新增</h1>
                <hr>
                <!--參考W3SCHOOL FORM VALIDATION-->


                <form action="officesInsertA.php" method="post" class="form mx-5">
                    <div class="row">
                        <div><label class="col-2">分公司編號</label><input type="text" name="officeCode" value="20" placeholder="請輸入分公司編號" class="m-2" required></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">城市</label>      <input type="text" name="city" value="Boston" placeholder="請輸入所在城市" class="m-2" required></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">電話</label>      <input type="text" name="phone" value="+1 215 837 0825" placeholder="請輸入電話" class="m-2" required></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">地址一</label>    <input type="text" name="addressLine1" value="1550 Court Place" placeholder="請輸入分公司住址" class="m-2" required></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">地址二</label>    <input type="text" name="addressLine2" value="Suite 102" placeholder="請輸入分公司住址" class="m-2"></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">州</label>        <input type="text" name="state" value="MA" placeholder="請輸入州別" class="m-2"></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">國家</label>      <input type="text" name="country" value="USA" placeholder="請輸入國家" class="m-2" required></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">郵遞區號</label>  <input type="text" name="postalCode" placeholder="請輸入郵遞區號" value="02107" class="m-2" required></div>
                    </div>
                    <div class="row">
                        <div><label class="col-2">區域</label>      <input type="text" name="territory" value="NA" placeholder="請輸入區域" class="m-2" required></div>
                    </div>
                    <button type="submit" class='btn bg-primary text-white'>新增提交</button>
                    <button type="reset" class='btn bg-primary text-white'>重設</button>
                    <div>

                </form>













            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>