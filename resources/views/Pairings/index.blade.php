@extends('layouts.app')

@section('title', 'Pairings')

@section('content')

<h1 class="w3-text-theme">Games</h1>

<a href="{{ route('Pairings.create') }}" class="w3-button w3-green w3-margin-bottom">
    + Add a Game
</a>


@foreach($Pairings as $Pairing)
    <div class="w3-card w3-theme w3-padding w3-margin-bottom">

        <p><strong>Game ID:</strong> {{ $Pairing->id }}</p>

        <p><strong>White:</strong>
            {{ $Pairing->whitePlayer->first_name }}
            {{ $Pairing->whitePlayer->last_name }}
        </p>

        <p><strong>Black:</strong>
            {{ $Pairing->blackPlayer->first_name }}
            {{ $Pairing->blackPlayer->last_name }}
        </p>

        <p><strong>Result:</strong> {{ $Pairing->result }}</p>

        <a href="{{ route('Pairings.show', $Pairing->id) }}"
            class="w3-button w3-green w3-small">
             View
         </a>

        <a href="{{ route('Pairings.edit', $Pairing->id) }}" 
           class="w3-button w3-blue w3-small">Edit</a>

        <form action="{{ route('Pairings.destroy', $Pairing->id) }}" 
              method="POST" 
              style="display:inline">
            @csrf
            @method('DELETE')
            <button class="w3-button w3-red w3-small" 
                    onclick="return confirm('Delete this game?')">
                Delete
            </button>
        </form>

    </div>
@endforeach

@endsection
