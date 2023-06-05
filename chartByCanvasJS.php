    <!--黃金 前5名熱銷產品數量長條圖BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
			include "connectDB.php";
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            $sql = "create view top5Product as SELECT productCode, sum(quantityOrdered) as orderedEachProduct FROM orderdetails group by productCode;";
            $result = $conn->query($sql);
            $sql = "SELECT * FROM top5Product order by orderedEachProduct desc limit 0,5;";
            $result = $conn->query($sql);
            $dataPoints = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                array_push($dataPoints,array("y" => intval($row["orderedEachProduct"]), "label" => $row["productCode"]));
                }
            }
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
			include "disconnectDB.php";
            ?>
            <script> /* 統計圖表BEGIN*/
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title:  { text: "前5名熱銷產品" },
                    axisX:  { title: "數量"},
                    axisY:  { title: "產品" , includeZero: true},
                    data: [{
                        type: "bar",
                        yValueFormatString: "$#,##0件",
                        indexLabel: "{y}",
                        indexLabelPlacement: "inside",
                        indexLabelFontWeight: "bolder",
                        indexLabelFontColor: "white",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                }
            </script><!-- 統計圖表END -->
            <div id="chartContainer" style="height: 200px; width: 100%;"></div>
            <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div>
    <!--黃金 前5名熱銷產品數量長條圖END-->

    <!--黃金 前5名熱銷產品數量長條圖BEGIN-->
    <div class="card m-3 p-3 shadow round-3" style="width: 18rem; background-image: linear-gradient(#ffffff, #ffffff, #996515)">
        <div class="card-body">
            <h5 class="card-title"><i class="fs-2 bi-calendar3 px-3 text-info"></i>訂單</h5>
            <?php
			include "connectDB.php";
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
            $sql = "create view top5Product as SELECT productCode, sum(quantityOrdered) as orderedEachProduct FROM orderdetails group by productCode;";
            $result = $conn->query($sql);
            $sql = "SELECT * FROM top5Product order by orderedEachProduct desc limit 0,5;";
            $result = $conn->query($sql);
            $dataPoints = array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                array_push($dataPoints,array("y" => intval($row["orderedEachProduct"]), "label" => $row["productCode"]));
                }
            }
            $sql = "DROP view if exists top5Product;";
            $result = $conn->query($sql);
			include "disconnectDB.php";
            ?>
            <script> /* 統計圖表BEGIN*/
                window.onload = function() {
                var chart = new CanvasJS.Chart("chartContainer2", {
                    animationEnabled: true,
                    theme: "light2",
                    title:  { text: "前5名熱銷產品" },
                    axisX:  { title: "數量"},
                    axisY:  { title: "產品" , includeZero: true},
                    data: [{
                        type: "bar",
                        yValueFormatString: "$#,##0件",
                        indexLabel: "{y}",
                        indexLabelPlacement: "inside",
                        indexLabelFontWeight: "bolder",
                        indexLabelFontColor: "white",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();
                }
            </script><!-- 統計圖表END -->
            <div id="chartContainer2" style="height: 200px; width: 100%;"></div>
            <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
            <a href="ordersAll.php" class="btn btn-primary">更多...</a>
            </div>
    </div>
    <!--黃金 前5名熱銷產品數量長條圖END-->