<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'numero_do_ticket','numero_do_pedido', 'titulo','conteudo','cliente_id'
    ];

    public function cliente () {
       return $this->belongsTo('App\Models\Cliente');
    }
}
