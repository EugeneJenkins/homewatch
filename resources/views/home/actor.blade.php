@extends('layouts.main')


@section('title')
{{ $info_title}}
@endsection

@section('info_title')
    <?php echo $info_title ?>
  @endsection

@section('main')

          <div class="last_films2">
            
            <div class="last-film-container">
  
         <div class="film_cantainer">
            
            <div class="film_title"> {{ $actor[0]->name_actor }} 

            <div class="bookmark" style="float:right;"> 
            
            
             </div>
            </div>
   
            <div class="content">
   
            <img class="t_img" src="<?php echo $actor[0]->photo; ?>" alt="{{ $actor[0]->name_actor }}" width="120" height="140"> 
                <div class="right_actor_content">
                <br> <b> Дата рождения:    </b>  <span>{{ $actor[0]->date_of_birth }} ({{$year}} {{$year_word}})</span>
                <br> <b> Место рождения: </b>  <span> {{ $actor[0]->place_of_birth	}} </span>
                <br> <b> Рост:   </b>  <Span> {{ $actor[0]->height/100 }} м</Span>
                <br> <b> Фильмы:   </b>  <Span> </Span>

                <div class="content_film_container">

                @foreach($actor_tmp as $actor_tmp)
                <div class="item">
                <a href="/film/{{$actor_tmp->id_film}}" style="color: #0097FF;"> {{ $actor_tmp->name_film}} </a>
                </div>
                @endforeach()

                </div>
            </div>            
            
         </div>
         
        </div>  
        </div>
</main>

@endsection
