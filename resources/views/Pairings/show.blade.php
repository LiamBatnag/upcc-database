@extends('layouts.app')

@section('title', 'game_pgn')

@section('content')

<h1 class="w3-text-theme">Game PGN</h1>

<div class="w3-card w3-padding w3-margin-top">
    <pre style="
        white-space: pre-wrap;
        font-family: monospace;
        background: #111;
        padding: 16px;
        border-radius: 4px;
    ">
{{ $pairing->game_pgn ?? 'No PGN available for this game.' }}
    </pre>
</div>

<a href="{{ route('Pairings.index') }}"
   class="w3-button w3-theme w3-margin-top">
    ← Back to Games
</a>

@endsection
