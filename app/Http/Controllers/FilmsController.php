<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Film;
use App\Genre;

class FilmsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::all();

        return view('films.index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $genres = DB::table('genres')
        //                 ->orderBy('name', 'asc')
        //                 ->lists('name','id');

        $genres = Genre::orderBy('name', 'asc')->get();
        return view('films.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film = Film::create($request->all());
        $film->genres()->sync($request->input('genres'));

        return redirect()->route('films.index');
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
        $film = Film::with('genres')->where(['id' => $id])->first();

        $genres = Genre::all();

        // genre ids that film has been assigned
        $genreIds = [];
        foreach($film->genres as $genre)
        {
            $genreIds[] = $genre->id;
        }

        return view('films.edit', compact('film', 'genres', 'genreIds'));
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
        $film = Film::find($id);

        $film->title        = $request->input('title');
        $film->release_date = $request->input('release_date');
        $film->notes        = $request->input('notes');

        $film->save();
        $film->genres()->sync($request->input('genres'));

        return redirect()->route('films.index')->with('flash_message', 'Film Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Film::destroy($id);

        return redirect()->route('films.index')->with('flash_message', 'Film Deleted');
    }
}
