<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // lista tudo o que foi consumido na conta
        // ja cm os 10 do garçon
    }

    public function create()
    {
        // forma de pagamentos pix (dinheiro, cartão, PIX)

    }

    public function store(Request $request)
    {
        // salvar dados do checkout
    }

    public function show($id)
    {
        // mostrar detalhes do pagamento
    }

    public function edit($id)
    {
        // editar dados do checkout
    }

    public function update(Request $request, $id)
    {
        // atualizar dados do checkout
    }

    public function destroy($id)
    {
    }
}
