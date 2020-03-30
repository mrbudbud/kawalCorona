<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .hhh {
              margin-top: 2%;
              font-family: 'Segoe UI';
              font-size: 60px;
              text-align: center;
              color: black;
              background-image: url('strowberry.png');
              }

              .chart{
                  height: 80;
                  width: 80;
              }
      </style>
    <title>Covid-19</title>
</head>
<body>
    <div class="hhh">
        <h1 style="blue">Penyebaran Covid-19 di Indonesia</h1>
    </div>

    <div class="chart">
        {!! $chart->container() !!}
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {!! $chart->script() !!}
    </div>

        <center><a href=''></a>(30 Maret 2020 ) ~ copyright &#169; Powered by <a href='http://www.blogger.com/'><h6> mr.budbud</h6></a></center>

</body>
</html>