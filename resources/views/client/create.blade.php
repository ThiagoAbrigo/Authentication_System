<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div>
            <div>
                <section >
                    <div>
                        <div >
                            @includeif('partials.errors')
                            <div>
                                <div>
                                    <span class="title">{{ __('Create') }} Client</span>
                                </div>
                                <div >
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
