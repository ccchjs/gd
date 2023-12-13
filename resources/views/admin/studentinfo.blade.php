@extends('layouts.admin')

@section('content')
   <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('student info') }}
        </h2>


 <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table-auto">
                    <th>id</th>
                    <th>student no</th>
                    <th>year</th>
                    <th>lastname</th>
                    <th>firstname</th>
                    <th>middlename</th>
                </table>
                <table>
                    <tr>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection