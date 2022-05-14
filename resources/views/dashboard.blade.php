<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  Hey , {{ Auth::user()->name }}
                  <br>
                  Your ID is : {{ Auth::user()->id }}
                 
                </div>
                {{-- <br><br> --}}
                <a href="{{ route('class.index') }}" class="btn btn-info btn-sm">Class</a>
                <br><br>
                <a href="" class="btn btn-danger btn-sm ">Students</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mx-3">
                    <div class="card-body mx-3">
                        <br><br>
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
