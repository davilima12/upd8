<?php

namespace App\Repository;

use App\Models\Cliente;

class ClienteRepository
{

    protected $clienteModel;
    public function __construct(Cliente $clienteModel)
    {
        $this->clienteModel = $clienteModel;
    }


    public function store($request)
    {
        return $this->clienteModel->create([
            "cpf" => $request['cpf'],
            "nome" => $request['nome'],
            "sexo_id" => $request['sexo'],
            "estado_id" => $request['estado'],
            "cidade_id" => $request['cidade'],
            "data_nascimento" => $request['data'],
            "endereco" => $request['endereco'],
        ]);
    }

    public function buscarClientes($request)
    {
        $query = $this->clienteModel->select(
            'clientes.id',
            'sexos.nome as sexo',
            'estados.uf as estado',
            'cidades.nome as cidade',
            'clientes.nome',
            'clientes.cpf',
            'clientes.data_nascimento'
        )
        ->join('sexos', 'sexos.id', 'clientes.sexo_id')
        ->join('cidades', 'cidades.id', 'clientes.cidade_id')
        ->join('estados', 'estados.id', 'clientes.estado_id')
        ->orderBy('clientes.id', 'desc');

        if(isset($request['cpf'])){
            $cpf = $request['cpf'];
            $query = $query->where('clientes.cpf', 'like', "%$cpf%");
        }

        if($request['estado'] != 'Todos'){
            $query = $query->where('clientes.estado_id', $request['estado']);
        }

        if($request['cidade'] != 'Todos'){
            $query = $query->where('clientes.cidade_id', $request['cidade']);
        }

        if(isset($request['nome'])){
            $nome = $request['nome'];
            $query = $query->where('clientes.nome', 'like', "%$nome%");
        }

        if(isset($request['data'])){
            $query = $query->where('clientes.data_nascimento', $request['data']);
        }

        if(isset($request['sexo'])){
            $query = $query->whereIn('sexos.id', $request['sexo']);
        }

        return $query->get();;
    }


    public function update($request, $id)
    {
        return $this->clienteModel->find($id)->update(
            [
                'nome' => $request['nome'],
                'cpf'=> $request['cpf'],
                'data_nascimento'=> $request['data'],
                'endereco'=> $request['endereco'],
                'estado_id'=> $request['estado'],
                'cidade_id'=> $request['cidade'],
                'sexo_id'=> $request['sexo'],
            ]
        );
    }

    public function destroy(string $id)
    {
        return $this->clienteModel->find($id)->delete();
    }
}
