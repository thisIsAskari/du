<?php

namespace App\Http\Controllers;

use App\HomePage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $home = HomePage::find(1);
        return view('admin.users.index',['users'=>$users,'home'=>$home]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $home = HomePage::find(1);
        return view('admin.users.create',['home'=>$home]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        Session::flash('message','New User Created Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $checkEmail = User::where('email',$request->email)->get();
        if(sizeof($checkEmail) == 0 || $user->email == $request->email)
        {
            $input['name'] = $request->name;
            $input['email']= $request->email;
            $input['password'] = Hash::make($request['password']);
            $user->update($input);
            Session::flash('message','User Updated Successfully!');
            Session::flash('alert-type','success');
            return redirect()->route('user.index');
        }
        Session::flash('message','Email Already Exist With This Email!');
        Session::flash('alert-type','error');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('message','User Deleted Successfully!');
        Session::flash('alert-type','success');
        return redirect()->route('user.index');
    }
}
