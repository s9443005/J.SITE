<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

        <!--選單標題-->    
        <a href="#s" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <div class='align-bottome'>
                <span class="px-2 fs-1 fst-italic fw-bold text-warning">J.site</span><span class="fs-5 d-none d-sm-inline">管理資訊系統</span>
            </div>
        </a>

        
        <!--選單BEGIN--><ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

            <!--首頁選單-->
            <li class="nav-item">
                <a href="index.php" class="nav-link align-middle px-0">
                    <i class="fs-2 bi-house-fill"></i> <span class="ms-1 d-none d-sm-inline">首頁</span>
                </a>
            </li><!--首頁選單-->

            <!--儀表板選單-->
            <li class="nav-item">
                <a href="index2DashBoard.php" class="nav-link align-middle px-0">
                    <i class="fs-2 bi-graph-up"></i> <span class="ms-1 d-none d-sm-inline">儀表板</span>
                </a>
            </li><!--儀表板選單-->

            <!--分公司選單-教學範例都在這裡-->
            <li>
                <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-house-door-fill"></i> <span class="ms-1 d-none d-sm-inline">分公司佈局</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu6" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="officesTextAll.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司文字總覽</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="officesAll.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司表格總覽</span>2</a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionA.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司手風琴總覽A</span>2</a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionB.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司手風琴總覽B</span>3</a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionC.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司手風琴總覽C</span>4</a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionD.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司手風琴總覽D</span>5</a>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryHTMLA.html" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司HTML+PHP查詢A</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryShowTextB.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司PHP查詢B</span>2</a>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryShowAccordionC.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司查詢-手風琴C</span>3</a>
                    </li>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryBySelectA.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司下拉查詢D</span>4</a>
                    </li>
                    <li class="w-100">
                        <a href="officesInsertAForm.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司HTML+PHP新增A</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="officesInsertB.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司PHP新增B</span>2</a>
                    </li> 
                    <li class="w-100">
                        <a href="officesAll4DeleteA.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司資料刪除A</span>1</a>
                    </li>                    
                </ul>
            </li><!--分公司選單-教學範例都在這裡-->

            <!--顧客選單-->
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-people"></i> <span class="ms-1 d-none d-sm-inline">顧客關係</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="customersAll.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">顧客表格總覽</span> 1 </a>
                    </li>
                </ul>
            </li><!--顧客-->

            <!--產品選單-->
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                    <i class="fs-2 bi-box-seam"></i> <span class="ms-1 d-none d-sm-inline">產品管理</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="productsAll.php" class="nav-link px-0  text-white"> <span class="d-none d-sm-inline">產品表格總覽</span> 1</a>
                    </li>
                </ul>
            </li><!--產品-->

            <!--產品線選單-->
            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                    <i class="fs-2 bi-boxes"></i> <span class="ms-1 d-none d-sm-inline">產品線策略</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="productLinesAll.php" class=" text-white"> <span class="d-none d-sm-inline">產品線表格總覽</span> 1</a>
                    </li>
                    <li>
                        <a href="productlinesAllaccordion.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">產品線手風琴總覽</span> 2</a>
                    </li>
                </ul>
            </li><!--產品線-->

            <!--訂單選單-->
            <li>
                <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-calendar3"></i> <span class="ms-1 d-none d-sm-inline">訂單銷售</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="ordersAll.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">訂單表格總覽</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="ordersAllaccordionA.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">訂單手風琴總覽A</span>2</a>
                    </li>
                    <li class="w-100">
                        <a href="ordersAllaccordionB.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">訂單手風琴總覽B</span>3</a>
                    </li>
                    <li class="w-100">
                        <a href="ordersAllaccordionC.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">訂單手風琴總覽C</span>4</a>
                    </li>
                </ul>
            </li><!--訂單-->

            <!--支付選單-->
            <li>
                <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-coin"></i> <span class="ms-1 d-none d-sm-inline">支付管理</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="paymentsAll.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">支付表格總覽</span> 1</a>
                    </li>
                </ul>
            </li><!--支付選單-->



            <!--員工選單-->
            <li>
                <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-person-vcard"></i> <span class="ms-1 d-none d-sm-inline">內部員工</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu7" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="employeesAll.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">員工表格總覽</span> 1</a>
                    </li>
                    <li class="w-100">
                        <a href="employeesTitleView.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">職稱手風琴總覽</span> 1</a>
                    </li>
                </ul>
            </li><!--員工選單-->

            <!--教學雜七雜八筆記-->
            <li>
                <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-send-fill"></i> <span class="ms-1 d-none d-sm-inline">教學筆記</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu8" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="classicmodelsERD.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">經典資料庫ERD</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="customersAllTextTeach.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">顧客總覽表格前教學</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionTeach.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">分公司手風琴前教學</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="noteFormPassingParameters.html" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">表單POST/GET到PHP教學</span>1</a>
                    </li>
                    <li class="w-100">
                        <a href="viewForComplexSQL.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">用VIEW解複雜SQL</span></a>
                    </li>
                    <li class="w-100">
                        <a href="noteDateAdd18Years.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">將Order日期加18年</span></a>
                    </li>
                    <li class="w-100">
                        <a href="chartByCanvasJS.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">用CanvasJS畫統計圖</span></a>
                    </li>
                    <li class="w-100">
                        <a href="chartByCDNJS.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">用CDNJS畫統計圖</span></a>
                    </li>
                    <li class="w-100">
                        <a href="noteCharacterDisplay.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">中文字顯示筆記</span>3</a>
                    </li>                    
                </ul>
            </li><!--教學雜七雜八筆記-->

            <!--程式測試選單-->
            <li>
                <a href="#submenu99" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-pin"></i> <span class="ms-1 d-none d-sm-inline">保留</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu99" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="Z.html" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Z.HTML</span></a>
                    </li>
                    <li class="w-100">
                        <a href="Z.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Z.PHP</span></a>
                    </li>
                </ul>
            </li><!--程式測試選單-->

        <!--選單END--></ul>
    
    
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/s9443005.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">JOSEPH CW SHIH</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>