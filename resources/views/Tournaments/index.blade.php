@extends('layouts.app')

@section('title', 'Tournaments')

@section('content')

<h1>List of Tournaments</h1>

<a href="{{ route('Tournaments.create') }}" class="w3-button w3-green w3-margin-bottom">
    <i class="fa fa-plus"></i> Create New Tournament
</a>

@foreach($Tournaments as $tournament)
    <div class="w3-card w3-padding w3-margin-bottom">

        <p><strong>ID:</strong> {{ $tournament->id }}</p>
        <p><strong>Name:</strong> {{ $tournament->tournament_name }}</p>
        <p><strong>Start Date:</strong> {{ $tournament->start_date }}</p>
        <p><strong>End Date:</strong> {{ $tournament->end_date }}</p>
        <p><strong>Time Format:</strong> {{ $tournament->time_format }}</p>
        <p><strong>Format:</strong> {{ $tournament->tournament_format }}</p>

        
        <a href="{{ route('Tournaments.csv', $tournament->id) }}"
            class="w3-button w3-green w3-small">
             CSV File
         </a>


        <a href="{{ route('Tournaments.show', $tournament->id) }}"
            class="w3-button w3-green w3-small">
             View
         </a>

        <a href="{{ route('Tournaments.edit', $tournament->id) }}"
           class="w3-button w3-blue w3-small">
            Edit
        </a>

        <form action="{{ route('Tournaments.destroy', $tournament->id) }}"
              method="POST"
              style="display:inline">
            @csrf
            @method('DELETE')

            <button class="w3-button w3-red w3-small"
                    onclick="return confirm('Are you sure you want to delete this tournament?')">
                Delete
            </button>
        </form>

    </div>
@endforeach

@endsection
