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
        ->orderBy('film.id_film', 'desc')
        ->get();

        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        return view('home.index', [
            'allFilms' => $allFilms,
            'allActors' => $allActors,
            'info_title' => 'Все фильмы',
            'sliderFilms' => $this->getSlider(),
            ]);
    }


    public function expectedMovies(){
        // $allFilms = DB::select("select * from film");

        $allFilms = DB::table('film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->select('*')
        ->where('film.year','>','2020')
        ->orderBy('film.id_film', 'desc')
        ->get();

        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        return view('home.index', [
            'allFilms' => $allFilms,
            'allActors' => $allActors,
            'info_title' => 'Ожидаемые',
            'sliderFilms' => $this->getSlider(),
            ]);
    }



    public function category(){
        $genre = DB::select("select * from genve");

        $allFilms = DB::table('film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->select('*')
        ->orderBy('film.id_film', 'desc')
        ->get();

        
        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        $info_title = '';
        foreach($genre as $genre){
            $info_title .= ' <a style = "color: black;" href ="/category/'. $genre-> name_genve .'"> '. $genre-> name_genve .'</a>';
        }

        return view('home.index', [
            'allFilms' => $allFilms,
            'allActors' => $allActors,
            'info_title' =>  $info_title,
            'sliderFilms' => $this->getSlider(),
            ]);
    }


    public function newFilms(){
        $info_title = 'Новые фильмы';

        $newfilms = DB::table('newfilms')
        ->join('film', 'newfilms.id_film', '=', 'film.id_film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->orderBy('film.id_film', 'dsc')
        ->select('*')
        ->get();

        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        return view('home.index', [
            'allFilms' => $newfilms,
            'allActors' => $allActors,
            'info_title' =>  $info_title,
            'sliderFilms' => $this->getSlider(),
            ]);
    }

    public function getCategory($name){
        $genre = DB::select("select * from genve");

        $categoryType = DB::table('film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->where('genve.name_genve',$name)
        ->orderBy('film.id_film', 'desc')
        ->select('*')
        ->get();

        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        $info_title = '';
        foreach($genre as $genre){
            $info_title .= ' <a style = "color: black;" href ="/category/'. $genre-> name_genve .'"> '. $genre-> name_genve .'</a>';
        }

        return view('home.index', [
            'allFilms' => $categoryType,
            'allActors' => $allActors,
            'info_title' =>  $info_title,
            'sliderFilms' => $this->getSlider(),
            ]);
    }



    public function film($id){

        $film = DB::select("select * from film where id_film = $id");
        $allFilms = DB::select("select * from film");
       
        $producer = DB::table('producer')
        ->leftJoin('film', 'producer.id_producer', '=', 'film.id_producer')
        ->where('film.id_film', $id)
        ->select('producer.name_producer')
        ->get();

        $genre = $film[0]->id_genve;
        
        $genreName = DB::table('genve')
            ->leftJoin('film', 'genve.id_genve', '=', 'film.id_genve')
            ->where('genve.id_genve', $genre)
            ->select('genve.name_genve')
            ->groupBy('genve.id_genve')
            ->get();

            $allActors = DB::table('actor_tmp')
            ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
            ->select('*')
            ->get();


        // return view('home.film', ['film' => $film]);
        return view('home.film', [
            'film' => $film,
            'genre' => $genreName[0]->name_genve,
            'allFilms' => $allFilms,
            'allActors' => $allActors,
            'producer' => $producer,
            'info_title' => 'Фильм',
            'sliderFilms' => $this->getSlider(),
            ]);
    }


    private function getSlider(){
        $sliderFilm = DB::table('newfilms')
        ->join('film', 'newfilms.id_film', '=', 'film.id_film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->select('*')
        ->get();

        return  $sliderFilm;
    }

}
