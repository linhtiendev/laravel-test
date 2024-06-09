<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>index fn of products controller</h1>
    {{-- <p>Title: {{$title}}</p> --}}
    {{-- <p>name: {{$name}} </p> --}}

    @foreach ($myphone as $item)
        <h3> {{$item}} </h3>
    @endforeach
</body>
</html>