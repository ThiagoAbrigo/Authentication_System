






<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
   
   <div class="container">
      <div class="table">
         <div>
            <span class="title">{{ __('Detail') }} orders</span>
         </div>
         <table>
            <thead>
               <tr>
                  <th class="head">Orders</th>
                  <th class="head">Date </th>
            </thead>
            <tbody>
               @foreach($order as $orden)
               <tr>
                  <td class="body"> {{ $orden->price }} </td>
                  <td class="body"> {{ $orden->created_at }} </td>
               </tr>
               @endforeach
            </tbody>
         </table>
         
      </div>
      <button class="button-back" >
         <a  href="{{ route('client.index') }}">  <i class="fa-solid fa-circle-arrow-left"></i> </a>
     </button>
   </div>
</x-app-layout>

