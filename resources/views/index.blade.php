<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Upd8</title>
        <style>
            .nav-bar{
                margin-bottom: 70px;
            }
        </style>
        <link rel="stylesheet" href="/css/bootstrap.min.css" >
        <link rel="stylesheet" href="/css/form-validation.css" >
        <link rel="stylesheet" href="/css/sweetalert2.min.css" >
        @yield('css')
    </head>
    <body>
        <div class="row ">
            <div class="col-12 nav-bar">
                @include('navbar')
            </div>
            <div class="col-12">
                @yield('conteudo')
            </div>
        </div>


        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.validate.min.js"></script>
        <script src="/js/form-validate-pt-br.js"></script>
        <script src="/js/cleave.min.js"></script>
        <script src="/js/sweetalert2.all.min.js"></script>



        @yield('scripts')

    </body>

</html>
