<!DOCTYPE html>
<html>
<head>
    <title>charts</title>
</head>
    
<body>
    <h1>charts</h1>
    <canvas id="myChart" height="100px"></canvas>
</body>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
      const labels =  {!! json_encode($labels) !!};
      const values =  {!! json_encode($values) !!};
  
      const data = {
        labels: labels,
        datasets: [{
          label: 'My First dataset',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: values,
        }]
      };
  
      const config = {
        type: 'bar',
        data: data,
        options: {
            y: {
                beginAtZero: true
            }
        }
      };
  
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  
</script>
</html>