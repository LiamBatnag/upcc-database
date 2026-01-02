<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'tournament_name',
        'start_date',
        'end_date',
        'time_format',
        'tournament_format',
        'csv_file',
        'notes',

    ];

public function rounds()
{
    return $this->hasMany(Round::class);
}
    


}
