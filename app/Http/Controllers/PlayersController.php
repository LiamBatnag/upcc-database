<?php

namespace App\Http\Controllers;

use App\Models\Players;
use Illuminate\Http\Request;
use App\Models\Pairing;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Players = Players::all();
        return view('players.index', compact ('Players'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'rating' => 'required',
        ]);

        Players::create($validated);
        return redirect()->route('Players.index')->with('success', 'Player added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $player = Players::findOrFail($id);

        //what were doing is every Pairing that is associated with either white player or black player gets added to the games,
        //then well display thos games in the player profile
    $games = Pairing::with(['whitePlayer', 'blackPlayer'])
        ->where('player_id_white', $player->id)
        ->orWhere('player_id_black', $player->id)
        ->get();


        //used for counting stats
        $wins = 0;
        $losses = 0;
        $draws = 0;


        foreach ($games as $game) {

            // Draw
            if ($game->result === '1/2-1/2') {
                $draws++;
                continue;
            }
        
            $playerIsWhite = $game->player_id_white == $player->id;
        
            // Player wins
            if (
                ($playerIsWhite && $game->result === '1-0') ||
                (!$playerIsWhite && $game->result === '0-1')
            ) {
                $wins++;
            }
            // Player loses
            else {
                $losses++;
            }
        }
        

    return view('Players.show', compact('player', 'games', 'wins', 'losses', 'draws'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $Players = Players::findOrFail($id);
        return view('Players.edit', compact('Players'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $validated =$request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'rating' => 'required',
        ]);

        $Players = Players::findOrFail($id); //finds the player
        $Players->update($validated); //updates the player with new data

        return redirect()->route('Players.index')->with('success', 'Player updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $Players = Players::findOrFail($id); //finds the player
        $Players->delete(); //delets the player

        return redirect()->route('Players.index')->with('success', 'Player removed successfully');

    }
}
