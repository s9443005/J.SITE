<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

        <!--選單標題-->
        <a href="#" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <div class='align-bottome'>
                <?php
                switch (rand(0, 3)) {
                    case 0:
                        echo '<span class="px-2 fs-1 fst-italic fw-bold text-warning">J.site</span>';
                        break;
                    case 1:
                        echo '<span class="px-2 fs-1 text-warning" style="font-family:Lobster;">J.site</span>';
                        break;
                    case 2:
                        echo '<span class="px-2 fs-1 text-warning" style="font-family:Ma Shan Zheng;">J.site</span>';
                        break;
                    case 3:
                        echo '<span class="px-2 fs-1 text-warning" style="font-family:Mea Culpa;">J.site</span>';
                        break;
                }
                ?>

                <span class="fs-5 d-none d-sm-inline">管理資訊系統</span>
            </div>
        </a>


        <!--選單BEGIN-->
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">

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

            <!--分公司選單-教學範例都在這裡BEGIN-->
            <li>
                <a href="#submenu6" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-2 bi-house-door-fill"></i> <span class="ms-1 d-none d-sm-inline">分公司佈局</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu6" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="officesTextAll.php" class="nav-link px-0 text-white"><span
                                class="d-none d-sm-inline">文字總覽</span><span class="text-danger">TT</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAll.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">表格總覽</span><span class="text-info">TB</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionA.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">手風琴總覽1</span><span class="text-secondary">ANTT</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionB.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">手風琴總覽2</span><span class="text-success">ANTB</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionC.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">手風琴總覽3</span><span class="text-danger">ANMT</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAllaccordionD.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">手風琴總覽4</span><span class="text-info">ANTG</span></a>
                    </li>
                    <hr>
                    <li class="w-100">
                        <a href="officesQueryHTMLA.html" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">查詢1古典</span><span class="text-secondary">HTML</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryShowTextB.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">查詢2合一</span><span class="text-success">QYTT</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryShowAccordionC.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">查詢3</span><span class="text-danger">QYAN</span></a>
                    </li>
                    </li>
                    <li class="w-100">
                        <a href="officesQueryBySelectA.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">查詢4下拉</span><span class="text-info">QYDD</span></a>
                    </li>
                    <hr>
                    <li class="w-100">
                        <a href="officesInsertAForm.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">新增分公司1古典</span><span class="text-secondary">INST1</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesInsertB.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">新增分公司2合一</span><span class="text-success">INST2</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAll4DeleteA.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">刪除分公司</span><span class="text-danger">DEL1</span></a>
                    </li>
                    <li class="w-100">
                        <a href="officesAll4DeleteB.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">刪除分公司</span><span class="text-info">DEL2</span></a>
                    </li>
                </ul>
        </li><!--分公司選單-教學範例都在這裡END-->

        <!--員工選單-->
        <li>
            <a href="#submenu7" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-2 bi-person-vcard"></i> <span class="ms-1 d-none d-sm-inline">內部員工</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu7" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="employeesTextAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">文字總覽</span><span class="text-danger">TT</span></span></a>
                </li>
                <li class="w-100">
                    <a href="employeesAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">表格總覽</span><span class="text-info">TB</span></span></a>
                </li>
                <li class="w-100">
                    <a href="employeesAllaccordionA.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽1</span><span class="text-secondary">ANTT</span></a>
                </li>
                <li class="w-100">
                    <a href="employeesAllaccordionB.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽2</span><span class="text-success">ANTB</span></a>
                </li>                
                <li class="w-100">
                        <a href="employeesAllaccordionC.php" class="nav-link px-0 text-white"> <span
                                class="d-none d-sm-inline">手風琴總覽3</span><span class="text-danger">ANMT</span></a>
                </li>                
                <li class="w-100">
                    <a href="employeesAllCard.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">卡片總覽4</span><span class="text-info">CARD</span></a>
                </li>
                <li class="w-100">
                    <a href="employeesTitleView.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">職稱手風琴總覽</span> 1</a>
                </li>
                <hr>
                <li class="w-100">
                    <a href="employeeQueryBySelectA.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">查詢4下拉</span><span class="text-info">QYDD</span></a>
                </li>                
                <li class="w-100">
                    <a href="employeeQueryBySelectB.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">查詢5詳細</span><span class="text-warning">QYDE</span></a>
                </li>
            </ul>
        </li><!--員工選單-->

        <!--產品線選單-->
        <li>
            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                <i class="fs-2 bi-boxes"></i> <span class="ms-1 d-none d-sm-inline">產品線策略</span></a>
            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="productLinesTextAll.php" class="nav-link px-0 text-white"><span
                            class="d-none d-sm-inline">文字總覽</span><span class="text-danger">TT</span></a>
                </li>
                <li class="w-100">
                    <a href="productLinesAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">表格總覽</span><span class="text-info">TB</span></a>
                </li>
                <li class="w-100">
                    <a href="productLinesAllaccordionA.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽1</span><span class="text-secondary">ANTT</span></a>
                </li>
            </ul>
        </li><!--產品線-->

        <!--產品選單-->
        <li>
            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                <i class="fs-2 bi-box-seam"></i> <span class="ms-1 d-none d-sm-inline">產品管理</span></a>
            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">

                <li class="w-100">
                    <a href="productsTextAll.php" class="nav-link px-0 text-white"><span
                            class="d-none d-sm-inline">文字總覽</span><span class="text-danger">TT</span></a>
                </li>
                <li class="w-100">
                    <a href="productsAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">表格總覽</span><span class="text-info">TB</span></a>
                </li>
                <li class="w-100">
                    <a href="productsAllaccordionA.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽1</span><span class="text-secondary">ANTT</span></a>
                </li>
                <li class="w-100">
                    <a href="productsAllaccordionB.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽2</span><span class="text-success">ANTB</span></a>
                </li>
                <li class="w-100">
                    <a href="productsAccordionC.php" class="nav-link px-0  text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽4</span>ANTG1</a>
                </li> 
                <li class="w-100">
                    <a href="productsAccordionC1.php" class="nav-link px-0  text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽4</span>ANTG2</a>
                </li>
                <hr>
                <li class="w-100">
                    <a href="productsQueryHTMLA.html" class="nav-link px-0  text-white"> <span
                            class="d-none d-sm-inline">查詢1古典</span><span class="text-secondary">HTML</span></a>
                </li>
                <li class="w-100">
                    <a href="productsQueryShowTextA.php" class="nav-link px-0  text-white"> <span
                            class="d-none d-sm-inline">查詢2合一</span><span class="text-success">QYTT</span></a>
                </li>
                <li class="w-100">
                    <a href="productsQueryShowAccordionB.php" class="nav-link px-0  text-white"> <span
                            class="d-none d-sm-inline">查詢3</span><span class="text-danger">QYAN</span></a>
                </li>                
            </ul>
        </li><!--產品-->


        <!--顧客選單-->
        <li>
            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-2 bi-people"></i> <span class="ms-1 d-none d-sm-inline">顧客關係</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="customersTextAll.php" class="nav-link px-0 text-white"><span
                            class="d-none d-sm-inline">文字總覽</span><span class="text-danger">TT</span></a>
                </li>
                <li class="w-100">
                    <a href="customersAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">表格總覽</span><span class="text-info">TB</span></a>
                </li>
                <li class="w-100">
                    <a href="customersAllaccordionA.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽1</span><span class="text-secondary">ANTT</span></a>
                </li>
                <li class="w-100">
                    <a href="customersAllaccordionB.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">手風琴總覽2</span><span class="text-success">ANTB</span></a>
                </li>
            </ul>
        </li><!--顧客-->        

        <!--訂單選單-->
        <li>
            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-2 bi-calendar3"></i> <span class="ms-1 d-none d-sm-inline">訂單銷售</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="ordersAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">訂單表格總覽</span>1</a>
                </li>
                <li class="w-100">
                    <a href="ordersAllaccordionA.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">訂單手風琴總覽A</span>2</a>
                </li>
                <li class="w-100">
                    <a href="ordersAllaccordionB.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">訂單手風琴總覽B</span>3</a>
                </li>
                <li class="w-100">
                    <a href="ordersAllaccordionC.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">訂單手風琴總覽C</span>4</a>
                </li>
            </ul>
        </li><!--訂單-->

        <!--支付選單-->
        <li>
            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-2 bi-coin"></i> <span class="ms-1 d-none d-sm-inline">支付管理</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="paymentsAll.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">支付表格總覽</span> 1</a>
                </li>
            </ul>
        </li><!--支付選單-->





        <!--教學雜七雜八筆記-->
        <li>
            <a href="#submenu8" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-2 bi-send-fill"></i> <span class="ms-1 d-none d-sm-inline">教學筆記</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu8" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="classicmodelsERD.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">經典資料庫ERD</span>1</a>
                </li>
                <li class="w-100">
                    <a href="noteComplexSQL.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">進階SQL教學</span>1</a>
                </li>
                <li class="w-100">
                    <a href="customersAllTextTeach.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">顧客總覽表格前教學</span>1</a>
                </li>
                <li class="w-100">
                    <a href="officesAllaccordionTeach.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">分公司手風琴前教學</span>1</a>
                </li>
                <li class="w-100">
                    <a href="noteFormPassingParameters.html" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">表單POST/GET到PHP教學</span>1</a>
                </li>
                <li class="w-100">
                    <a href="viewForComplexSQL.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">用VIEW解複雜SQL</span></a>
                </li>
                <li class="w-100">
                    <a href="noteDateAdd18Years.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">將Order日期加18年</span></a>
                </li>
                <li class="w-100">
                    <a href="noteAddingPhoto4Employees.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">為員工增加相片</span></a>
                </li>
                <li class="w-100">
                    <a href="chartByCanvasJS.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">用CanvasJS畫統計圖</span></a>
                </li>
                <li class="w-100">
                    <a href="chartByCDNJS.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">用CDNJS畫統計圖</span></a>
                </li>
                <li class="w-100">
                    <a href="noteCharacterDisplay.php" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">中文字顯示筆記</span>3</a>
                </li>
                <li class="w-100">
                    <a href="noteTablePK.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">參照完整性</span>3</a>
                </li>
                <li class="w-100">
                    <a href="systemStatus.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">系統狀態</span>3</a>
                </li>
                <li class="w-100">
                    <a href="notepadWebPageTemplate.html" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">網頁樣版</span>3</a>
                </li>
                <li class="w-100">
                    <a href="noteUsefulLinks.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">參考鏈結</span>3</a>
                </li>
            </ul>
        </li><!--教學雜七雜八筆記-->

        <!--程式測試選單-->
        <li>
            <a href="#submenu99" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                <i class="fs-2 bi-pin"></i> <span class="ms-1 d-none d-sm-inline">保留</span> </a>
            <ul class="collapse nav flex-column ms-1" id="submenu99" data-bs-parent="#menu">
                <li class="w-100">
                    <a href="Z.html" class="nav-link px-0 text-white"> <span
                            class="d-none d-sm-inline">Z.HTML</span></a>
                </li>
                <li class="w-100">
                    <a href="Z.php" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Z.PHP</span></a>
                </li>
            </ul>
        </li><!--程式測試選單-->

        <!--選單END--></ul>


        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
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