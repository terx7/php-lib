<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>

<body class="flex justify-center items-center h-full">
    <div class="flex justify-between">
        <div class="p-4">Autori nimi:</div>
        <div class="p-4">{{$author -> first_name}} {{$author->last_name}} </div>
        <div class="flex justify-between">
            <div class="p-4">Autori raamatud:</div>
            @foreach ($author -> books as $book)
            <div class="p-4"> {{$book -> title}} </div>
            @endforeach
        </div>
</body>

</html>
