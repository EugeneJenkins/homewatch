<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class FilmController extends Controller
{

    public function index(){
        // $allFilms = DB::select("select * from film");

        $allFilms = DB::table('film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->select('*')
        ->get();

        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        return view('home.index', [
            'allFilms' => $allFilms,
            'allActors' => $allActors
            ]);


    }

    public function film($id){

        $film = DB::select("select * from film where id_film = $id");
        $allFilms = DB::select("select * from film");

        $genre = $film[0]->id_genve;
        $genreName = DB::table('genve')
            ->leftJoin('film', 'genve.id_genve', '=', 'film.id_genve')
            ->where('genve.id_genve', $genre)
            ->select('genve.name_genve')
            ->groupBy('genve.id_genve')
            ->get();


        // return view('home.film', ['film' => $film]);
        return view('home.film', [
            'film' => $film,
            'genre' => $genreName[0]->name_genve,
            'allFilms' => $allFilms
            ]);
    }




}
