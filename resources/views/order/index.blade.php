<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="https://kit.fontawesome.com/7ad6698d85.js" crossorigin="anonymous"></script>


         <div  class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
                  <div class="float-right">
                     <div class="float-right">
                        <a href="{{ route('order.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">  {{ __('Create New') }} </a>
                     </div>
                     @if ($message = Session::get('success'))
                     <div class="alert alert-success">
                        <p>{{ $message }}</p>
                     </div>
                     @endif
         
                  </div>
                     <table class="w-full table-auto">
                        <thead class="thead">
                           <tr class="bg-gray-800 text-white">
                              <th class="px-4 py-2">No</th>
                              <th class="px-4 py-2">Price</th>
                              <th class="px-4 py-2">Client</th>
                              <th class="px-4 py-2">Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($order as $ped)
                              <tr>
                                 <td>{{ ++$i }}</td>      
                                 <td>{{ $ped->price }}</td>
                                 <td>{{ $ped->client->name }}</td>
                                 <td>
                                       <form action="{{ route('order.destroy',$ped->id) }}"     method="POST">
                                          <a class="btn btn-sm btn-primary" href="{{ route('order.show',$ped->id) }}">
                                             <i class="fa fa-fw fa-eye" style="color: #1aa958;"></i> 
                                             {{ __('Show') }}
                                          </a>
                                          <a class="btn btn-sm btn-success" href="{{ route('order.edit',$ped->id) }}">
                                             <i class="fa fa-fw fa-edit" style="color: #1458cc;"></i> 
                                             {{ __('Edit') }}
                                          </a>
                                          @csrf
                                          @method('DELETE')

                                          <button type="submit" class="btn btn-danger btn-sm">
                                             <i class="fa fa-fw fa-trash" style="color: #9e2b2b;"></i> 
                                             {{ __('Delete') }}
                                          </button>
                                       </form>
                                 </td>
                              </tr>
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
