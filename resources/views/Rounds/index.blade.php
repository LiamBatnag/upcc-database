@extends('layouts.app')

@section('title', 'Rounds')

@section('content')

<h1 class="w3-text-theme">Rounds</h1>

<a href="{{ route('Rounds.create') }}" class="w3-button w3-green w3-margin-bottom">
    + Create New Round
</a>

<table class="w3-table-all w3-hoverable w3-margin-top">
    <thead>
        <tr class="w3-theme">
            <th>ID</th>
            <th>Date</th>
            <th>Round Number</th>
            <th>Tournament</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($Rounds as $Round)
            <tr>
                <td>{{ $Round->id }}</td>
                <td>{{ $Round->start_date }}</td>
                <td>{{ $Round->round_number }}</td>
                <td>{{ $Round->tournament?->tournament_name ?? '—' }}</td>

                <td>
                    <a href="{{ route('Rounds.show', $Round->id) }}"
                        class="w3-button w3-green w3-small">
                         View
                     </a>

                    <a href="{{ route('Rounds.edit', $Round->id) }}"
                       class="w3-button w3-blue w3-small">
                        Edit
                    </a>

                    <form action="{{ route('Rounds.destroy', $Round->id) }}"
                          method="POST"
                          style="display:inline">
                        @csrf
                        @method('DELETE')

                        <button class="w3-button w3-red w3-small"
                                onclick="return confirm('Delete this round?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
