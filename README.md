# J站後台管理系統
## 建立空白首頁-index.php
* 先將頁面建立起來，共有2支PHP，以下為 index.php，其中有include sidebar.php做為邊欄選單
```
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
      <title>Document</title>
  </head>
  <body>
  <div class="container-fluid">
      <div class="row flex-nowrap">
          <!-- 這裡include sidebar.php -->
          <?php include "sidebar.php" ?>
          <!-- 結束include sidebar.php -->
          <div class="col py-3">
                  網頁內容放這裡
                  <! 以下三個 /div 要放到 include 我的程式裡
          </div>
      </div>
  </div>
  </body>
  </html>
```
* sidebar.php內容如下
* 這裡要講一下 BOOTSTRAP5 將整個頁面當成一個 CONTAINER 的觀念
```
      <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-5 d-none d-sm-inline">J站後台管理系統</span>
            </a>
            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="nav-item">
                    <a href="#" class="nav-link align-middle px-0">
                        <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">本站儀表板</span>
                    </a>
                </li>

                <li>
                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">顧客管理</span> </a>
                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">新增顧客</span> 1 </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">查詢顧客</span> 2 </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                        <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">產品管理</span></a>
                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">新增產品</span> 1</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">查詢產品</span> 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">訂單管理</span> </a>
                        <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                        <li class="w-100">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">新增訂單</span> 1</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">管理訂單</span> 2</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">管理訂單</span> 3</a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">管理訂單</span> 4</a>
                        </li>
                    </ul>
                </li>
                <!-- li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                </li -->
                <!-- li>
                    <a href="#" class="nav-link px-0 align-middle">
                        <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                </li -->
            </ul>
            <hr>
            <div class="dropdown pb-4">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/s9443005.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                    <span class="d-none d-sm-inline mx-1">JOSEPH CW SHIH</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="#">專案</a></li>
                    <li><a class="dropdown-item" href="#">設定</a></li>
                    <li><a class="dropdown-item" href="#">個人檔案</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">登出</a></li>
                </ul>
            </div>
        </div>
      </div>
```
## 使用CARD建立儀表板，顯示顧客、員工、分公司.....總數
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <!-- 這裡include sidebar.php -->
        <?php include "sidebar.php" ?>
        <!-- 結束include sidebar.php -->
        <div class="col py-3">
            網頁內容放這裡
            <!-- 以下放 card -->
            <div class="row">
                <!-- J站顧客卡 -->
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">J站顧客</h5>
                            <p class="card-text">顧客總數
                                <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "classicmodels";
                        
                                    // 建立連線
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // 檢查連線
                                    if ($conn->connect_error) {
                                    die("<p>連線失敗" . date("Y-m-d H;i:s") . "</p>" . $conn->connect_error);
                                    }
                                    $sql = "select count(*) as totalcustomers from customers;";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                          echo $row["totalcustomers"] . "<br>查詢時間：" . date("Y-m-d H;i:s");
                                        }
                                      } else {
                                        echo "unknown ERROR!";
                                      }
                                    // 結束連線
                                    $conn->close();
                                    // echo "<p>結束連線" . date("Y-m-d H;i:s") . "<p>";
                                ?>
                            </p>
                            <a href="#" class="btn btn-primary">前往顧客管理</a>
                        </div>
                    </div>
                </div>
                <! 以下三個 /div 要放到 include 我的程式裡>
        </div>
    </div>
</div>
</body>
</html>
```
