@extends('layouts.main')


@section('title')
{{ $film[0]->name_film }}
@endsection

@section('info_title')
    <?php echo $info_title ?>
  @endsection

@section('main')

          <div class="last_films2">
            
            <div class="last-film-container">
  
         <div class="film_cantainer">
            
            <div class="film_title"> {{ $film[0]->name_film }} 

            <div class="bookmark" style="float:right;"> 
            @auth
            <a href="/add-recomendation/{{$film[0]->id_film}}/{{Auth::id()}}"> Добавить фильм </a>
        @endauth
            
            
             </div>
            </div>
   
            <div class="content">
   
            <img class="t_img" src="<?php echo $film[0]->img; ?>" alt="Айван" width="120" height="140"> 


                <div class="right_content">
                <br> <b> Год:    </b>  <span>{{ $film[0]->year }}</span>
                <br> <b> Режиссер: </b>  <span> {{ $producer[0]->name_producer }} </span>
                <br> <b> Страна:   </b>  <Span> {{ $film[0]->country }} </Span>
                <br> <b> Жанр:   </b>  <Span> {{ $genre }} </Span>
                <br> <b> Актеры:   </b>  <Span> 
                @foreach($allActors as $actor)
                  
                  @if ($film[0]->id_film == $actor->id_film)
              
                      <a href="#" > {{ $actor->name_actor}} </a>

                  @endif
                @endforeach()
                </Span>
                
                
              
                <div class="about_film">
                {{ $film[0]->about_film}}
                </div>
                <div class="trailer">
                <iframe width="320" height="315" src=" {{ $film[0]->trailer }} "> </iframe>
                </div>

            </div>
                        
                       
         </div>
        </div>  
        </div>
</main>

@endsection