<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $movies = Movie::orderBy("created_at","desc")->paginate(8);
        return view('movies.index')->with('movies',$movies);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $file = $request->file('filename');
        if($file){
            $destinationPath = 'uploads';
            $fileName =  $file->getClientOriginalName();
        }
       
        if($file->move($destinationPath,$fileName)){
            $input['image'] =  $fileName;
         
        }    
        Movie::create($input);
        return redirect('movie')->with('flash_message','Movie Added!');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('movies.show') ->with('movies',$movie);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::find($id);
        return view('movies.edit') ->with('movies',$movie);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::find($id);
        $input = $request->all();
        $file = $request->file('filename');
        if($file){
            $destinationPath = 'uploads';
            $fileName = $file->getClientOriginalName();
            if( $file->move($destinationPath,$fileName) ){
                $input['image'] = $fileName;
            }
        }         
          
        $movie->update($input);
        return redirect('movie')->with('flash_message','movie Updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movie::destroy($id);
        return redirect('movie')->with('flash_message','Movie deleted!');
        //
    }
}
