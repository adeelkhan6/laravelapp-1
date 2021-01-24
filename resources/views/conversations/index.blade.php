<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin-left: 30%">
    
    @foreach ($conversations as $conversation)
        <h2><a href="{{ asset('/conversation') }}/{{ $conversation->id }}">{{ $conversation->title }}</a></h2>

        @continue($loop->last)

        <hr style="width: 50%; margin-right: 50%">

    @endforeach


    
</body>
</html>