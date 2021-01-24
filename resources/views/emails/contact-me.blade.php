{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Absa is my darling @@</h1>

    <p>Yeah, I love these {{ $topic }}</p>
</body>
</html> --}}

@component('mail::message')
# A Heading

Lorem ipsum dolor sit amet consectetur adipisicing elit.

- A list
- goes 
- here

Lorem ipsum dolor sit amet consectetur adipisicing elit.


@component('mail::button', ['url' => 'https://laravel.com/'])
Visits Laravel
@endcomponent

@endcomponent