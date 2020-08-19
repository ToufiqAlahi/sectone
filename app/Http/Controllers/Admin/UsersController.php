<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Role;
use Gate;
class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.users', compact('users'));
    }
    public function edit($id){
        
        if (Gate::denies('edit_user')) {
            return redirect()->back();
        }

        $user = User::find($id);
        $roles = Role::all();
        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function delete(User $user){
        unlink(public_path('image\\'.$user->image));
        $user->delete();
        return redirect()->back();
    }

    public function update(Request $request, User $user){
        
        $image = $request->file('image');
        if ($image) {
            unlink(public_path('image\\'.$user->image));
            $image_name = random_int(4000,9000);
            $ext = $image->getClientOriginalExtension();
            $image_full_name = $image_name.'.'.$ext;
            $image->move(public_path('image'), $image_full_name);
            $user->image = $image_full_name;
            $user->save();
        }
        $user->roles()->sync($request->roles);

        return redirect('/admin/users');
    }
}
