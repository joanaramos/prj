<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
        'num_socio','nome_informal',
        'sexo', 'data_nascimento','nif',
        'telefone','endereco','tipo_socio',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function typeToStr()
    {
        switch ($this->tipo_socio) {
            case 'A':
                return 'Aeromodelista';
            case 'P':
                return 'Piloto';
            case 'NP':
                return 'Não Piloto';
        }

        return 'Unknown';
    }

    public function isAdministrator()
    {
        return $this->direcao === 1;
    }

    public function isPiloto()
    {
        return $this->tipo_socio === 'P';
    }


}
