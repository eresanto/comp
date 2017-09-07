<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

Słowa kluczowe w bazie:
<ul>
@foreach ($keywords as $keyword)
    <li>{{ $keyword}}</li>
@endforeach
</ul>
    </body>
</html>
