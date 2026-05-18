<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        return response()->json(Pedido::with('itens')->get());
    }

    public function store(Request $request)
    {
        $pedido = Pedido::create($request->all());

        return response()->json($pedido, 201);
    }

    public function show(string $id)
    {
        return response()->json(Pedido::with('itens')->findOrFail($id));
    }

    public function update(Request $request, string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->update($request->all());

        return response()->json($pedido);
    }

    public function destroy(string $id)
    {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return response()->json(['mensagem' => 'Pedido excluído com sucesso']);
    }
}
