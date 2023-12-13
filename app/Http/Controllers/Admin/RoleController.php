<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }
    public function create()
    {
        return view('admin.roles.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required','min:3']]);
        Role::create($validated);

        return redirect('/create.r')->with('message','Added Successfully');
    }
    public function edit($role_id)
    {
        $role = Role::find($role_id);
    
        return view('admin.roles.edit', compact('role'));
    }
    public function update(Request $request, $role_id )
    {
        $validated = $request->validate(['name' => ['required','min:3']]);

        $role = Role::where('id',$role_id)->update([
            'name' =>  $validated['name'],
        ]);
        return redirect('/index')->with('message',' Updated Successfully');
    }
    public function destroy($role_id)
    {
        $role = Role::find($role_id)->delete();
        return redirect('/index')->with('message',' Delete Successfully');
    }
}
