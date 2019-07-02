<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
    <link href="//fonts.gstatic.com" rel="dns-prefetch">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>HEY NOW YOURE A ROCKSTAR GET YOUR GAME ON GET PAID, AND ALL THAT GLITTERS IS GOLD, ONLY SHOOTING STAAARS BREAK THE MOOOOOOOOOOULD</title>

    <style>


    </style>
</head>

<body>
    <div class="content">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CLIENTE</th>
                    <th scope="col">RECETAS</th>
                    <th scope="col">FARMACOS</th>
                    <th scope="col">MASCOTAS</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>

                </tr>
            </thead>
            <tr>
                <td>
                    <button type="button" name="button" href="{{ route('/clienteLayouts/index') }}">Ir al indice de Clientes</button>
                </td>
                <td>
                  <button type="button" name="button" href="{{ route('/recetaLayouts/index') }}">Ir al Indice de Recetas</button>
                </td>
                <td>
                <button type="button" name="button" href="{{ route('/farmacoLayouts/index') }}">Ir al Indice de Farmacos</button>
                </td>
                <td>
                <button type="button" name="button" href="{{ route('/petLayouts/index') }}">Ir al indice de Mascotas</button>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
