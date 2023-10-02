
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
                    @includeif('partials.errors')
                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">{{ __('Update') }} Client</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('client.update', $client->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('client.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
