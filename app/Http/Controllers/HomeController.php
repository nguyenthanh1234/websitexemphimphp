<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Episode;

class HomeController extends Controller
{
    //
    function index(){
        $movies = Movie::orderBy("created_at","desc")->paginate(8);
        return view("welcome")->with("movies",$movies);
    }

    function ketquatimkiem(){
        $key = request()->get("key");
        $movies = Movie::orderBy("created_at","desc")->where('name','like','%'.$key.'%')->paginate(8);
        return view("ketquatimkiem")->with("movies",$movies);
    }

    function show($id){
        $movie = Movie::find($id);
        $episodes = $movie->episodes()->orderBy('episode','desc')->get();
        $tapdautien =$episodes->last();
        return view("thongtinphim")->with("movies",$movie)->with("episodes",$episodes)->with("tapdautien",$tapdautien);
    }
    function xemphim($movie_id,$id){
        $episode = Episode::where('id', $id)->where('movie_id', $movie_id)->first();
        $episodes =Episode::orderBy('episode','desc')->paginate(50);
        $movieid = $episode->movie_id;
       return view("xemphim")->with("episode",$episode)->with("movieid",$movieid)->with("episodes",$episodes);
    }
}
