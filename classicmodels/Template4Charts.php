<?php
include "connectDB.php"; 
$sql = "select productCode, quantityordered*priceEach as subTotal from orderdetails limit 0,5;";
$result = $conn->query($sql);
$dataPoints = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    array_push($dataPoints,array("y" => intval($row["subTotal"]), "label" => $row["productCode"]));
    }
}
include "disconnectDB.php"; 
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Revenue Chart of Acme Corporation"
	},
	axisY: {
		title: "Revenue (in USD)",
		includeZero: true,
		prefix: "$",
		suffix:  ""
	},
	data: [{
		type: "bar",
		yValueFormatString: "$#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>  