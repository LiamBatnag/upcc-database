@extends('layouts.app')

@section('title', 'Tournaments')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Tournament Details</title>
</head>
<body>
    <h1> Edit Tournament</h1>
    <form method="POST" action="{{ route('Tournaments.update', $tournaments->id)}}">
        @csrf 
        @method('PUT')

        <br><br>

        <label>Tournament Name:</label>
        <input type="string" name="tournament_name" value="{{old('tournament_name', $tournaments->tournament_name)}}">

        <br><br>

        <label>Start Date:</label>
        <input type="date" name="start_date" value="{{old('start_date', $tournaments->start_date)}}">

        <br><br>

        <label>End Date:</label>
        <input type="date" name="end_date" value="{{old('end_date', $tournaments->end_date)}}">

        <br><br>

        <label>Time Format</label>
        <input type="string" name="time_format" value="{{old('time_format', $tournaments->time_format)}}">

        <br><br>

        <label>Tournament Format:</label>
        <input type="string" name="tournament_format" value="{{old('tournament_format', $tournaments->tournament_format)}}">

        <br><br>

        <label>CSV File:</label>
        <input type="text" name="csv_file" value="{{old('csv_file', $tournaments->csv_file)}}">

        <br><br>

        <label>Notes:</label>
        <input type="text" name="notes" value="{{old('notes', $tournaments->notes)}}">

        <button type="submit">Update</button>
        
    </form>
</body>
@endsection
