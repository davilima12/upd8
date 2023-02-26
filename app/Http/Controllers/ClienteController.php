<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Services\ClienteServices;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    protected $clienteService;
    public function __construct(ClienteServices $clienteService)
    {
        $this->clienteService = $clienteService;
    }

    public function index()
    {
        return view('cliente.consulta');
    }


    public function create()
    {
        return view('cliente.cadastro');
    }

    public function buscarClientes(Request $request)
    {
        try {
            return response()->json($this->clienteService->buscarClientes($request->all()), 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }


    public function store(Request $request)
    {
        try {
            return response()->json($this->clienteService->store($request->all()), 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }


    public function buscarCliente($id)
    {
        try {
            return response()->json(Cliente::find($id), 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }


    public function edit($id)
    {
        return view('cliente.editar')->with('id', $id);
    }


    public function update(Request $request, $id)
    {
        try {
            return response()->json($this->clienteService->update($request->all(), $id), 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }


    public function destroy($id)
    {
        try {
            return response()->json($this->clienteService->destroy($id), 200);
        } catch (\Exception $e) {
            return response()->json($e->getMessage(), 400);
        }
    }
}
