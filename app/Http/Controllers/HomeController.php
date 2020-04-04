<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $movies = Movie::where('name','like','%'.$request->get('search').'%')->orWhereHas('genre', function ($query) use($request){
            $query->where('genrename', 'like', '%'.$request->get('search').'%');
        })->paginate(10);
        return view('home')->with([
            'movies'=>$movies,
        ]);
    }
    public function detail($id)
    {
        $movie = Movie::find($id);
        return view('movieDetail')->with([
            'movie'=>$movie,
        ]);
    }
}