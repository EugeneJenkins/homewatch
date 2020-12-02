<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
</head>
<body>
    <div class="bg"><img src="img/Neon_Back.jpg" alt="background" /></div>
<header>
    <div class="container">
        <div class="header_logo">
			<a href="index.html">HomeWatch</a>
        </div>
        
        <div class="header_right_side">
            <div class="registr">	
                <a href="#">Вход</a>
                            /   
                <a href="#">Регистрация</a>
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


            @foreach ($allFilms as $item)
              <div class="slider__item">
                <div style="height: 200px;"> <a href="/film/{{$item->id_film}}"> <img src="{{ $item->img }}" alt="" srcset=""> </a></div>
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
  
         <div class="film_cantainer">
             
            <div class="film_title"> {{ $film[0]->name_film }} </div>

            <div class="content">
   
            <img class="t_img" src="<?php echo $film[0]->img; ?>" alt="Айван" width="120" height="140"> 


                <div class="right_content">
                <br> <b> Год:    </b>  <span>{{ $film[0]->year }}</span>
                <br> <b> Страна: </b>  <span> {{ $film[0]->country }} </span>
                <br> <b> Жанр:   </b>  <Span> {{ $genre }} </Span>
                
                <div class="trailer">
                <iframe width="320" height="315" src=" {{ $film[0]->trailer }} "> </iframe>
                </div>
              
                <!-- <div class="about_film">
                    Горилла по имени Айван был разлучен с семьей в раннем детстве и уже давно забыл, как выглядел его настоящий дом, далеко в джунглях. Но все меняется, когда новым обитателем зверинца становится слоненок по имени Руби, заставив Айвана вспомнить о том, откуда он родом, и задуматься о том, где он может быть по-настоящему счастлив.
                </div> -->

            </div>
                        
                       
         </div>
        </div>  
        </div>
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

<script src="script.js"></script>
</body>
</html>