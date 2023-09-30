<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{route('dashboard.store')}}" method="POST">
        @csrf
          <legend>ADD PRODUCTS</legend>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nombre:</label>
            <input type="text" name="nombre" id="disabledTextInput" class="form-control" placeholder="Nombre del producto">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Precio:</label>
            <input type="text" name="precio" id="disabledTextInput" class="form-control" placeholder="Precio del producto">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cantidad:</label>
            <input type="number" name="cantidad" id="disabledTextInput" class="form-control" placeholder="Cantidad del producto">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">categoria:</label>
            <select name="categoria_id" name="category" class="custom-select" id="inputGroupSelect01">
                <option value="">Seleccionar</option>
                @foreach ($categorias as $categoria)
                <option value="{{$categoria->categoria_id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select>
          </div>
          <a href="{{url('dashboard')}}" class="btn btn-secondary">Regresar</a>
          <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>        