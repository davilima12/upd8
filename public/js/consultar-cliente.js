$(document).ready(function () {

    function carregarEstados(url) {
        $.ajax({
            url: '/api/buscar-estados',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                preencherEstados(data);
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocorreu um error tentando buscar os estados',
                    showConfirmButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    buttonsStyling: false,
                })
            }
        });
    }

    function preencherEstados(data) {
        const select = $('#estados');
        $.each(data, function (key, value) {
            select.append($('<option></option>').attr('value', value.id).text(value.uf));
        });


    }

    carregarEstados();


    function carregarCidades(url) {
        $.ajax({
            url: '/api/buscar-cidades',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                preencherCidades(data);
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocorreu um error tentando buscar os estados',
                    showConfirmButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    buttonsStyling: false,
                })
            }
        });
    }

    function preencherCidades(data) {
        const select = $('#cidades');
        $.each(data, function (key, value) {
            select.append($('<option></option>').attr('value', value.id).text(value.nome));
        });


    }

    carregarCidades();

    var cpf = $('#cpf');
    if (cpf.length) {
        new Cleave(cpf, {
            delimiters: ['.', '.', '-'],
            blocks: [3, 3, 3, 2],
        });
    }



    carregarClientes();


    function carregarClientes() {
        $.ajax({
            url: "/api/buscar-clientes",
            type: "GET",
            data: $('#filtro-cliente').serialize(),
            success: function (data) {
                var tabelaClientes = $("#clientes tbody");
                tabelaClientes.empty(); //limpa a tabela antes de preencher com os novos dados
                $.each(data, function (index, cliente) {
                    var row = $("<tr>");
                    row.append($("<td><button class='btn btn-sm btn-success me-1 editar-cliente' data-cliente-id=" + cliente.id + ">Editar</button><button class='btn btn-sm btn-danger excluir-cliente' data-cliente-id=" + cliente.id + ">Excluir</button></td>"));
                    row.append($("<td>" + cliente.nome + "</td>"));
                    row.append($("<td>" + cliente.cpf + "</td>"));
                    row.append($("<td>" + new Date(cliente.data_nascimento).toLocaleDateString() + "</td>"));
                    row.append($("<td>" + cliente.estado + "</td>"));
                    row.append($("<td>" + cliente.cidade + "</td>"));
                    row.append($("<td>" + cliente.sexo + "</td>"));
                    tabelaClientes.append(row);
                });
                Swal.fire({
                    icon: 'success',
                    title: 'Sucesso',
                    text: 'Cliente Carregados com sucesso',
                    showConfirmButton: true,
                    customClass: {
                      confirmButton: 'btn btn-primary',
                    },
                    buttonsStyling: false,
                })
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocorreu um error ao tentar buscar os clientes',
                    showConfirmButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    buttonsStyling: false,
                })
            }
        });
    }

    $('#pesquisar').on('click', function(){
        carregarClientes();
    })

    $('body').on('click', '.excluir-cliente', function(){
        var clienteId = $(this).data('cliente-id')
        Swal.fire({
            icon: 'warning',
            title: 'Atenção!!',
            text: 'Tem certeza que deseja excluir esse cliente',
            showCancelButton: true,
            confirmButtonText: 'Excluir',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar'
          }).then((result) => {
            if (result.isConfirmed) {


                $.ajax({
                    url: '/api/deletar-cliente/'+clienteId,
                    type: 'DELETE',
                    success: function (data) {

                        Swal.fire({
                            icon: 'success',
                            title: 'Sucesso',
                            text: 'Cliente Excluido com sucesso',
                            showConfirmButton: true,
                            customClass: {
                              confirmButton: 'btn btn-primary',
                            },
                            buttonsStyling: false,
                        }).then(function(){
                            carregarClientes();
                        })
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Ocorreu um error ao tentar excluir esse cliente',
                            showConfirmButton: true,
                            customClass: {
                                confirmButton: 'btn btn-primary',
                            },
                            buttonsStyling: false,
                        })
                    }
                });
            }
        })
    })

    $('body').on('click', '.editar-cliente', function(){
        var clienteId = $(this).data('cliente-id')
        window.location.href = "/editar-cliente/"+clienteId;
    })

    $('#limpar-form').on('click', function(){
        $("#filtro-cliente").trigger("reset");

    })
});
