<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'numero_do_pedido', 'titulo','conteudo'
    ];
}