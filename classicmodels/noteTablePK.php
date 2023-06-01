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
                <h1>資料庫的完整性規則</h1><hr>

                <div class="accordion accordion-flush" id="accordionFlushExample"><!--手風琴BEGIN-->

                    <div class="accordion-item"><!--第1項-->
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        實體完整性規則(Entity Integrity Rule)
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><p class='mx-3'>指在單一資料表中，主索引鍵必須要具有【唯一性】並且也不可以為空值 (NULL)。</p></div>
                        </div>
                    </div>                

                    <div class="accordion-item"><!--第2項-->
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        參考完整性規則(Referential Integrity Rule)
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p class='mx-3'>指在兩個資料表中，次要資料表的外鍵(FK)的資料欄位值，一定要存在於主要資料表的主鍵(PK)中的資料欄位值。</p>
                            <p class='mx-3'>若有一筆記錄存在其它表格來參照，也就是說該筆記錄的主鍵為其它表格中的外來鍵，便無法刪除。</p>
                            <p class='mx-3'>例如 分公司表格內1-7都無法刪除成功，因為員工表格裡employee.officeCode欄位，參照office.officeCode。</p>
                            <p><pre><code class='text-dark'>
        MariaDB [(none)]> 
        MariaDB [(none)]> use classicmodels; 
        <span class='text-info'>Database changed</span>
        
        MariaDB [classicmodels]> select * from offices;
        +------------+---------------+------------------+--------------------------+--------------+------------+-----------+------------+-----------+
        | officeCode | city          | phone            | addressLine1             | addressLine2 | state      | country   | postalCode | territory |
        +------------+---------------+------------------+--------------------------+--------------+------------+-----------+------------+-----------+
        | 1          | San Francisco | +1 650 219 4782  | 100 Market Street        | Suite 300    | CA         | USA       | 94080      | NA        |
        | 10         | 台中市        | 886-2-82093211   | 中山南路1號              | 台中市東區   |            | 中華民國  | 40011      | 亞太      |
        | 11         | 新北市        | 886-2-82093211   | 中山南路1號              | 新北市板橋區 |            | 中華民國  | 10011      | 亞太      |
        | 2          | Boston        | +1 215 837 0825  | 1550 Court Place         | Suite 102    | MA         | USA       | 02107      | NA        |
        | 20         | Boston        | +1 215 837 0825  | 1550 Court Place         | Suite 102    | MA         | USA       | 02107      | NA        |
        | 3          | NYC           | +1 212 555 3000  | 523 East 53rd Street     | apt. 5A      | NY         | USA       | 10022      | NA        |
        | 4          | Paris         | +33 14 723 4404  | 43 Rue Jouffroy D'abbans | NULL         | NULL       | France    | 75017      | EMEA      |
        | 5          | Tokyo         | +81 33 224 5000  | 4-1 Kioicho              | NULL         | Chiyoda-Ku | Japan     | 102-8578   | Japan     |
        | 6          | Sydney        | +61 2 9264 2451  | 5-11 Wentworth Avenue    | Floor #2     | NULL       | Australia | NSW 2010   | APAC      |
        | 7          | London        | +44 20 7877 2041 | 25 Old Broad Street      | Level 7      | NULL       | UK        | EC2N 1HN   | EMEA      |
        | 8          | 台北市        | 886-2-82093211   | 中山南路1號              | 台北市中正區 |            | 中華民國  | 10011      | 亞太      |
        | 9          | 桃園市        | 886-2-82093211   | 中山南路1號              | 桃園市桃園區 |            | 中華民國  | 30011      | 亞太      |
        +------------+---------------+------------------+--------------------------+--------------+------------+-----------+------------+-----------+
        12 rows in set (0.001 sec)
        
        MariaDB [classicmodels]> delete from offices where officeCode='20';
        <span class='text-info'>Query OK, 1 row affected (0.009 sec)</span><span class='bg-warning text-dard'>可以成功刪除</span>
        
        MariaDB [classicmodels]> delete from offices where officeCode='2'; 
        <span class='text-danger me-5'>ERROR 1451 (23000): Cannot delete or update a parent row: a foreign key constraint fails (`classicmodels`.`employees`, 
        CONSTRAINT `employees_ibfk_2` FOREIGN KEY (`officeCode`) REFERENCES `offices` (`officeCode`))</span><span class='bg-warning text-dard'>無法刪除</span>
        
        MariaDB [classicmodels]> describe offices;
        +--------------+-------------+------+-----+---------+-------+
        | Field        | Type        | Null | Key | Default | Extra |
        +--------------+-------------+------+-----+---------+-------+
        | officeCode   | varchar(10) | NO   | PRI | NULL    |       |
        | city         | varchar(50) | NO   |     | NULL    |       |
        | phone        | varchar(50) | NO   |     | NULL    |       |
        | addressLine1 | varchar(50) | NO   |     | NULL    |       |
        | addressLine2 | varchar(50) | YES  |     | NULL    |       |
        | state        | varchar(50) | YES  |     | NULL    |       |
        | country      | varchar(50) | NO   |     | NULL    |       |
        | postalCode   | varchar(15) | NO   |     | NULL    |       |
        | territory    | varchar(10) | NO   |     | NULL    |       |
        +--------------+-------------+------+-----+---------+-------+
        9 rows in set (0.025 sec)

        MariaDB [classicmodels]> describe employees;
        +----------------+--------------+------+-----+---------+-------+
        | Field          | Type         | Null | Key | Default | Extra |
        +----------------+--------------+------+-----+---------+-------+
        | employeeNumber | int(11)      | NO   | PRI | NULL    |       |
        | lastName       | varchar(50)  | NO   |     | NULL    |       |
        | firstName      | varchar(50)  | NO   |     | NULL    |       |
        | extension      | varchar(10)  | NO   |     | NULL    |       |
        | email          | varchar(100) | NO   |     | NULL    |       |
        | officeCode     | varchar(10)  | NO   | MUL | NULL    |       |
        | reportsTo      | int(11)      | YES  | MUL | NULL    |       |
        | jobTitle       | varchar(50)  | NO   |     | NULL    |       |
        +----------------+--------------+------+-----+---------+-------+
        8 rows in set (0.030 sec)
        MariaDB [classicmodels]>
                            </code></pre></p>
                        </div>
                        </div>
                    </div>


                    <div class="accordion-item"><!--第3項-->
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        值域完整性規則(Domain Integrity Rule)
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><p>指在單一資料表中，同一資料行中的資料屬性必須要相同。</p></div>
                        </div>
                    </div>
                </div><!--手風琴ENG-->



            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>