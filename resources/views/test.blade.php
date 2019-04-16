<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    </style>
</head>
<body>

<div class="visible-print text-center">
    {!! QrCode::size(500)->generate('http://localhost:8000/member/'. Auth::user()->id .'/verify/'. Auth::user()->verification_code ); !!}
    <p>http://localhost:8000/member/{{ Auth::user()->id }}/verify/{{ Auth::user()->verification_code }}</p>
</div>
</body>
</html>

