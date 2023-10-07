<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
         <div class="container">
            <div class="table">
               <button class="button-create"> 
                  <a href="{{ route('order.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">  {{ __('Create New') }} </a>
               </button>
               @if ($message = Session::get('success'))
                  <div class="alert">
                     <p>{{ $message }}</p>
                  </div>
               @endif
                  <table>
                     <thead>
                        <tr>
                           <th class="head">No</th>
                           <th class="head">Price</th>
                           <th class="head">Client</th>
                           <th class="head">Actions</th>
                        </tr>
                     </thead>
                     <tbody>
                     @foreach ($order as $ped)
                        <tr>
                           <td class="body">{{ ++$i }}</td>      
                           <td class="body">{{'$ '. $ped->price }}</td>
                           <td class="bodyname">{{ $ped->client->name }}</td>
                           <td class="body">
                              <form action="{{ route('order.destroy',$ped->id) }}" method="POST">
                                 <a href="{{ route('order.show',$ped->id) }}" class="icon-container">
                                    <i class="fa fa-fw fa-eye" ></i> 
                                    <span class="icon-text">SHOW</span>
                                   
                                 </a>
                                 <a href="{{ route('order.edit',$ped->id) }}" class="icon-container">
                                    <i class="fa fa-fw fa-edit"></i> 
                                    <span class="icon-text">EDIT</span>
                                    
                                 </a>
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="icon-container">
                                    <i class="fa fa-fw fa-trash" ></i> 
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
