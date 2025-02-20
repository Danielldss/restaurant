<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        //lista todos os pratos disponiveis com descricao
    }

    public function create()
    {
        //renderiza o formulario para adicionar um novo prato
    }

    public function store(Request $request)
    {
        //salva o novo prato no banco de dados
    }

    public function show($id)
    {
        //renderiza o prato com o id informado
    }

    public function edit($id)
    {
        //renderiza o formulario para editar o prato com o id informado
    }

    public function update(Request $request, $id)
    {
        //atualiza o prato com o id informado
    }

    public function destroy($id)
    {
        //remove o prato com o id informado
    }
}
