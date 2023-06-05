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
            <?php include "connectDB.php"; ?>
            
            
            <!-- 邊欄右BEGIN -->
            <div class="cli py-3">
                <h1>為員工增加相片</h1><hr>
                <div class="p-5">
                    <span class="text-primary fs-3">筆記大綱</span>
                    <ul class="list-group">
                    <li class="list-group-item">使用MOONSHOT產生23張個人相片，依員工編號命名儲存在 classicmodels/img/employees 子目錄裡，共23個JPG檔。</li>
                    <li class="list-group-item">到MySQL 的 CLI，對 classicmodels 資料庫的 employees 表格，新增1個欄位 employeePhoto。</li>
                    <li class="list-group-item">將 employeePhoto 欄位的內容 update 成個人相片的檔名，例如 img/employees/1002.JPG。</li>
                    </ul>
                </div>
                <div class="p-5"><span class="text-primary fs-3">參考SQL指令如下，COPY到MySQL的CLI</span><!--A段落BEGIN-->
                    <div class="pt-2">
                        <p>ALTER TABLE employees DROP COLUMN IF EXISTS employeePhoto;</p>
                        <p>ALTER TABLE employees ADD COLUMN employeePhoto varchar(50);</p>
                        <?php
                            $sql ="SELECT employeeNumber FROM employees ORDER BY employeeNumber;";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0){
                                while($row = $result->fetch_assoc()) {
                                    echo "UPDATE employees ";
                                    echo "SET employeePhoto='img/employees/".$row['employeeNumber'].".jpg' WHERE employeeNumber='".$row['employeeNumber']."';";
                                    echo  "<br>";
                                }
                            }
                        ?>
                        <form class="pt-5">尚未完工<button class="btn bg-warning text-primary rounded-5">按我完成以上指令</button></form>
                    </div>
                </div><!--A段落END-->
                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>