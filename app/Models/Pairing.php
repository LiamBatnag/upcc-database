<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pairing extends Model
{
    protected $fillable = [
        'board_number',
        'result',
        'game_pgn',
        'player_id_white',
        'player_id_black',
        'round_id',
    ];

    public function whitePlayer()
    {
        return $this->belongsTo(Players::class, 'player_id_white');
    }

    public function blackPlayer()
    {
        return $this->belongsTo(Players::class, 'player_id_black');
    }


    public function rounds()
    {
        return $this->belongsTo(Round::class);
    }
}
