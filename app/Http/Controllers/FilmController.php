<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Film;

class FilmController extends Controller
{
    // public function new()
    // {
    //     $films = new Film;
    //     $films->titles = 'suamiku adalah anak mertuaku';
    //     $films->durations = '30';
    //     $films->ratings = '8.0';
    //     $films->genres = 'horror';
    //     $films->descriptions = 'lorem ipsum dolor sit amet consectetur';
    //     $films->thumbnails = 'indosiar';
    //     $films->save();
    //     dump($films);
    // }
    // public function massAssignment()
    // {
    //     Film::create([
    //         'titles' => 'Istriku adalah ibu anakku',
    //         'durations' => '45',
    //         'ratings' => '9.0',
    //         'genres' => 'romance',
    //         'descriptions' => 'ipsum lorem dolor sit amet consectetur',
    //         'thumbnails' => 'tvone'
    //     ]);
    //     return 'Berhasil Ditambahkan';
    // }

    public function massAssignment2()
    {
        $film = Film::create(
            [
                'titles' => 'Batman',
                'durations' => "120",
                'ratings' => '9.0',
                'genres' => 'romance',
                'descriptions' => 'ipsum lorem dolor sit amet consectetur',
                'thumbnails' => 'tvone'
            ]
        );
        dump($film);
    }
    public function update()
    {
        // $film = Film::where('id', '5')->first();
        // $film->titles = 'Jack the giant slayer';
        // $film->durations = "110";
        // $film->ratings = '8.3';
        // $film->genres = 'fantasy';
        // $film->descriptions = 'jack melawan raksasa';
        // $film->thumbnails = 'mnctv';
        // $film->save();

        // dump($film);
    }
    public function massUpdate()
    {
        Film::where('id', '1')->first()->update([
            'titles' => 'Stranger Things',
            'genres' => 'Science Fiction',
        ]);
        return "data berhasil di updated jadi superman is dead";
    }
    public function delete()
    {
        $film = Film::destroy(3);
        dump($film);
    }
    public function massDelete()
    {
        $film = Film::where('durations', '<', '110')->delete();
        dump($film);
    }
    public function show()
    {
        // $movie = Film::all();
        // foreach ($movie as $film) {
        //     echo "judul : " . ($film->titles) . "<br>";
        //     echo "Durasi :" . ($film->durations) . "<br>";
        //     echo "Ratings :" . ($film->ratings) . "<br>";
        //     echo "Genre :" . ($film->genres) . "<br>";
        //     echo "<br>";
        //     echo "<hr>";
        // }
        // $movie = DB::table('films')->get();
        // foreach ($movie as $film) {
        //     echo "judul : " . ($film->titles) . "<br>";
        //     echo "Durasi :" . ($film->durations) . "<br>";
        //     echo "Ratings :" . ($film->ratings) . "<br>";
        //     echo "Genre :" . ($film->genres) . "<br>";
        //     echo "<br>";
        //     echo "<hr>";
        // }
        // $movies = Film::where('ratings', '>=', '9')->get(); //berdasarkan ratings 9 keatas
        //$movies = Film::orderBy('titles', 'asc')->get(); //ini berdasarkan huruf abjad
        // $movies = Film::latest()->limit(5)->get(); //ini berdasarkan huruf yang dibuat terbaru dan dibatasi.
        // $movies = Film::orderBy('titles', 'asc')->skip(1)->take(2)->get();
        $movies = Film::withTrashed()->get(); //buat nampilin item yang sudah ada di tempat sampah
        return view("welcome", ['movies' => $movies]);
    }
    public function softDeletes()
    {
        $film = Film::where('id', '1')->delete();
        return "berhasil menghapus kenangan";
    }
    public function withTrashed()
    {
        $film = Film::withTrashed()->get();
        dump($film);
    }
}
