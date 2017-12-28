<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

        <title>Laravel</title>


    </head>
    <body>
        <h1>Home</h1>
        <div>
            <a href="{{route('records.index')}}">Records table</a>
        </div>
        <div>
            <a href="{{route('data.index')}}">Add data</a>
        </div>
        <div>
            <a href="{{route('names')}}">Generate names</a>
        </div>
    </body>
</html>
