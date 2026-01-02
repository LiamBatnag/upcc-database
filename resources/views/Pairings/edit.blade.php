@extends('layouts.app')

@section('title', 'Pairings')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Game Details</title>
</head>
<body>
    <h1> Edit Game</h1>
    <form method="POST" action="{{ route('Pairings.update', $Pairings->id)}}">
        @csrf 
        @method('PUT')

        <label>Board Number:</label>
        <input type="text" name="board_number" value="{{old('board_number', $Pairings->board_number)}}">

        <br><br>

        <label>Result:</label>
        <input type="text" name="result" value="{{old('result', $Pairings->result)}}">

        <br><br>

        <label>Game PGN:</label>
        <input type="text" name="game_pgn" value="{{old('game_pgn', $Pairings->game_pgn)}}">

        <br><br>

        <label>White Player:</label>
        <input type="number" name="player_id_white" value="{{old('player_id_white', $Pairings->player_id_white)}}">

        <br><br>

        <label>Black Player:</label>
        <input type="number" name="player_id_black" value="{{old('player_id_black', $Pairings->player_id_black)}}">

        <br>

        <button type="submit">Update</button>
        
    </form>
</body>
@endsection
