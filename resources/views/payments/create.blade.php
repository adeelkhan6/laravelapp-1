<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ asset('/payments') }}">
        @csrf
        <button style="margin: 25px; background-color: teal;
            color: white; border-radius: 20px; padding: 10px;
            font-weight: bold;" >Make Payments
        </button>
    </form>
</body>
</html>