@extends('dashboard')
@section('content')
    @vite('resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js')
    <h1>LIST TO PRODUCTS</h1>
    <br>
    <div class="container">
        <a href="{{ url('dashboard/create') }}" class="btn-new-product" style="color: black">New product</a>
        <br>
        <table class="table-styled">
            <br>
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">CANTIDAD</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">CRUD</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr class="">
                        <td scope="row">{{ $product->id }}</td>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->precio }}</td>
                        <td>{{ $product->cantidad }}</td>
                        <td>{{ $product->category->nombre }}</td>
                        <td>
                            <a href="{{ url('dashboard/' . $product->id . '/edit') }}" class="btn btn-warning">Edit</a>
                            <form action="{{ url('dashboard/' . $product->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" style="color: black">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="filters">
            <h1>Information filters</h1>
            <form action="{{ route('filters_products') }}" method="GET">
                @csrf
                <select name="categoria_id" id="categoria_id" class="form-select" aria-label="Default select example">
                    <option value="">Seleccione la categoria</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->categoria_id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
            @if (@isset($products))
                <table class="table-styled">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">CATEGORIA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr class="">
                                <td scope="row">{{ $product->id }}</td>
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->category->nombre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
