<div class="row">
    <!--J站顧客人數高斯圖BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #88ffff)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-people px-3 text-info"></i>顧客</h5>
            <?php
            $sql = "SELECT count(*) as totalCustomers FROM customers";
            $result = $conn->query($sql);
            unset($customer);
            $row        = $result->fetch_assoc();
            $totalCustomer[] = $row['totalCustomers'];
            //echo "<p class='card-text'>J站顧客數：" . $row['totalCustomers'] . "位</p>";
            ?>
            <div id="guage-customerTotal" style="height: 18rem"></div>
            <a href="customersAll.php" class="btn btn-primary">更多...</a>
        </div>
        <!--ECHART--><script type="text/javascript">
            var dom = document.getElementById('guage-customerTotal');
            var myChart = echarts.init(dom, null, { renderer: 'canvas',
                                                    useDirtyRect: false });
            var app = {};
            var option;
            option  =   {title: {   text: 'J站顧客數'},
                         series:[{  type: 'gauge',
                                    min:        0,
                                    max:        150,
                                    startAngle: 210,
                                    endAngle:   -30,
                                    progress:   { show: true,   width: 6    },
                                    axisLine:   { lineStyle:    {width: 6}  },
                                    axisTick:   { show: false               },
                                    splitLine:  { length: 0,    lineStyle: {width: 1,   color: '#999'}  },
                                    axisLabel:  { distance: 0,  color: '#999',  fontSize: 12            },
                                    anchor:     {show: true,    showAbove: true,    size: 8,
                                                 itemStyle: {borderWidth: 2}},
                                    title:      {show: true,                },
                                    detail:     {valueAnimation: true, fontSize: 16, formatter:'{value}位',
                                                 offsetCenter: [0, '30%']   },
                                    data: [{value: <?php echo json_encode($totalCustomer, JSON_NUMERIC_CHECK)?>}]
                                }]
                        };
            if (option && typeof option === 'object') { myChart.setOption(option);  }
            window.addEventListener('resize', myChart.resize);
        </script>
    </div><!--J站顧客人數高斯圖END-->

    <!--黃金 歷年訂單ECHART統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 38rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
            $sql = "select YEAR(orderDate) as Year, count(orderNumber) as countOrdersByYear from orders group by year(orderDate);";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p>歷年訂單數目</p>";
                unset($Xdata);
                unset($Ydata);
                while($row    = $result->fetch_assoc()){
                    //echo $row['Year'] . "：" . $row['countOrdersByYear'] . "單<br>";
                    $Xdata[] = $row['Year'];
                    $Ydata[] = $row['countOrdersByYear'];
                }
            }
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            ?>
            <div id="LineChart-CountOrderByYear" style="height: 18rem"></div>
            <script type="text/javascript">
                var dom = document.getElementById('LineChart-CountOrderByYear');
                var myChart = echarts.init(dom, null, { renderer: 'canvas',
                                                        useDirtyRect: false });
                var app = {};
                var option;
                option = {  xAxis: {
                            type:   'category',
                            data:   <?php echo json_encode($Xdata, JSON_NUMERIC_CHECK)?>  },
                            yAxis:  {    type: 'value'   },
                            series: [{  data: <?php echo json_encode($Ydata, JSON_NUMERIC_CHECK) ?>,
                                        type: 'line'    }]
                };
                if (option && typeof option === 'object') {
                myChart.setOption(option);
                }
                window.addEventListener('resize', myChart.resize);
            </script>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 歷年訂單ECHART統計END-->


    <!--黃金 前5名熱銷產品數量ECHART統計BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 38rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-box-seam px-3 text-info"></i>產品</h5>
            <?php
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            $sql = "create view top5Product as SELECT productCode, sum(quantityOrdered) as orderedEachProduct FROM orderdetails group by productCode;";
            $result = $conn->query($sql);
            $sql = "SELECT * FROM top5Product order by orderedEachProduct desc limit 0,5;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){
                echo "<p>熱銷TOP5產品排行榜</p>";
                unset($Xdata);
                unset($Ydata);
                while($row    = $result->fetch_assoc()){
                    $Xdata[] = $row['productCode'];
                    $Ydata[] = $row['orderedEachProduct'];
                }
            }
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            ?>
            <div id="BarChart-Top5Product" style="height: 18rem"></div>
            <script type="text/javascript">
                var dom = document.getElementById('BarChart-Top5Product');
                var myChart = echarts.init(dom, null, { renderer: 'canvas',
                                                        useDirtyRect: false });
                var app = {};
                var option;
                option = {  xAxis: {
                            type:   'category',
                            data:   <?php echo json_encode($Xdata, JSON_NUMERIC_CHECK)?>  },
                            yAxis:  {    type: 'value'   },
                            series: [{  data: <?php echo json_encode($Ydata, JSON_NUMERIC_CHECK)?>,
                                        type: 'bar'    }]
                };
                if (option && typeof option === 'object') {
                myChart.setOption(option);
                }
                window.addEventListener('resize', myChart.resize);
            </script>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div><!--黃金 前5名熱銷產品數量ECHART統計END-->

</div>