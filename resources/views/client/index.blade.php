<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="table">
            <button class="button-create">
                <a href="{{ route('client.create') }}">
                    {{ __('Create New') }}</a>
            </button>
            <table>
                <thead class="custom-title">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Show Orders</th>
                        <th>Add Order</th>

                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($client as $cli)
                        <tr>
                            <td class="body"> {{++$i}}</td>
                            <td class="bodyname nameClient">{{$cli->name}}</td>
                            <td class="bodyname">{{$cli->email}}</td>
                            <td class="body"> 
                                <a href="{{ route('showorders.index',['client' => $cli->name]) }}"   > <i class="fa-brands fa-shopify "></i>   </a> 
                            </td>
                            <td class="body"> 
                                <a href="{{route('order.index')}}" >
                                    <i class="fa-solid fa-cart-plus"></i>    
                                </a> 
                            </td>
                            <td class="body">
                                <form action="{{ route('client.destroy',$cli->id) }}" method="POST">
                                    <a href="{{ route('client.show',$cli->id) }}" class="icon-container">
                                        <i class="fa fa-fw fa-eye" show> </i>
                                        <span class="icon-text">SHOW</span>
                                    
                                    </a>
                                    <a  href="{{ route('client.edit',$cli->id) }}" class="icon-container">
                                        <i class="fa fa-fw fa-edit edit" ></i> 
                                        <span class="icon-text">EDIT</span>
                                        
                                    </a>
                                    @csrf
                                    @method('DELETE')
                                    <button class="icon-container" >
                                        <i class="fa fa-fw fa-trash"></i> 
                                        <span class="icon-text">DELETE</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>