  @extends('layouts.main')


  @section('title')
    HomeWatch
  @endsection

  @section('info_title')
    <?php echo $info_title ?>
  @endsection

  @section('main')


            


          <div class="last_films2">
            
            <div class="last-film-container">
             
        
            

            @foreach ($allFilms as $film)
            <section class="uk-margin-small-top">
                <div data-uk-grid="" class="uk-grid uk-grid-small uk-grid-match uk-child-width-1-1">
                  <div class="uk-width-1-4@s uk-first-column">
                    <a class="uk-flex uk-flex-center" href="/film/{{$film->id_film}}" title="Фильм Энола Холмс">
                      <img class="uk-width-1-2 uk-width-1-1@s uk-box-shadow-small"  width="100px" src="{{$film->img}}">
                    </a>
                  </div>


                  <div class="last_films2_Info">
                    <a class="uk-margin-small-bottom" href="/film/{{$film->id_film}}" >
                      <h2 class="uk-h4">{{$film->name_film}}</h2>
                      <span class="uk-text-small uk-text-muted uk-width-auto">{{$film->name_film}}
                      </span>
                    </a>
                    <div>
                      <br>
                      {{$film->year}} | {{$film->country}} | {{$film->name_genve}}<br>
                      Режиссеры: {{$film->name_producer}}<br>
                     
                      Актеры: 
                      @foreach($allActors as $actor)
        
                        @if ($film->id_film == $actor->id_film)
                     
                            {{ $actor->name_actor}}	
                        @endif
                    @endforeach()
                    </div>
                  </div>
                </div>
              </section>
              @endforeach

            </div>


        </div>  



  @endsection