<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
   
<link rel="stylesheet" href="../../../public/css/app.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">   
                {{-- bg white its the container --}}
            
                    <h3>  Client  {{ $client->name ?? "{{ __('Show') Cliente" }}   </h3>
                    <section >
                        <div>
                            <div>
                                <div>
                                    <div>
                                        <strong class="itemShow"> Name: </strong>
                                        {{ $client->name }}
                                    </div>
                                    <div>
                                        <strong> Email: </strong>
                                        {{ $client->email }}
                                    </div>
                                    <div>
                                        <a class="btn btn-primary" href="{{ route('client.index') }}"> {{ __('Back') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                
            </div> 
        </div>
    </div>
</x-app-layout>
