<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Pairing;
use App\Models\Round;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tournaments = Tournament::all();   
        return view('tournaments.index', compact ('Tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Tournaments = Tournament::all();
    return view('tournaments.create', compact('Tournaments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tournament_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'time_format' => 'required',
            'tournament_format' => 'required',
            'csv_file' => 'required',
            'notes' => 'required',

        ]);

        Tournament::create($validated);
        return redirect()->route('Tournaments.index')->with('success', 'Tournament created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tournament = Tournament::with('rounds')->findOrFail($id);

    return view('Tournaments.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $tournaments = Tournament::findOrFail($id);
        return view('tournaments.edit', compact('tournaments'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $validated = $request->validate([
            'tournament_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'time_format' => 'required',
            'tournament_format' => 'required',
            'csv_file' => 'required',
        ]);

        $tournament = Tournament::findOrFail($id);
        $tournament->update($validated);
    
        return redirect()->route('Tournaments.index')->with('success', 'Tournament updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       $Tournaments = Tournament::findOrFail($id); 
        $Tournaments->delete(); 

        return redirect()->route('Tournaments.index')->with('success', 'Tournament removed successfully');
    }

    public function csv($id)
    {
        $tournament = Tournament::findOrFail($id);
    
        return view('Tournaments.csv', compact('tournament'));
    }
    


}
