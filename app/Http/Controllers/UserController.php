<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'password' =>$request->password,
            'email' =>$request->email,
        ]);

        return redirect()->route('user.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        if($request->has('password') && $request->password != null){
            $data['password'] = $request->password;
        }

        $user->update($data);

        return redirect()->route('user.index');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
