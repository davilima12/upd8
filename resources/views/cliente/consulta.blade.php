@extends('index')
@section('css')
    <style>

    </style>
@endsection
@section('conteudo')
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-10 border rounded">
            <img src="/imagens/logo.png" alt="">

            <div class="row border rounded m-2 mb-4 mt-3">
                <div class="col">
                    <h5 class="card-title text-primary mb-3 mt-1">Consulta Cliente</h5>
                    <form id="filtro-cliente">
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
                                        <input class="form-check-input" name="sexo[]" type="checkbox" checked id="masculino" value="1">
                                        <label class="form-check-label" for="masculino">Masculino</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="sexo[]" type="checkbox" id="feminino" value="2">
                                        <label class="form-check-label" for="feminino">Feminino</label>
                                    </div>
                                </div>

                            </div>
                            <div class="col-3  mb-3">
                                <label for="estado" class="col-form-label"><strong>Estado:</strong> </label>
                                <select required class="form-control ms-1" name="estado" id="estados">
                                    <option >Todos</option>
                                </select>
                            </div>

                            <div class="col-3 mb-3">
                                <label for="cidade" class="col-form-label ms-1"><strong>Cidade:</strong> </label>
                                <select required class="form-control" name="cidade" id="cidades">
                                    <option >Todos</option>
                                </select>
                            </div>


                        </div>
                        <div class="col d-flex justify-content-end mb-2">
                            <button id="pesquisar" type="button" class="btn btn-primary me-2">Pesquisar</button>
                            <button type="button" class="btn btn-light" id="limpar-form">Limpar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row border rounded m-2">
                <div class="col">
                    <h5 class="card-title text-primary mb-3 mt-1">Resultado da Pesquisa</h5>
                    <table class="table " id="clientes">
                        <thead  class="table-light">
                            <tr>
                                <th scope="col">Açoes</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Data Nasc.</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Cidade</th>
                                <th scope="col">Sexo</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('scripts')
    <script src="/js/consultar-cliente.js"></script>
@endsection
