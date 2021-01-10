<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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

        @if (Auth::guest())
        <div class="registr">	
                <a href="{{ route('login') }}">Вход</a>
                            /   
                <a href="{{ route('register') }}">Регистрация</a>
                </div><!-- reg end -->
                        @else
                        <div class="registr">	
                                <a href="/recommendation">
                                    Рекомендации <span class="caret"></span>
                                </a>
/
                                <a href="/bookmarks">Закладки</a>
/
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выход
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </div><!-- reg end -->
          @endif
            
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
                <a href="/category">Категории</a>
                <a href="/new_films">Новинки</a>
                <a href="/expectedMovies">Ожидаемые</a>
                <a href="#" id="menu" class="icon">&#9776;</a>
            </div>
        </nav>
 
        <div class="slider">
            <div class="slider__wrapper">
          
            @foreach ($sliderFilms as $film)
              <div class="slider__item">
                <div style="height: 200px;"> <a href="/film/{{$film->id_film}}"> <img src="{{ $film->img }}" alt="" srcset=""> </a></div>
              </div>
            @endforeach

            </div>
            <a class="slider__control slider__control_left" href="#" role="button"></a>
            <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
          </div>
            
            <div class="main_popular">
            <h3> @yield('info_title') <span class="recom">  </span></h3>
          </div>
    
    @yield('main')
</main>





<footer>
  <div class="bottom">
    <div class="bottomnav">
    <a href="#">Пользователю</a>
    <a href="#">Правообладателям</a>
      <a href="#">Контакты</a>
    <div>
  </div>	
      
  <div class="autor">
     <p>©2020 JenkinsTeam.</p> 
       <p> Все права защищены. </p>
     </div>
  </footer>

<script src="{{ asset('js/slider.js') }}"></script>
</body>
</html>