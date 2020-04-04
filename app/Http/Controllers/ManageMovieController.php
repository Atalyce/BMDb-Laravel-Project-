<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class ManageMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(10);
        return view('layouts.tableMovie')->with([
            'movies' => $movies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.createMovie');
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
        return view('layouts.editMovie');
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
        $movie = Movie::find($id);
        $movie->update([
            'name'=>$request->get('name'),
            'genreid'=>$request->get('genreid'),
            'password'=>Hash::make($request->get('name')),
            'rating'=>$request->get('rating'),
            'address'=>$request->get('address'),
            'desc'=>$request->get('desc'),
        ]);

        if($request->hasFile('picture'))
        {
            $extension = $request->file('picture')->getClientOriginalExtension();
            $file_name = 'picture'.$user->id .'.'.$extension;
            $request->file('picture')->storeAs('public/images', $file_name);
            $movie->picture = $file_name;
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
        //
    }
}
