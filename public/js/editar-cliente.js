$(document).ready(function () {

    $.validator.addMethod("minlength11", function (value, element) {
        return this.optional(element) || value.length >= 14;
    }, "Por favor digite um CPF valido.");

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
    var form = $('#editar-cliente');

    if (form.length) {
        form.validate({
            rules: {
                nome: {
                    required: true,
                },
                cpf: {
                    required: true,
                    minlength11: true,

                },
                sexo: {
                    required: true,
                },
                estado: {
                    required: true,
                },
                cidade: {
                    required: true,
                },
                data: {
                    required: true,
                },
                endereco: {
                    required: true,
                }
            },
        });
    }

    $('#masculino').on('click', function () {
        $('#feminino').prop('checked', false)
    })

    $('#feminino').on('click', function () {
        $('#masculino').prop('checked', false)
    })

    $('#editar-cliente').on('submit', function (e) {
        e.preventDefault();
        if (form.valid()) {
            $.ajax({
                url: '/api/editar-cliente/'+ $('#cliente-id').val(),
                type: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content'),
                },
                data: form.serialize(),
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sucesso',
                        text: 'Cliente Editado com sucesso',
                        showConfirmButton: true,
                        customClass: {
                            confirmButton: 'btn btn-primary',
                        },
                        buttonsStyling: false,
                    }).then(function () {
                        window.location.href = "/";
                    })
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Ocorreu um error na edição',
                        showConfirmButton: true,
                        customClass: {
                            confirmButton: 'btn btn-primary',
                        },
                        buttonsStyling: false,
                    })
                }
            });
        }
    });

    buscarDadosClientePrencherCampos()

    function buscarDadosClientePrencherCampos() {
        $.ajax({
            url: '/api/buscar-cliente/' + $('#cliente-id').val(),
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data)
                $('#cpf').val(data.cpf)
                $('#nome').val(data.nome)
                $('#data').val(data.data_nascimento)
                $('#endereco').val(data.endereco)
                $('#estados').val(data.estado_id)
                $('#cidades').val(data.cidade_id)

                if(data.sexo_id == 1){
                    $('#masculino').prop('checked', true)
                }else{
                    $('#feminino').prop('checked', true)
                }
            },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Ocorreu um error tentando buscar os dados desse cliente',
                    showConfirmButton: true,
                    customClass: {
                        confirmButton: 'btn btn-primary',
                    },
                    buttonsStyling: false,
                })
            }
        });
    }

    $('#limpar-form').on('click', function(){
        $("#editar-cliente").trigger("reset");

    })
});
