@extends('layouts.app')

@section('title', 'Round ' . $round->round_number)

@section('content')

<h1 class="w3-text-theme">
    Round {{ $round->round_number }}
</h1>

<p><strong>Date:</strong> {{ $round->start_date }}</p>
<p><strong>Status:</strong>
    {{ $round->is_completed ? 'Completed' : 'In Progress' }}
</p>

<hr>

<h2>Pairings</h2>

@if ($round->pairings->isEmpty())
    <p>No games have been added to this round yet.</p>
@else
    <table class="w3-table-all w3-hoverable w3-margin-top">
        <thead>
            <tr class="w3-theme">
                <th>Board</th>
                <th>White</th>
                <th>Black</th>
                <th>Result</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($round->pairings as $pairing)
            <tr>
                <td>{{ $pairing->board_number }}</td>

                <td>
                    {{ $pairing->whitePlayer->first_name }}
                    {{ $pairing->whitePlayer->last_name }}
                </td>

                <td>
                    {{ $pairing->blackPlayer->first_name }}
                    {{ $pairing->blackPlayer->last_name }}
                </td>

                <td>{{ $pairing->result }}</td>

                <td>
                    <a href="{{ route('Pairings.show', $pairing->id) }}"
                       class="w3-button w3-blue w3-small">
                        View Game
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

@endsection
