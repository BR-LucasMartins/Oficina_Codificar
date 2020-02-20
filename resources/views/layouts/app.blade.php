<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/3.10.1/stylesheets/locastyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href=  {{ asset("css/app.css") }}>
    <link rel="stylesheet" href=  {{ asset("css/bootstrap.min.css") }}>

    <!-- data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


    <title> Codificar </title>
</head>
<body>

    <div class="container text-center ">

        <img class="text-center" src="{{ asset('img/logo1.png') }}" id="img-lock">

        <!-- Conteúdo -->
        @yield('conteudo')
    </div>

   <!-- Footer -->
   @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src = {{ asset("js/bootstrap.min.js") }}></script>
    <script src="//assets.locaweb.com.br/locastyle/3.10.1/javascripts/locastyle.js"></script>
    <script src = {{ asset("js/bootstrap.min.js") }}></script>

    <!-- data tables -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"></script>

    <!-- Script para tradução da tabela p/ portugues --> 
    <script src = {{ asset("js/script.js") }}></script>
    <script src = {{ asset("js/funcoes.js") }}></script>
</body>
</html>

