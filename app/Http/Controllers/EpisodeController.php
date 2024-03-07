<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;
use App\Models\Movie;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $episodes = Episode::orderBy("created_at","desc")->paginate(8);
        return view("episodes.index")->with("episodes", $episodes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $movies = Movie::all();
        return view("episodes.create")->with("movies", $movies);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Episode::create($input);
        return redirect("episode")->with("success","Đã thêm tập mới");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $episode = Episode::find($id);
        return view("episodes.show")->with("episodes", $episode);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $episode = Episode::find($id);
        $movies = Movie::All();
        return view("episodes.edit")->with("episode", $episode)->with("movies", $movies);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $input = $request->all();
        Episode::find($id)->update($input);
        return redirect("episode")->with("success","Đã sửa thành công");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        Episode::find($id)->delete();
        return redirect("episode")->with("success","xóa thành công");
    }
}
