
@extends('layouts.app')

@section('title, Players')

@section('content')

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Edit Player Details</title>
</head>
<body>
   <h1> Edit Player Details</h1>

   <div class="w3-panel w-3border">
   <form method="POST" action="{{ route('Players.update', $Players->id)}}">
       @csrf
       @method('PUT')



       
       <label>First Name:</label>
       <input type="text" name="first_name" value="{{old('first_name', $Players->first_name)}}">


       <br>


       <label>Last Name:</label>
       <input type="text" name="last_name" value="{{old('last_name', $Players->last_name)}}">


       <br>


       <label>Rating:</label>
       <input type="number" name="rating" value="{{old('rating', $Players->rating)}}">


       <button type="submit">Update</button>
      
   </form>
</div>
</body>
@endsection

