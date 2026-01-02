<?php

namespace App\Http\Controllers;

use App\Models\Pairing;
use Illuminate\Http\Request;
use App\Models\Players;
use App\Models\Round;


class PairingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pairings = Pairing::all();
        return view('pairings.index', compact ('Pairings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Players = Players::all();
        $Rounds  = Round::all();
    return view('pairings.create', compact('Players', 'Rounds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'board_number' => 'required',
            'result' => 'required',
            'game_pgn' => 'required',
            'player_id_white' => 'required',
            'player_id_black' => 'required',
            'round_id' =>'nullable|exists:rounds,id',
        ]);

        Pairing::create($validated);
        return redirect()->route('Pairings.index')->with('success', 'Game added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pairing = Pairing::findOrFail($id);

    return view('Pairings.show', compact('pairing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Pairings = Pairing::findOrFail($id);
        return view('Pairings.edit', compact('Pairings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $validated =$request->validate([
            'board_number' => 'required',
            'result' => 'required',
            'game_pgn' => 'required',
            'player_id_white' => 'required',
            'player_id_black' => 'required',
            'round_id' => 'nullable|exists:rounds,id', 
        ]);

        $Pairings = Pairing::findOrFail($id); //finds the player
        $Pairings->update($validated); //updates the player with new data

        return redirect()->route('Pairings.index')->with('success', 'Game updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $Pairings = Pairing::findOrFail($id); //finds the player
        $Pairings->delete(); //delets the player

        return redirect()->route('Pairings.index')->with('success', 'Game removed successfully');

    }
}
