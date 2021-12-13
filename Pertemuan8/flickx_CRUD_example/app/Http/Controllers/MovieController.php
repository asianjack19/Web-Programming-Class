<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MovieController extends Controller
{
    public function getMovies(){
        $movies = Movie::orderBy('updated_at', 'desc')->paginate(2);

        $data = [
            'movies' => $movies,
        ];
        return view('movieList', $data);
    }

    public function getAddMovie(){
        return view('addMovie');
    }

    public function addMovie(Request $request){
        
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'year' => 'required|numeric|min:1900|max:'.date('Y'),
            'rating' => 'required|numeric|min:1|max:5',
            'director' => 'required|max:255',
        ]);

        $movie = new Movie();
        $movie->title = $validatedData['title'];
        $movie->description = $validatedData['description'];
        $movie->year = $validatedData['year'];

        if (!is_int($validatedData['rating'])) {
            $validatedData['rating'] = round($validatedData['rating']);
        }

        $movie->rating = $validatedData['rating'];
        $movie->director = $validatedData['director'];
        $movie->save();
        
        return redirect(url('/movies'));
    }

    public function getUpdateMovie(Request $request){
        try{
            $decryptedMovieID = Crypt::decrypt($request->query('q'));
        }catch(DecryptException $e){
            return redirect(url('/movies'));
        }

        $movie = Movie::find($decryptedMovieID);

        $data = [
            'movie' => $movie,
        ];

        return view('updateMovie', $data);
    }

    public function updateMovie(Request $request){
        try{
            $decryptedMovieID = Crypt::decrypt($request->id);
        }catch(DecryptException $e){
            return redirect(url('/movies'));
        }

        $movie = Movie::find($decryptedMovieID);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'year' => 'required|numeric|min:1900|max:'.date('Y'),
            'rating' => 'required|numeric|min:1|max:5',
            'director' => 'required|max:255',
        ]);

        $movie->title = $validatedData['title'];
        $movie->description = $validatedData['description'];
        $movie->year = $validatedData['year'];
    
        if (!is_int($validatedData['rating'])) {
            $validatedData['rating'] = round($validatedData['rating']);
        }

        $movie->rating = $validatedData['rating'];
        $movie->director = $validatedData['director'];
        $movie->save();

        return redirect(url('/movies'));
    }

    public function deleteMovie(Request $request){
        try{
            $decryptedMovieID = Crypt::decrypt($request->id);
        }catch(DecryptException $e){
            return redirect(url('/movies'));
        }

        $movie = Movie::find($decryptedMovieID);
        $movie->delete();

        return redirect(url('/movies'));
    }
}
