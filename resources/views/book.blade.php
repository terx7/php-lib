<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body class="flex justify-center items-center h-full">
    <div>
        <div class="flex justify-between">
            <div class="p-4">Raamatu nimi:</div>
            <div class="p-4">{{$books -> title}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatu aasta:</div>
            <div class="p-4">{{$books -> release_date}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatu keel:</div>
            <div class="p-4">{{$books -> language}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatu kaanepilt:</div>
            <div class="p-4"><img src="{{$books -> cover_path}}" alt=""></div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatu sisu:</div>
            <div class="p-4">{{$books -> summary}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatu hind:</div>
            <div class="p-4">{{$books -> price}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatud laos:</div>
            <div class="p-4">{{$books -> stock_saldo}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Lehekülgi:</div>
            <div class="p-4">{{$books -> pages}}</div>
        </div>
        <div class="flex justify-between">
            <div class="p-4">Raamatud tüüp:</div>
            <div class="p-4">{{$books -> type}}</div>
        </div>
    </div>
</body>

</html>
