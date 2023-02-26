@extends('index')

@section('conteudo')
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-10 border rounded">
        <img src="/imagens/logo.png" alt="">

        <div class="row border rounded m-2 mb-4 mt-3">
            <div class="col">
                <h5 class="card-title text-primary mb-3 mt-1">Editar Cliente</h5>
                <form id="editar-cliente">
                    <input type="hidden" name="cliente_id" id="cliente-id" value="{{ $id }}">
                    <div class="row mb-4">
                        <div class="col-2  mb-3">
                            <label for="cpf" class="col-form-label"><strong>CPF:</strong> </label>
                            <input required type="text" class="form-control ms-1" id="cpf" placeholder="000.000.000-00" name="cpf">
                        </div>
                        <div class="col-4  mb-3">
                            <label for="nome" class="col-form-label"><strong>Nome:</strong> </label>
                            <input required type="text" class="form-control ms-1" id="nome"  name="nome">
                        </div>
                        <div class="col-3  mb-">
                            <label for="data" class="col-form-label text-nowrap"><strong>Data Nascimento:</strong> </label>
                            <input type="date" class="form-control form-control ms-1" id="data"  name="data">
                        </div>

                        <div class="col-3 mb-3 justify-content-center align-items-center">
                            <label for="nome" class="col-form-label"><strong>Sexo:</strong> </label>
                            <div class="ms-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="sexo" type="checkbox" id="masculino" value="1">
                                    <label class="form-check-label" for="masculino">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" name="sexo" type="checkbox" id="feminino" value="2">
                                    <label class="form-check-label" for="feminino">Feminino</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-6  mb-">
                            <label for="endereco" class="col-form-label text-nowrap"><strong>Endereço:</strong> </label>
                            <input type="text" class="form-control form-control ms-1" id="endereco"  name="endereco">
                        </div>
                        <div class="col-3  mb-3">
                            <label for="estado" class="col-form-label"><strong>Estado:</strong> </label>
                            <select required class="form-control ms-1" name="estado" id="estados">
                            </select>
                        </div>

                        <div class="col-3 mb-3">
                            <label for="cidade" class="col-form-label ms-1"><strong>Cidade:</strong> </label>
                            <select required class="form-control" name="cidade" id="cidades">
                            </select>
                        </div>


                    </div>
                    <div class="col d-flex justify-content-end mb-2">
                        <button type="submit" class="btn btn-primary me-2">Editar</button>
                        <button type="button" class="btn btn-light " id="limpar-form">Limpar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
    <script src="/js/editar-cliente.js"></script>
@endsection
