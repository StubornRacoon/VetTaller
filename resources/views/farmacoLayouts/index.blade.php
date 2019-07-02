<!DOCTYPE html>
<html lang="es">

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

    <title>CRUD DE FARMACOS :)</title>

    <style>


    </style>
</head>

<body>
  <div class="content">
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Raza</th>
                  <th scope="col"> </th>

              </tr>
          </thead>
          @foreach ($Farmacos as $item)
          <tr>
              <td>{{ $item->id }}</td>
              <td>{{ $item->nombre }}</td>
              <td>{{ $item->raza }}</td>
              <td>
                <form action="/farmacoLayouts/index/{{ $item->id }}" method="post">
                  <button type="button" name="button" href="/farmacoLayouts/show">Mostrar</button>
                  <button type="button" name="button" href="/farmacotLayouts/{{ $item->id }}/edit">Editar</button>
                  <button type="button" name="button">Deletear</button>
                </form>
              </td>
          </tr>
          @endforeach
      </table>
  </div>
</body>

</html>
