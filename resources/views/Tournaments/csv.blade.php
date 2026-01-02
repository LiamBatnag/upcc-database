@extends('layouts.app')

@section('title', 'Tournament CSV')

@section('content')
<h1>{{ $tournament->tournament_name }} — CSV</h1>

<div style="
   max-width: 100%;
   overflow-x: auto;
   background: #111;
   color: #eee;
   padding: 1rem;
   border-radius: 6px;
">
   <pre style="
       white-space: pre-wrap;
       word-break: break-word;
       margin: 0;
   ">

{{ $tournament->csv_file }}
   </pre>
</div>

<a href="{{ route('Tournaments.index') }}" class="w3-button w3-green w3-margin-top">
    Back to Tournaments
</a>

@endsection