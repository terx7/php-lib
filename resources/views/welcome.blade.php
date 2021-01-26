<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <table class="table-auto">
        <thead>
            <tr>
                <td class="p-2 bg-gray-200 font-bold text-center">Book Title</td>
                <td class="p-2 bg-gray-200 fo+nt-bold text-center"><a href="/?sort=release_date&order={{ $order }}">Release date</a></td>
        </thead>
        @foreach($books as $book)
        <tr>
            <td class="p-2 bg-gray-100"><a href="/book/{{$book -> id}}">{{$book -> title}}</a></td>
            <td class="p-2 bg-gray-100">{{$book -> release_date}}</td>
        </tr>
        @endforeach
    </table>
    {{ $books->links() }}
</body>

</html>
