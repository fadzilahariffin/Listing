<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        
        return view('user.index',compact('users'));
    }

    public function create(){
        return view('user.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'              => 'required',
            'email'             => 'required|unique:users,email',
            'type'              => 'required',
            'password'          => 'required|min:6',
            'confirm_password'  =>  'required|same:password|min:6',
        ]);
        User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'type'              => $request->type,
            'password'          => Hash::make($request->password)
        ]);

        return redirect('user')->with('flash_success','User Successfully Added!');
    }

    public function edit(User $user){
        return view('user.edit',compact('user'));
    }

    public function update(Request $request,User $user){
        $this->validate($request,[
            'name'              => 'required',
            'email'             => 'required|unique:users,email,'.$user->id,
            'type'              => 'required',
        ]);
        $user->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'type'              => $request->type,
        ]);

        return redirect('user')->with('flash_success','Data '.$user->name.' Successfully Updated!');
    }

    public function show(User $user){
        // dd($user,'show');
        return view('user.show',compact('user'));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('user')->with('flash_danger','Data '.$user->name.' has been deleted!');
    }

}
