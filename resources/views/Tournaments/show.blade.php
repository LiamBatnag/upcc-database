@extends('layouts.app')

@section('title', $tournament->tournament_name)

@section('content')

<h1 class="w3-text-theme">{{ $tournament->tournament_name }}</h1>

<p><strong>Dates:</strong>
    {{ $tournament->start_date }} to {{ $tournament->end_date }}
</p>

<p><strong>Time Format:</strong> {{ $tournament->time_format }}</p>
<p><strong>Tournament Format:</strong> {{ $tournament->tournament_format }}</p>
<p><strong>Notes:</strong> {{ $tournament->notes }}</p>

<hr>

<h2>Rounds</h2>

@if ($tournament->rounds->isEmpty())
    <p>No rounds created for this tournament yet.</p>
@else
    <table class="w3-table-all w3-hoverable w3-margin-top">
        <thead>
            <tr class="w3-theme">
                <th>ID</th>
                <th>Round #</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        @foreach ($tournament->rounds as $round)
            <tr>
                <td>{{ $round->id }}</td>
                <td>{{ $round->round_number }}</td>
                <td>{{ $round->start_date }}</td>
                <td>

                    <!-- basically if is_completed is null/the checkbox wasnt ticked then itll say on going -->
                    {{ $round->is_completed ? 'Completed' : 'On Going' }}
                </td>
                <td>
                    <a href="{{ route('Rounds.show', $round->id) }}"
                       class="w3-button w3-blue w3-small">
                        View
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endif

@endsection
