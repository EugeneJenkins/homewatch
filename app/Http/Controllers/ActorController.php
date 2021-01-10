<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


class ActorController extends Controller
{

    public function index($id){
        $actor = DB::select("select * from actor where id_actor = $id");

        $delete_date = $actor[0]->date_of_birth;
        $date_format = 'Y-m-d';
        $current_date = date($date_format);
        $diff = date_diff(date_create_from_format($date_format, $delete_date), date_create());

        $actor_tmp = DB::select("select * from actor_tmp where id_actor = $id");

        $actor_tmp = DB::table('actor_tmp')
        ->join('film', 'actor_tmp.id_film', '=', 'film.id_film')
        ->where('actor_tmp.id_actor', $id)
        ->select('*')
        ->get();


        return view('home.actor', [
            'actor' => $actor,
            'info_title' => $actor[0]->name_actor,
            'year' => $diff->y,
            'actor_tmp' =>$actor_tmp,
            'year_word' => $this->num2word($diff->y, array('год', 'года', 'лет')),
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

    private function num2word($num, $words)
    {
    $num = $num % 100;
    if ($num > 19) {
        $num = $num % 10;
    }
    switch ($num) {
        case 1: {
            return($words[0]);
        }
        case 2: case 3: case 4: {
            return($words[1]);
        }
        default: {
            return($words[2]);
        }
    }
}
}