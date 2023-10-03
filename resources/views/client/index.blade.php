<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7ad6698d85.js" crossorigin="anonymous"></script>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
                <div class="float-right">
                    <a  href="{{ route('client.create') }}" class="block px-4 py-2 text-black bg-blue-500 hover:bg-blue-600">
                    {{ __('Create New') }}</a>
                </div>
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-800 text-white">
                            <th class="px-4 py-2">No</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Show Orders</th>
                            <th class="px-4 py-2">Add Order</th>

                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($client as $cli)
                        <tr>
                            <td> {{++$i}}</td>
                            <td>{{$cli->name}}</td>
                            <td>{{$cli->email}}</td>
                            <td> 
                                <a href="{{ route('showorders.index',['client' => $cli->name]) }}"   > <i class="fa-brands fa-shopify " style="color: #1458cc;" ></i>   </a> 
                            </td>

                            <td> 
                                <a href="{{route('order.index')}}" >
                                    <i class="fa-solid fa-cart-plus" style="color: #1458cc;"></i>    
                                </a> 
                            </td>
                            <td>
                                <form action="{{ route('client.destroy',$cli->id) }}" method="POST">
                                    <a class="btn btn-sm btn-primary " href="{{ route('client.show',$cli->id) }}">
                                        <i class="fa fa-fw fa-eye" style="color: #1aa958;"></i> {{ __('Show') }}
                                    </a>
                                    <a class="btn btn-sm btn-success" href="{{ route('client.edit',$cli->id) }}">
                                        <i class="fa fa-fw fa-edit" style="color: #1458cc;"></i> 
                                        {{ __('Edit') }}
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-fw fa-trash" style="color: #9e2b2b;"></i> {{ __('Delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                  <!-- Contenido de la tabla -->
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
