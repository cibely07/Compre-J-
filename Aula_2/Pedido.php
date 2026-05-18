<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'user_id',
        'data_pedido',
        'status'
    ];

    public function itens()
    {
        return $this->hasMany(ItemPedido::class);
    }
}
