<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $table = 'itens_pedido';

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade',
        'preco'
    ];

    public function pedido()
    {
        return $this->belongsTo(Pedido::class);
    }
}
