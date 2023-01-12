<!-- 前回失敗したGoogle chart-->

<?php include "db.php";?>
<html>
  <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart()  {
        var data = google.visualization.arrayToDataTable([
          ['Year', '保育事業収入', '老人福祉事業収入', '介護保険事業収入'],
          <?php
            $query="select * from gs_bm_table3";
            $res=mysqli_query($conn,$query);
            while($data=mysqli_fetch_array($res)){
              $year=$data['year'];
              $revenue=$data['revenue'];
              $revenue2=$data['revenue2'];
              $revenue3=$data['revenue3'];
           ?>
           ['<?php echo $year;?>',<?php echo $revenue;?>,<?php echo $revenue2;?>,<?php echo $revenue3;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
 
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  
  </body>
  <a href="index.php">入力フォームへ戻る</a>
</html>

