<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   public function index()
   {
       $users=DB::table('users')->select()->get();
       return view("user" ,compact('users'));
   }

   public function create()
    {
        return view('adduser');
    }

   public function store(Request $request) 
    {
    //    print_r($request);
        User::create($request->all());
        return redirect('/users/listUsers');
           
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('edituser',compact('user'));
    }
    
    public function update(Request $request)
    {
        $user = User::find($request['id']);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->department = $request['department'];
        $user->doj = $request['doj'];
        $user->gender = $request['gender'];
        $user->ph_no = $request['ph_no'];
        $user->save();
        return redirect('/users/listUsers');
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect('/users/listUsers');
    }
}

