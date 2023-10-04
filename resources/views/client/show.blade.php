<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">   
               <div>
                   <span class="title">  Client  {{ $client->name ?? "{{ __('Show') Cliente" }}   </span>
               </div>
                    <section class= "secshow">
                        <div>
                            
                                
                                    <div class="nameshow">
                                        <strong class="itemShow"> Name: </strong>
                                        {{ $client->name }}
                                    </div>
                                    <div class="nameshow">
                                        <strong> Email: </strong>
                                        {{ $client->email }}
                                    </div>
                                    <button class="button-back">
                                        <a class="btn btn-primary" href="{{ route('client.index') }}"> <i class="fa-solid fa-circle-arrow-left"></i></a>
                                    </button>
                            
                            
                        </div>
                    </section>
                
            </div> 
        </div>
    </div>
</x-app-layout>
