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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container-form">
        <form action="{{ url('dashboard/' . $products->id) }}" method="POST" class="custom-form">
            @method('PUT')
            @csrf
            <legend><b>EDIT PRODUCTS</b></legend>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nombre:</label>
                <input type="text" value="{{ $products->nombre }}" name="nombre" id="disabledTextInput"
                    class="form-control" placeholder="Nombre del producto">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Precio:</label>
                <input type="text" value="{{ $products->precio }}" name="precio" id="disabledTextInput"
                    class="form-control" placeholder="Precio del producto">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Cantidad:</label>
                <input type="number" value="{{ $products->cantidad }}" name="cantidad" id="disabledTextInput"
                    class="form-control" placeholder="Cantidad del producto">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">categoria:</label>
                <select name="categoria_id" name="category" class="custom-select" id="inputGroupSelect01">
                    <option value="">Seleccionar</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->categoria_id }}"
                            @if ($categoria->categoria_id == $products->categoria_id) {{ 'selected' }} @endif>{{ $categoria->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="button-custom">
                <a href="{{ url('dashboard') }}" class="btn btn-secondary">Regresar</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
