@extends('layouts.admin')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="flex space-x-8 text-black text-lg">
                    <a class="" href="index">Roles</a>
                    <a class="" href="permission">Permission</a>
                    <a class="" href="#">About</a>
                    <a class="" href="#">Contact</a>
         
    </div>
    <div class="border-4px border-solid to-black inline-block h-screen w-full  shadow-lg shadow-blue-500/50 ">
        <div class="py-12 px-20 w-full">
        <div class="mt-6 ml-6">
        <h1 class="text-center text-black text-lg">Permission</h1>
        </div>
        <x-success-status class="mb-4 " :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-500 overflow-hidden shadow-sm sm:rounded-lg p-2">
        <div class="flex p-2">
            <a href="{{url('permission')}}" class="px-2 py-2 text-white bg-green-700 hover:bg-green-500 rounded-lg">permission</a>
        </div>
        
        <div class="max-w-md mx-auto mt-8 p-6 bg-white shadow-md rounded-md">
            <form method="POST" action="{{ url('permission.update/' . $permission->id) }}">
                @csrf
                @method('PUT')
            
                <div class="mb-4">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$permission->name" required autofocus autocomplete="name" />
                </div>
                @error('name') <span class="text-red-400 text-sm">{{ $message }}</span>
                    
                @enderror
                <div class="text-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"> Update</button>
                </div>
            </form>
        </div>
      
        </div>
        </div>
          
        </div>
    </div>
@endsection