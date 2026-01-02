@extends('layouts.app')

@section('title', 'Player Profile')

@section('content')

<div class="w3-container">

    <h1 class="w3-text-theme">
        {{ $player->first_name }} {{ $player->last_name }}
    </h1>

    <p><strong>Rating:</strong> {{ $player->rating }}</p>

    <hr>

    <h3>Statistics</h3>

    <p><strong>Games Played:</strong> {{ $games->count() }}</p>
    <p><strong>Wins:</strong> {{ $wins }}</p>
    <p><strong>Losses:</strong> {{ $losses }}</p>
    <p><strong>Draws:</strong> {{ $draws }}</p>
    
    <hr>
    

    <h3>Games</h3>

    @if($games->isEmpty())
        <p>No games found.</p>
    @else
        <table class="w3-table-all w3-hoverable w3-margin-top">
            <thead>
                <tr class="w3-theme">
                    <th>Game ID</th>
                    <th>Color</th>
                    <th>Opponent</th>
                    <th>Result</th>
                    <th>Game</th>
                </tr>
            </thead>

            <tbody>
                @foreach($games as $game)
                    <tr>
                        <td>{{ $game->id }}</td>

                        <td>
                            {{ $game->player_id_white == $player->id ? 'White' : 'Black' }}
                        </td>

                        <td>
                            @if($game->player_id_white == $player->id)
                                {{ $game->blackPlayer->first_name }}
                                {{ $game->blackPlayer->last_name }}
                            @else
                                {{ $game->whitePlayer->first_name }}
                                {{ $game->whitePlayer->last_name }}
                            @endif
                        </td>

                        <td>{{ $game->result }}</td>

                        <td><a href="{{ route('Pairings.show', $game->id) }}"
                            class="w3-button w3-green w3-small">
                             View
                         </a></td>

                    </tr>

                @endforeach
            </tbody>
        </table>
    @endif

    <br>

    <a href="{{ route('Players.index') }}" class="w3-button w3-gray">
        ← Back to Players
    </a>

</div>

@endsection
