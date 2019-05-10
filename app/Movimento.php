<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movimento extends Model
{
    use SoftDeletes;

    // Overrides table name
    protected $table = 'movimentos';


    protected $fillable = [
        'data','hora_descolagem','hora_aterragem',
        'num_diario','num_servico',
    ];

    protected $casts = [
        'hora_descolagem' => 'datetime',
        'hora_aterragem' => 'datetime',
    ];
}
