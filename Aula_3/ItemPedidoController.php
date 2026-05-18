<?php

namespace App\Http\Controllers;

use App\Models\ItemPedido;
use Illuminate\Http\Request;

class ItemPedidoController extends Controller
{
    public function index()
    {
        return response()->json(ItemPedido::all());
    }

    public function store(Request $request)
    {
        $item = ItemPedido::create($request->all());

        return response()->json($item, 201);
    }

    public function show(string $id)
    {
        return response()->json(ItemPedido::findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $item = ItemPedido::findOrFail($id);
        $item->update($request->all());

        return response()->json($item);
    }

    public function destroy(string $id)
    {
        $item = ItemPedido::findOrFail($id);
        $item->delete();

        return response()->json(['mensagem' => 'Item excluído com sucesso']);
    }
}
