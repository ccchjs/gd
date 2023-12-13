<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use  App\Http\Requests\UpdateRequest;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.index',compact('permissions'));
    }
    public function create()
    {
        return view('admin.permission.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required','min:3']]);
        Permission::create($validated);

        return redirect('/create.p')->with('message','Added Successfully');
    }
    public function edit($permission_id)
    {
        $permission = Permission::find($permission_id);
    
        return view('admin.permission.edit', compact('permission'));
    }
    public function update(Request $request, $permission_id )
    {
        $validated = $request->validate(['name' => ['required','min:3']]);

        $permission = Permission::where('id',$permission_id)->update([
            'name' =>  $validated['name'],
        ]);
        return redirect('/permission')->with('message',' Updated Successfully');
    }
    public function destroy($permission_id)
    {
        $permission = Permission::find($permission_id)->delete();
        return redirect('/permission')->with('message',' Delete Successfully');
    }
}
