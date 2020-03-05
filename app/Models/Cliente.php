<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome_cliente', 'email_cliente'
    ];

    public function tickets () {
       return $this->hasMany('App\Models\Ticket');
    }
}
