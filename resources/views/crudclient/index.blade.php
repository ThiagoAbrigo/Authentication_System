@extends('dashboard')
@section('content')
    <script src="https://kit.fontawesome.com/86937fa614.js" crossorigin="anonymous"></script>
    <div class="container">
        <div class="p-5 custom-center">
            <h1 class="custom-title">LIST TO PRODUCTS</h1>
            <a href="{{ url('dashboard/create') }}" class="btn-new-product"><i class="fa-solid fa-square-plus"></i></a>
            <table class="table table-striped table-bordered table-hover custom-table">
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
                <tbody class="table-group-divider">
                    @foreach ($products as $product)
                        <tr class="">
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->nombre }}</td>
                            <td>{{ $product->precio }}</td>
                            <td>{{ $product->cantidad }}</td>
                            <td>{{ $product->category->nombre }}</td>
                            <td>
                                <div class="crud-buttons">
                                    <a href="{{ url('dashboard/' . $product->id . '/edit') }}"
                                        class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="{{ url('dashboard/' . $product->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash-can"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
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
                    <table class="table table-striped table-bordered table-hover custom-table">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">CATEGORIA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
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
    </div>

@endsection
