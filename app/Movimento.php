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
        pla

    ];
}
