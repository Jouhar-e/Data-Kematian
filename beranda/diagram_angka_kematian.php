<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagram Angka Kematian</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Bulan', 'Jumlah'],
                ['Januari', 10],
                ['Februari', 20],
                ['Maret', 15],
                ['April', 25],
                ['Mei', 30]
            ]);

            var options = {
                title: 'Diagram Angka Kematian per Bulan',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('kematianChart'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="kematianChart" style="width: 100%; height: 300px;"></div>
</body>
</html>
