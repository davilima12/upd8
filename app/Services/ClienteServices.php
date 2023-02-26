<?php

namespace App\Services;

use App\Repository\ClienteRepository;

class ClienteServices
{

    protected $clienteRepository;
    public function __construct(ClienteRepository $clienteRepository)
    {
        $this->clienteRepository = $clienteRepository;
    }

    public function store($request)
    {
        return $this->clienteRepository->store($request);
    }

    public function buscarClientes($request)
    {
        return $this->clienteRepository->buscarClientes($request);
    }


    public function update($request, $id)
    {
        return $this->clienteRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->clienteRepository->destroy($id);
    }
}
