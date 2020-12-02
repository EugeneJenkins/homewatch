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