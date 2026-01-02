@extends('layouts.app')

@section('title', 'Rounds')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rounds</title>
</head>
<body>
    <h1> Add a Round </h1>

        <form method="POST" action="{{route('Rounds.store')}}">
            @csrf

            <!-- maybe make a checkbox, saying yes or no? -->
            <label for="is_completed">Round Status</label><br>
            <input type="number" id="is_completed" name="is_completed"><br>

            <label for="start_date">Date:</label><br>
            <input type="date" id="start_date" name="start_date"><br>

            <label for="round_number">Round Number:</label><br>
            <input type="number" id="round_number" name="round_number"><br><br>

            <!-- maybe make a dropdown list for tournaments? -->
            <label for="tournament_id">Tournament ID</label><br>
            <input type="number" id="tournament_id" name="tournament_id"><br><br>

            <input type="submit" value="Submit">
          </form>

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif

        
</body>
@endsection