<?php

namespace App\Http\Controllers;

use App\Models\Round;
use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Pairing;


class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Rounds = Round::all();
        return view('rounds.index', compact ('Rounds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Rounds = Round::all();
    return view('rounds.create', compact('Rounds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'is_completed' => 'required',
            'start_date' => 'required',
            'round_number' => 'required',
            'tournament_id' => 'nullable|exists:tournaments,id',

        ]);

        Round::create($validated);
        return redirect()->route('Rounds.index')->with('success', 'Round added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $round = Round::with([
            'pairings.whitePlayer',
            'pairings.blackPlayer'
        ])->findOrFail($id);
    
        return view('Rounds.show', compact('round'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Rounds = Round::findOrFail($id);
        return view('rounds.edit', compact('Rounds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'start_date'     => 'required|date',
        'round_number'   => 'required|integer',
        'tournament_id'  => 'nullable|exists:tournaments,id',
        'is_completed'   => 'nullable', 
    ]);

    // converting the checkbox we had into a boolean so it can be put into the databaheahehehayse
    $validated['is_completed'] = $request->has('is_completed');

    $round = Round::findOrFail($id);
    $round->update($validated);

    return redirect()->route('Rounds.index')->with('success', 'Round updated successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $Rounds = Round::findOrFail($id); //finds the player
        $Rounds->delete(); //delets the player

        return redirect()->route('Rounds.index')->with('success', 'Round removed successfully');

    }
}
