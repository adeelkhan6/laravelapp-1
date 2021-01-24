<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach ($conversation->replies as $reply)
        <div>
            <header style="display: flex; justify-content: space-between;">
                <p><strong>{{ $reply->user->name }} said...</strong></p>

                {{-- again setting this buisness logic to Reply Model --}}
                {{-- @if ($conversation->best_reply_id === $reply->id)
                    <span style="color: green;">Best Reply!!</span>
                @endif --}}     

                @if ($reply->isBest())
                    <span style="color: green;">Best Reply!!</span>
                @endif
            </header>
            
            {{ $reply->body }}

            {{-- @can('update-conversation', $conversation) --}}
            @can('update', $conversation)
                <form method="POST" action="{{ asset('/best-replies') }}/{{ $reply->id }}">
                    @csrf

                    <button style="margin-top: 8px;color:gray"
                     type="submit">
                     Best Reply?
                    </button>
                 </form>
            @endcan

            
        </div>

        @continue($loop->last)

        <hr>
        
    @endforeach
</body>
</html>