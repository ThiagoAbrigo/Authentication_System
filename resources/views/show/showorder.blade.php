






<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
   
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg    text-center">
            <div class="float-right">
               <div class="card card-default">
                  <div class="card-header">
                     <span class="card-title">{{ __('Details') }} ordes</span>
                  </div>
                  <table class="w-full table-auto">
                     <thead>
                        <tr class="bg-gray-800 text-white">
                           <th class="px-4 py-2">Orders</th>
                           <th class="px-4 py-2">Date </th>
                     </thead>
                     <tbody>
                        @foreach($order as $orden)
                        <tr>
                           <td class="px-4 py-2"> {{ $orden->price }} </td>
                           <td class="px-4 py-2"> {{ $orden->created_at }} </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <div class="float-right">
                     <a class="btn btn-primary" href="{{ route('client.index') }}"> {{ __('Back') }}</a>
                 </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>

