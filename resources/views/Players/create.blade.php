@extends('layouts.app')

@section('title, Players')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Add a Player </h1>

        <form method="POST" action="{{route('Players.store')}}">
            @csrf
            <label for="first_name">First name:</label><br>
            <input type="text" id="first_name" name="first_name"><br>
            <label for="last_name">Last name:</label><br>
            <input type="text" id="last_name" name="last_name"><br>
            <label for="rating">Rating:</label><br>
            <input type="number" id="rating" name="rating"><br><br>
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