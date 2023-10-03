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
                            @includeif('partials.errors')
                            <div>
                                <div class="card-header">
                                    <span class="card-title">{{ __('Create') }} Client</span>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('client.store') }}"  role="form" enctype="multipart/form-data">
                                        @csrf
                                        @include('client.form')
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
