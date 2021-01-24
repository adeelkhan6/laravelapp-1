<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ asset('/contact') }}">
        @csrf
        <div style="text-align:center; margin:150px;">
            <div>
                <label for="email">Email:</label> <br />
                <input style="width:100%; margin-top:15px; padding:8px; 
                    border-radius:11px; border-color:gray; border-outline:gray" 
                    type="text" name="email" id="email">
            </div>
            <div style="color: red;">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <div>
                <button type="submit" style="margin: 25px; background-color: #f66d9b; color: white; 
                    border-radius: 20px; padding: 10px 100px; font-weight: bold;">
                    Submit
                </button>
            </div>
                @if(session('message'))
                    <div style="color: green;">
                        {{ session('message') }}
                    </div>
                @endif
        </div>
    </form>
</body>
</html>