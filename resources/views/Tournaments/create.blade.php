@extends('layouts.app')

@section('title', 'Tournaments')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tournaments</title>
</head>
<body>
    <h1> Add a Tournament </h1>

        <form method="POST" action="{{route('Tournaments.store')}}">
            @csrf

            <label for="tournament_name">Tournament Name:</label><br>
            <input type="text" id="tournament_name" name="tournament_name"><br>

            <!-- maybe make a checkbox, saying yes or no? -->
            <label for="start_date">Start Date:</label><br>
            <input type="date" id="start_date" name="start_date"><br>

            <label for="end_date">End Date:</label><br>
            <input type="date" id="end_date" name="end_date"><br>

            <label for="time_format">Time Format:</label><br>
            <input type="text" id="time_format" name="time_format"><br><br>

            <!-- maybe make a dropdown list for tournaments? -->
            <label for="tournament_format">Tournament Format</label><br>
            <input type="text" id="tournament_format" name="tournament_format"><br><br>

            <label for="csv_file">CSV File:</label><br>
            <input type="text" id="csv_file" name="csv_file"><br>

            <label for="notes">Notes:</label><br>
            <input type="text" id="notes" name="notes"><br>

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