<?php
include "connectDB.php";

$sql    = "select YEAR(orderDate) as Year, count(orderNumber) as countOrdersByYear from orders group by year(orderDate);";
$result = $conn->query($sql);

$chart_data = "";
while($row = mysqli_fetch_array($result)){
$Year[] = $row['Year'];
$countOrdersByYear[] = $row['countOrdersByYear'];
}
echo json_encode($Year);
echo json_encode($countOrdersByYear);
?>

<script type="text/javascript">
var ctx = document.getElementById("chartjs_bar").getContext('2d');
var myChart = new Chart(ctx,{
type: 'bar',
data: {
labels:<?php echo json_encode($Year); ?>,
datasets: [{
backgroundcolor: [
"#ffd322",
"#5945fd",
"#25d5f2",
"#2ec551",
"#ff344e",
],
data: <?php echo json_encode($countOrdersByYear);?>
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

<html>
    <head>
    include "htmlhead.php";

    </head>
<body>
    <div class="row">
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
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
</body>
</html>