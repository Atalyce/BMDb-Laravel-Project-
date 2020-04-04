<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class ManageUSerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.tableUser')->with([
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('name')),
            'gender'=>$request->get('gender'),
            'address'=>$request->get('address'),
            'dob'=>$request->get('dob'),
        ]);
        // Validasi buat profile picture user
        if($request->hasFile('picture'))
        {
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = 'picture'.$user->id .'.'.$extension;
            $request->file('picture')->storeAs('public/images', $file_name);
            $user->picture = $file_name;
        }
        $user->save();

        return redirect('/manage/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id)
    {
        $user = User::find($id);
        return view('layouts.editUser')->with([
            'user'=>$user,
        ]);
    }
    // public function edit($id)
    // {
       
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($request->get('name')),
            'gender'=>$request->get('gender'),
            'address'=>$request->get('address'),
            'dob'=>$request->get('dob'),
        ]);

        if($request->hasFile('picture'))
        {
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = 'picture'.$user->id .'.'.$extension;
            $request->file('picture')->storeAs('public/images', $file_name);
            $user->picture = $file_name;
        }
        $user->save();

        return redirect('/manage/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete($user);
        return back();
    }
}
