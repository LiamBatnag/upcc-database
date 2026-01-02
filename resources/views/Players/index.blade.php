@extends('layouts.app')

@section('title', 'Players')

@section('content')

<h1 class="w3-text-theme">Players</h1>

<a href="{{ route('Players.create') }}" class="w3-button w3-green w3-margin-bottom">
    + Add Player
</a>

<table class="w3-table-all w3-hoverable w3-margin-top">
    <thead>
        <tr class="w3-theme">
            
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Rating</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($Players as $Player)
        <tr>
            <td>{{ $Player->id }}</td>
            <td>{{ $Player->first_name }}</td>
            <td>{{ $Player->last_name }}</td>
            <td>{{ $Player->rating }}</td>

            <td>

                <a href="{{ route('Players.show', $Player->id) }}"
                    class="w3-button w3-green w3-small">
                     View
                 </a>

                <a href="{{ route('Players.edit', $Player->id) }}"
                   class="w3-button w3-blue w3-small">
                   Edit
                </a>

                <form action="{{ route('Players.destroy', $Player->id) }}"
                      method="POST"
                      style="display:inline">
                    @csrf
                    @method('DELETE')

                    <button class="w3-button w3-red w3-small"
                            onclick="return confirm('Delete this player?')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
