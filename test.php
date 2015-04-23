<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/data.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://code.highcharts.com/modules/drilldown.js"></script>

<script  type="text/javascript">
$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Fruit Consumption'
        },
	data: {
	table: 'hightable'
	}
    });
});
</script>


</head>

<body>
<div id="container" style="width:100%; height:400px;"></div>

<table id='hightable' style="width:100%">
  <tr>
    <th></th>
    <th>cats</th> 
    <th>dogs</th>
  </tr>
  <tr>
    <td>Eve</td>
    <td>44</td> 
    <td>94</td>
  </tr>
  <tr>
    <td>fart</td>
    <td>444</td> 
    <td>9433</td>
  </tr>
</table>


</body>
</html>
