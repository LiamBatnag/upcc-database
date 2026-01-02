@extends('layouts.app')

@section('title', 'Pairings')

@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- select2 stuff -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@stack('scripts') <!-- select2 stuff -->

<body>
    <h1> Add a Game </h1>

        <form method="POST" action="{{route('Pairings.store')}}">
            @csrf   
            <label for="board_number">Board Number:</label><br>
            <input type="number" id="board_number" name="board_number"><br>

            <label for="result">Result:</label><br> <!-- maybe make a checkbox? White or black player -->
            <input type="text" id="result" name="result"><br>

            <label for="game_pgn">Game PGN:</label><br>
            <input type="text" id="game_pgn" name="game_pgn"><br><br>

            <label for="round_id">Round:</label><br>

            <select name="round_id" class="w3-select">
                <option value="">-- No Round (Casual Game) --</option>
            
                @foreach ($Rounds as $Round)
                    <option value="{{ $Round->id }}">
                        {{ $Round->tournament->tournament_name ?? 'No Tournament' }}
                        — Round {{ $Round->round_number }}
                        ({{ $Round->id }})
                    </option>
                @endforeach
            </select>
            
            
            <br>
            <br>

            <label for="player_id_white"> White Player: </labelL<br>
            <select id="player_id_white" name="player_id_white">
                @foreach($Players as $Player)
                    <option value="{{ $Player->id }}">
                        {{ $Player->first_name }} {{ $Player->last_name }}
                    </option>
                @endforeach
            </select>

<br><br>

            <label for="player_id_black"> Black Player: </labelL<br>
            <select id="player_id_black" name="player_id_black">
                @foreach($Players as $Player)
                    <option value="{{ $Player->id }}">
                        {{ $Player->first_name }} {{ $Player->last_name }}
                    </option>
                @endforeach
            </select>
            

<br>
            <input type="submit" value="Submit">
          </form>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        @push('scripts')
<script>
$(document).ready(function() {
    $('#player_id_white').select2();
    $('#player_id_black').select2();
});
</script>
@endpush


        
</body>
@endsection