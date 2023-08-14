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
                <h1>統計圖表-用CDNJS畫長條圖</h1><hr>
                <?php include "connectDB.php"; ?>
                <?php
                    $sql = "select YEAR(orderDate) as product, count(orderNumber) as totalsales from orders group by year(orderDate);";
                    $result = $conn->query($sql);
                    $chart_data = "";
                    while($row = mysqli_fetch_array($result)){
                        $productname[] = $row['product'];
                        $sales[] = $row['totalsales'];
                    }
                ?>
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header bg">
                            <h1>Bargraph in PHP and MYSQL</h1>
                        </div>
                        <div class="card-body">
                            <canvas id="chartjs_bar"></canvas>
                        </div>
                    </div>
                </div>    
                <script type="text/javascript">
                    var ctx = document.getElementById("chartjs_bar").getContext('2d');
                    var myChart = new Chart(ctx,{
                        type: 'bar',
                        data: {
                        labels:<?php echo json_encode($productname); ?>,
                        datasets: [{
                        backgroundcolor: [
                            "#ffd322",
                            "#5945fd",
                            "#25d5f2",
                            "#2ec551",
                            "#ff344e",
                        ],
                        data: <?php echo json_encode($sales);?>
                        }]
                        },
                        options:{
                        legend: {
                            display:true,
                            position:'bottom',
                            labels: {
                                fontColor: '#71748d',
                                fontFamily: 'Circular Std Book',
                                fontSize: 14,
                            }
                        },
                        }
                    });
                </script>                    


                <?php include "disconnectDB.php"; ?>
            </div><!-- 邊欄右END -->
        </div><!-- row結束-->
    </div><!-- container結束-->
</body>

</html>