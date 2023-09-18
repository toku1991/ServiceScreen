<!-- resources/views/chart.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Line Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
</head>
<div id="app">
    {!! $chart->container() !!}
</div>

{!! $chart->script() !!}
</body>
</html>
