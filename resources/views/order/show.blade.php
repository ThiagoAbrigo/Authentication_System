<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
      <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
               <div class="float-right">
                  <section class="content container-fluid">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="card">
                                 <div class="card-header">
                                    <div class="float-left">
                                       <span class="card-title">{{ __('Show') }} Order</span>
                                    </div>
                                 </div>
                                 
                                 <div class="card-body">
                                    
                                    <div class="form-group">
                                       <strong>Price:</strong>
                                       {{ $order->price }}
                                    </div>
                                    <div class="form-group">
                                       <strong>Client:</strong>
                                       {{ $order->client->name }}
                                    </div>
                                    
                                    <div class="float-right">
                                       <a class="btn btn-primary" href="{{ route('order.index') }}"> {{ __('Back') }}</a>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </section> 
               </div> 
            </div> 
         </div>
      </div>
</x-app-layout>
