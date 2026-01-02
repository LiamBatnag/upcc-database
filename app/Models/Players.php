<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    protected $fillable = ['first_name', 'last_name', 'rating'];


    //games as white
    public function whitePairings()
    {
        return $this->hasMany(Pairing::class, 'player_id_white');
    }

    //games as lback
    public function blackPairings()
    {
        return $this->hasMany(Pairing::class, 'player_id_black');
    }
    

}
