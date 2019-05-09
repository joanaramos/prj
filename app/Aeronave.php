<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aeronave extends Model
{
    use SoftDeletes;

    // Overrides table name
    protected $table = 'aeronaves';

    // Overrides primary key
    protected $primaryKey = 'matricula';

    // Disables auto increment primary key
    public $incrementing = false;

    protected $fillable = [
        'matricula', 'marca', 'modelo'
    ];


}
