<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{ isset($car->_id) ? $car->_id : '' }}</h1>
        <div class="card mb-3">
            <div class="card-header">
                <div class="card-tile">
                    {{ isset($car->_id) ? $car->_id : '' }}
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ isset($car->title) ? $car->title : $car->_id}}</h5>

            </div>
            <div class="card-footer">
                <a href="/api/listCars/listCar">Retornar</a>
            </div>
        </div>
    </div>
</body>
</html>