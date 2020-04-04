<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UpdateProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        Auth::user()->update([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'gender'=>$request->get('gender'),
            'address'=>$request->get('address'),
            'dob'=>$request->get('dob'),
        ]);
        // Validasi profile supaya waktu edit langsung muncul file picture yg udah ada
        if($request->hasFile('picture'))
        {
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = 'picture'.$user->id .'.'.$extension;
            $request->file('picture')->storeAs('public/images', $file_name);
            Auth::user()->picture = $file_name;
        }
        Auth::user()->save();
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
