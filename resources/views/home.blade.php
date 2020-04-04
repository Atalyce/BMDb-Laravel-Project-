@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mb-3">
        <div class="col-md-3">
            <form method="get" action="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light text-dark" type="button" style="border:1px solid black;"><i class="fas fa-search"></i></button>
                    </div>
                    <input type="text" class="form-control" placeholder="Search by Movie Title or Genre" name="search">
                </div>
            </form>
        </div>
        <div class="col-md-5">
        </div>
    </div>

    @foreach ($movies as $movie)
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{asset('storage/images/'.$movie->picture)}}" style="width:400px;height:400px;" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('detail',$movie->id)}}"><h5>{{$movie->name}}</h5></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$movie->genre->genrename}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {{$movie->desc}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    {{$movies->links()}}
    

@endsection
