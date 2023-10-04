<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Dashboard') }}
       </h2>
   </x-slot>
   <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
            <section class= "secshow" >
               <div>
                  <span class="title">{{ __('Create') }} Order</span>
               </div>
               <div>
                  <div>
                     @includeif('partials.errors')
                     <div>
                        <div>
                           <form class="form-input" method="POST" action="{{ route('order.store') }}"  role="form" enctype="multipart/form-data">
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
