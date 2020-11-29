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
              <div class="slider__item">
                <div style="height: 200px;"> <a href="#"> <img src="{{ asset('images/img/img2.jpg') }}" alt="" srcset=""> </a></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><a href="#"> <img src="{{ asset('images/img/img3.jpg') }}" alt="" srcset=""> </a></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img4.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img5.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px; "><img src="{{ asset('images/img/img6.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px; "><img src="{{ asset('images/img/img7.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
              <div class="slider__item">
                <div style="height: 200px;"><img src="{{ asset('images/img/img1.jpg') }}" alt="" srcset=""></div>
              </div>
            </div>
            <a class="slider__control slider__control_left" href="#" role="button"></a>
            <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
          </div>
            


          <div class="main_popular">
            <h3>Ваши<span class="recom">рекомендации</span></h3>
          </div>
    
          <div class="last_films2">
            
            <div class="last-film-container">
              <section class="uk-margin-small-top">
                <div data-uk-grid="" class="uk-grid uk-grid-small uk-grid-match uk-child-width-1-1">
                  <div class="uk-width-1-4@s uk-first-column">
                    <a class="uk-flex uk-flex-center" href="ivan.html" title="Фильм Айван">
                      <img class="uk-width-1-2 uk-width-1-1@s uk-box-shadow-small" data-uk-img="" data-src="ivan.html" alt="Фильм &quot;Айван&quot; 2018" src="{{ asset('images/img/img1.jpg') }}">
                    </a>
                  </div>
                  <div class="last_films2_Info">
                    <a class="uk-margin-small-bottom" href="ivan.html" title="Айван">
                      <h2 class="uk-h4">Айван</h2>
                      <span class="uk-text-small uk-text-muted uk-width-auto">The One and Only Ivan
                      </span>
                    </a>
                    <div>
                      <br>
                      2020 | США | Фэнтези, комедия<br><br>
                      Режиссеры: Теа Шэррок</a><br>
                      Актеры: Сэм Роквелл</a>, Анджелина Джоли</a>					</div>
                  </div>
                </div>
              </section>
      
      
              <section class="uk-margin-small-top">
                <div data-uk-grid="" class="uk-grid uk-grid-small uk-grid-match uk-child-width-1-1">
                  <div class="uk-width-1-4@s uk-first-column">
                    <a class="uk-flex uk-flex-center" href="enola.html" title="Фильм Энола Холмс">
                      <img class="uk-width-1-2 uk-width-1-1@s uk-box-shadow-small" data-uk-img="" data-src="enola.html" alt="Фильм &quot;Энола Холмс&quot; 2018" src="{{ asset('images/img/img2.jpg') }}">
                    </a>
                  </div>
                  <div class="last_films2_Info">
                    <a class="uk-margin-small-bottom" href="enola.html" title="Энола Холмс">
                      <h2 class="uk-h4">Энола Холмс</h2>
                      <span class="uk-text-small uk-text-muted uk-width-auto">Enola Holmes
                      </span>
                    </a>
                    <div>
                      <br>
                      2020 | Великобритания | Приключения, детектив<br><br>
                      Режиссеры: Гарри Брэдбир</a><br>
                      Актеры: Милли Бобби Браун</a>, Генри Кавилл</a>					</div>
                  </div>
                </div>
              </section>
      
              <section class="uk-margin-small-top">
                <div data-uk-grid="" class="uk-grid uk-grid-small uk-grid-match uk-child-width-1-1">
                  <div class="uk-width-1-4@s uk-first-column">
                    <a class="uk-flex uk-flex-center" href="{{ asset('images/img/img3.jpg') }}" title="Фильм Айван">
                      <img class="uk-width-1-2 uk-width-1-1@s uk-box-shadow-small"  alt="Фильм &quot;Спрячь бабушку в холодильнике&quot; 2018" src="{{ asset('images/img/img3.jpg') }}">
                    </a>
                  </div>
                  <div class="last_films2_Info">
                    <a class="uk-margin-small-bottom" href="#" title="Айван">
                      <h2 class="uk-h4">Айван</h2>
                      <span class="uk-text-small uk-text-muted uk-width-auto">The One and Only Ivan
                      </span>
                    </a>
                    <div>
                      <br>
                      2020 | США | Фэнтези, комедия<br><br>
                      Режиссеры: Теа Шэррок</a><br>
                      Актеры: Сэм Роквелл</a>, Анджелина Джоли</a>					</div>
                  </div>
                </div>
              </section>
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

<script src="{{ asset('js/slider.js') }}"></script>
</body>
</html>