<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
                <div class="float-right">
                    <h3>  Client  {{ $client->name ?? "{{ __('Show') Cliente" }}   </h3>
                    <section class="content container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div>
                                        <strong>Name:</strong>
                                        {{ $client->name }}
                                    </div>
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        {{ $client->email }}
                                    </div>
                                    <div class="float-right">
                                        <a class="btn btn-primary" href="{{ route('client.index') }}"> {{ __('Back') }}</a>
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
