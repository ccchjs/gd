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
        <div class="mt-6 ml-6">
        <h1>content</h1>
        </div>
    </div>
@endsection