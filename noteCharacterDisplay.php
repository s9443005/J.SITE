<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "htmlhead.php"; ?>
    <style>
        .code_background{background-color:#ddffff;}
    </style>
</head>

<body class=>
    <div class="container-fluid">
        <div class="row flex-nowrap">

            <!-- 邊欄左BEGIN -->
            <?php include "sidebarLEFT.php"; ?><!-- 邊欄左ENG -->
            
            
            <!-- 邊欄右BEGIN -->
            <div class="col py-3">
                <h1>中文顯示實作筆記</h1><hr>
                <div class="m-5">
                    <h5 class="pt-3">以下是PHP的header()函數，它會為英文網站輸出適當的字元：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>header("Content-Type: tex/html; charset=ISO-8859-1");</p>
                        <p>header("Content-Language: en");</p>
                    </div>

                    <h5 class="pt-3">對應HTML為：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>&lt;html lang="en"&gt;</p>
                        <p>&lt;meta charset="ISO-8859-1"&gt;</p>
                    </div>

                    <h5 class="pt-3">以下是PHP的header()函數，它會為日文網站輸出適當的字元：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>header("Content-Type: tex/html; charset=UTF-8");</p>
                        <p>header("Content-Language: ja");</p>
                    </div>

                    <h5 class="pt-3">對應HTML為：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>&lt;html lang="ja"&gt;</p>
                        <p>&lt;meta charset="UTF-8"&gt;</p>
                    </div>

                    <h5 class="pt-3">中文網站輸出適當字元，應作如是吧：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>header("Content-Type: tex/html; charset=UTF-8");</p>
                        <p>header("Content-Language: zh");</p>
                    </div>

                    <h5 class="pt-3">對應HTML為：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>&lt;html lang="zh"&gt;</p>
                        <p>&lt;meta charset="UTF-8"&gt;</p>
                        <p>以上中文的部分沒有嚴謹地測試過，各種經驗仍然很破碎。</p>
                    </div>

                    <h5 class="pt-3">PHP中使用多byte字串函式：</h5>
                    <div  class="y-3 rounded code_background">
                        <ul>沒有經驗連結：
                            <li>設定程序使用--enable-mbstring、</li>
                            <li>php.ini中啟用php_mbstring.dll、</li>
                            <li>mb_stripos() versus strpos()</li>
                            <li>gettext() + 多語言目錄結構...等等。</li>
                        </ul>
                    </div>
                       
                    <h5 class="pt-3">網友經驗1：</h5>
                    <div  class="y-3 rounded code_background">
                        <ul>
                            <li>建立TABLE時選擇 utf8_unicode_ci、</li>
                            <li>寫程式connectDB時，加上mysql_query("SET NAMES 'UTF8'")、</li>
                            <li>讀取結果時也加上、</li>
                            <li>編輯器使用UTF8...等等。</li>
                        </ul>
                    </div>

                    <h5 class="pt-3">MySQL手冊說：</h5>
                    <div  class="y-3 rounded code_background">
                        <p>The server character set and collation can be determined from the values of the <span style="color:#f00;">character_set_server</span> and <span style="color:#f00;">collation_server</span> system variables.</p>
                        <p>The character set and collation of the default database can be determined from the values of the <span style="color:#f00;">character_set_database</span> and <span style="color:#f00;">collation_database</span> system variables.</p>
                        <p>For Example :   system variables指的就是 X<br>
                            SET character_set_client = x;<br>
                            SET character_set_results = x;<br>
                            SET character_set_connection = x;
                        </p>
                    </div>    

                    <h5 class="pt-3">在MYSQL CLI 查詢字元設定，應該可以參考參考</h5>
                    <div class="y-3 rounded code_background">
                    <pre><code>
MariaDB [(none)]> SET NAMES 'UTF8';
Query OK, 0 rows affected (0.000 sec)

MariaDB [(none)]> SHOW VARIABLES LIKE '%collation%';
+----------------------+--------------------+
| Variable_name        | Value              |
+----------------------+--------------------+
| collation_connection | utf8_general_ci    |
| collation_database   | utf8mb4_general_ci |
| collation_server     | utf8mb4_general_ci |
+----------------------+--------------------+
3 rows in set (0.001 sec)

MariaDB [(none)]> SET CHARACTER SET UTF8;
Query OK, 0 rows affected (0.001 sec)

MariaDB [(none)]> SHOW VARIABLES LIKE '%collation%';
+----------------------+--------------------+
| Variable_name        | Value              |
+----------------------+--------------------+
| collation_connection | utf8mb4_general_ci |
| collation_database   | utf8mb4_general_ci |
| collation_server     | utf8mb4_general_ci |
+----------------------+--------------------+
3 rows in set (0.001 sec)

MariaDB [(none)]> SHOW VARIABLES LIKE '%character%';
+--------------------------+--------------------------------+
| Variable_name            | Value                          |
+--------------------------+--------------------------------+
| character_set_client     | utf8                           |
| character_set_connection | utf8mb4                        |
| character_set_database   | utf8mb4                        |
| character_set_filesystem | binary                         |
| character_set_results    | utf8                           |
| character_set_server     | utf8mb4                        |
| character_set_system     | utf8                           |
| character_sets_dir       | C:\xampp\mysql\share\charsets\ |
+--------------------------+--------------------------------+
8 rows in set (0.001 sec)

MariaDB [(none)]>
                    </code></pre>
                    </div>

                    <h5 class="pt-3">最後結果是這樣的：</h5>
                    <div  class="y-3 rounded code_background">
                    <pre><code>
/*Table structure for table `offices` */

DROP TABLE IF EXISTS `offices`;

CREATE TABLE `offices` (
  `officeCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `territory` varchar(10) NOT NULL,
  PRIMARY KEY (`officeCode`)
) ENGINE=InnoDB DEFAULT CHARSET=<span style="color:#f00;">latin1;</span>改成<span style="color:#f00;">utf8</span>暫時一切都解決。
                    </code></pre>
                    </div>

                </div>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>