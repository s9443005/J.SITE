<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Basic Line Chart - Apache ECharts Demo</title>
  <style>
    * {
  margin: 0;
  padding: 0;
}
#chart-container {
  position: relative;
  height: 100vh;
  overflow: hidden;
}
  </style>
</head>
<body>
  <?php 

$Ydata[]=150;
$Ydata[]=230;
$Ydata[]=224;
$Ydata[]=218;
$Ydata[]=135;
$Ydata[]=289;
$Ydata[]=260;
$Xdata[]="MON";
$Xdata[]="TUE";
$Xdata[]="WED";
$Xdata[]="THU";
$Xdata[]="FRI";
$Xdata[]="SAT";
?>

<div id="chart-container"></div>
  <script src="https://fastly.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
</body>
</html>

<script>
var dom = document.getElementById('chart-container');
var myChart = echarts.init(dom, null, {
  renderer: 'canvas',
  useDirtyRect: false
});
var app = {};

var option;

option = {
  xAxis: {
    type: 'category',
    data: <?php echo json_encode($Xdata); ?>
  },
  yAxis: {
    type: 'value'
  },
  series: [
    {
      data: <?php echo json_encode($Ydata); ?>,
      type: 'line'
    }
  ]
};

if (option && typeof option === 'object') {
  myChart.setOption(option);
}

window.addEventListener('resize', myChart.resize);
</script>