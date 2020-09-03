<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('movies', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('create');
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
          'title' => 'required|max:255',
          'description' => 'required',
          'year' => 'required|min:1895|max:2020|integer',
          'rating' => 'required|min:1|max:10|integer',
        ]);

        $request_data = $request->all();

        $new_movie = new Movie;
        $new_movie->title = $request_data['title'];
        $new_movie->description = $request_data['description'];
        $new_movie->year = $request_data['year'];
        $new_movie->rating = $request_data['rating'];
        $new_movie->fill($request_data);
        $saved = $new_movie->save();

        if ($saved) {
          $movie = Movie::orderBy('id', 'desc')->first();
          return redirect()->route('movies.show', $movie);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
      $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'year' => 'required|min:1895|max:2020|integer',
        'rating' => 'required|min:1|max:10|integer',
      ]);

      $request_data = $request->all();
      $movie->update($request_data);

      return redirect()->route('movies.show', $movie);
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
