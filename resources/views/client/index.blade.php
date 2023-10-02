<x-app-layout>
   
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <script src="https://kit.fontawesome.com/7ad6698d85.js" crossorigin="anonymous"></script>

   
   <div class="py-12">
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
            <div class="float-right">
               <a  href="{{ route('client.create') }}" class="block px-4 py-2 text-black bg-blue-500 hover:bg-blue-600">
                 {{ __('Create New') }}
               </a>
             </div>
            <table class="custom-table">
               <table class="w-full table-auto">
                  <thead>
                     
                      <tr class="bg-gray-800 text-white">
                          <th class="px-4 py-2">No</th>
                          <th class="px-4 py-2">Name</th>
                          <th class="px-4 py-2">Email</th>
                          <th class="px-4 py-2">Show Orders</th>
                          <th class="px-4 py-2">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                     @foreach ($client as $item)
                     <tr>
                        <td> {{++$i}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td> 
                           <a href=""> <i class="fa-brands fa-shopify"></i>
                           </a> 
                        </td>
                        <td>
                           <form action="{{ route('client.destroy', $item->id) }}" method="POST">
                              <a class="btn btn-sm btn-primary " href="{{ route('client.show',$item->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                              <a class="btn btn-sm btn-success" href="{{ route('client.edit',$item->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
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
