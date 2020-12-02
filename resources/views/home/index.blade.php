<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeWatch</title>
    <link rel="stylesheet" href="style1.css">
    <link href="{{ asset('css/main_page.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg"><img src="{{ asset('images/img/Neon_Back.jpg') }}" alt="background" /></div>
<header>
    <div class="container">
        <div class="header_logo">
			<a href="/">HomeWatch</a>
        </div>
        
        <div class="header_right_side">
            <div class="registr">	
                <a href="/login">Вход</a>
                            /   
                <a href="/register">Регистрация</a>
            </div><!-- reg end -->
            
            <div class="search">
				<input type="search" name="q" placeholder="Поиск..."> 
			</div>
			<div class="submit">
				<input type="submit" value="Поиск">
			<div>

        </div>
    </div>
</header>



<main>
    <div class="container">
        <nav>
            <div class="topnav">
                <a href="#">Категории</a>
                <a href="#">Новинки</a>
                <a href="#">Ожидаемые</a>
                <a href="#" id="menu" class="icon">&#9776;</a>
            </div>
        </nav>
 
        <div class="slider">
            <div class="slider__wrapper">
        
            @foreach ($allFilms as $film)
              <div class="slider__item">
                <div style="height: 200px;"> <a href="/film/{{$film->id_film}}"> <img src="{{ $film->img }}" alt="" srcset=""> </a></div>
              </div>
            @endforeach

            </div>
            <a class="slider__control slider__control_left" href="#" role="button"></a>
            <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
          </div>
            


          <div class="main_popular">
            <h3>Ваши<span class="recom">рекомендации</span></h3>
          </div>
    
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

