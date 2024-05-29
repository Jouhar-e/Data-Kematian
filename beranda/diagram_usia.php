<div id="piechart" style="width: 500px; height: 300px;"></div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    // Muat visualisasi Google Charts
    google.charts.load('current', {
        'packages': ['corechart']
    });

    // Gambar grafik setelah library di-load
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        // Buat data tabel
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Jenis Kelamin');
        data.addColumn('number', 'Jumlah');
        data.addRows([
            ['Tua', 40],
            ['Dewasa', 50],
            ['Anak Anak', 10]
        ]);

        // Konfigurasi opsi diagram data
        var options = {
            title: 'Diagram usia',
            pieHole: 0.4, // Bagian dalam berbentuk lubang
        };

        // Buat objek diagram data dan tambahkan ke dalam elemen dengan id 'piechart'
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>