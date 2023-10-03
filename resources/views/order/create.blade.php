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
               <section class="content container-fluid">
                  <div class="row">
                     <div class="col-md-12">
          
                        @includeif('partials.errors')
          
                           <div class="card card-default">
                              <div class="card-header">
                                 <span class="card-title">{{ __('Create') }} Pedido</span>
                              </div>
                              <div class="card-body">
                                 <form method="POST" action="{{ route('order.store') }}"  role="form" enctype="multipart/form-data">
                                    @csrf
          
                                    @include('order.form')
          
                                 </form>
                              </div>
                           </div>
                     </div>
                  </div>
               </section>
            </div>
      </div>
   </div>
</x-app-layout>
