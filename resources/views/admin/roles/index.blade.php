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
        <h1 class=" text-center text-black text-lg">Roles</h1>
            </div>
            <x-success-status class="mb-4 " :status="session('message')" />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
        <div class="flex justify-end p-2">
            <a href="create.r" class="px-2 py-2 text-white bg-green-700 hover:bg-green-500 rounded-lg">Create</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded">
                <thead class="bg-blue-700 text-white">
                    <tr>
                        <th class="py-2 px-4 text-center">Name</th>
                        <th class="py-2 px-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse ($roles as $role)
                        <tr class="hover:bg-gray-100">
                            <td class="border py-2 px-4 text-center">{{$role->name}}</td>
                            <td class="border py-2 px-4 text-center">
                                <div class="flex justify-end">
                                <a href="{{url('Roles.edit/' . $role->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-2 rounded-lg focus:outline-none focus:shadow-outline mr-2">Edit</a>
                                <form action="{{url('Roles.delete/' . $role->id)}}" method="POST" onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="  bg-red-500 hover:bg-red-700  text-white text-sm font-bold py-2 px-2 rounded-lg focus:outline-none focus:shadow-outline mr-2" >Delete</button>
                                </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="border py-4 px-4 text-center">No Record Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        </div>
        </div>
          
        </div>
    </div>
@endsection