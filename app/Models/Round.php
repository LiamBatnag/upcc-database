<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//apparently this is needed??
use Illuminate\Database\Eloquent\Relations\HasMany;


class Round extends Model
{
    protected $fillable = [
        'is_completed',
        'start_date',
        'round_number',
        'tournament_id',
    ];
    
    //a round belongs to ONE tournament
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    //a round may have MANY pairings
    public function pairings(): HasMany
    {
        return $this->hasMany(Pairing::class);
    }

}
