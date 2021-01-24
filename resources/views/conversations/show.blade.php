<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="margin-left: 30%">
    
    <p>
        <a href="{{ asset('/conversations') }}">Back</a>
    </p>
        <h1>{{ $conversation->title }}</h1>

        <p>Posted by {{ $conversation->user->name }}</p>

        <div>
            {{ $conversation->body }}
        </div>

        <hr style="margin-top: 30px;">

        @include('conversations.replies')
</body>
</html>