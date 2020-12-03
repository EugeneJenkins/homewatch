<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function test(){

        $film = DB::select('select * from film');
        
        return view('test', ['film' => $film]);
    }


    public function bookmarks(){
        $id = Auth::id();
        
        $bookmark = DB::table('bookmark')
        ->join('film', 'bookmark.id_film', '=', 'film.id_film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->where('id_user',$id)
        ->select('*')
        ->orderBy('film.id_film', 'desc')
        ->get();
 
        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();

        return view('home.index', [
            'allFilms' => $bookmark,
            'allActors' => $allActors,
            'info_title' => 'Закладки',
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

    public function addRecommendation($id,$user){

        $bookmark = DB::select("select * from bookmark where id_film = $id and id_user = $user");
        
        if(isset($bookmark[0]->id_film)){
            return redirect('/film/'.$id);
        }
        DB::table('bookmark')->insert(
            ['id_film' => $id,
             'id_user' => $user]
        );

        // return redirect('/film/'.$id);
        return redirect('/film/'.$id);
    }


    public function Recommendation(){
        $id = Auth::id();
        
        $bookmarks = DB::table('bookmark')
        ->join('film', 'bookmark.id_film', '=', 'film.id_film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->where('id_user',$id)
        ->select('*')
        ->orderBy('film.id_film', 'desc')
        ->get();
 

        $check = DB::table('bookmark')
        ->join('film', 'bookmark.id_film', '=', 'film.id_film')
        ->join('genve', 'film.id_genve', '=', 'genve.id_genve')
        ->join('producer', 'film.id_producer', '=', 'producer.id_producer')
        ->where('id_user',$id)
        ->select('*')
        ->orderBy('film.id_film', 'desc')
        ->get();

        $allActors = DB::table('actor_tmp')
        ->join('actor', 'actor_tmp.id_actor', '=', 'actor.id_actor')
        ->select('*')
        ->get();


        foreach ($check as $bookmark){
            $checkArray          [] = $bookmark->id_film;


        }

        foreach ($bookmarks as $bookmark){
            $producer          [] = $bookmark->id_producer;
            $genre                  [] = $bookmark->id_genve;

            foreach($allActors as $actor){
                if ($bookmark->id_film == $actor->id_film){
                    $actors [] = $actor->id_actor;
                }
            }
        }
        
        $producer = $this->idToString($producer);
        $genre = $this->idToString($genre);
        $actors = $this->idToString($actors);

        $sql = "select * from `actor_tmp` inner join `actor` on `actor_tmp`.`id_actor` = `actor`.`id_actor` inner join `film` on `actor_tmp`.`id_film` = `film`.`id_film` inner join `genve` on `film`.`id_genve` = `genve`.`id_genve` inner join `producer` on `film`.`id_producer` = `producer`.`id_producer` where `film`.`id_producer` IN ($producer) or `film`.`id_genve` IN ($genre) or `actor_tmp`.`id_actor` IN ($actors) order by `film`.`id_film` desc";
        $film = DB::select($sql);


        return view('home.recommendation', [
            'allFilms' => $film,
            'allActors' => $allActors,
            'info_title' => 'Закладки',
            'sliderFilms' => $this->getSlider(),
            'checkArray' => $checkArray,
            ]);

    }

    private function idToString($arr = array()){

        $val = '';
        foreach($arr as $tmp){
            $val .= $tmp.',';
        }

        $val = substr($val, 0, -1);

        return $val;
    }

}
