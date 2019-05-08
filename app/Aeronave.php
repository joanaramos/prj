<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeronave extends Model
{
    // Overrides table name
    protected $table = 'aeronaves';

    // Overrides primary key
    protected $primaryKey = 'matricula';

    // Disables auto increment primary key
    public $incrementing = false;

    protected $fillable = [
        'matricula', 'marca', 'modelo','num_lugares',
        'conta_horas', 'preco_hora'
    ];


}
