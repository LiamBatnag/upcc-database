@extends('layouts.app')

@section('title', 'Rounds')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Round Details</title>
</head>
<body>
    <h1> Edit Round</h1>
    <form method="POST" action="{{ route('Rounds.update', $Rounds->id)}}">
        @csrf 
        @method('PUT')

        <label> Is the round completed? </label>
        <input type="checkbox" name="is_completed" value="1"
    {{ old('is_completed', $Rounds->is_completed) ? 'checked' : '' }}>


        <br><br>

        <label>Start Date:</label>
        <input type="date" name="start_date" value="{{old('start_date', $Rounds->start_date)}}">

        <br><br>

        <label>Round Number:</label>
        <input type="number" name="round_number" value="{{old('round_number', $Rounds->round_number)}}">

        <br><br>

        <label>Tournament ID:</label>
        <input type="number" name="tournament_id" value="{{old('tournament_id', $Rounds->tournament_id)}}">

        <br><br>

        <button type="submit">Update</button>
        
    </form>
</body>
@endsection
