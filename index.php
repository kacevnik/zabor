<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Заборы в Новосибирске</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="fancybox/jquery.fancybox.min.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
  <script src="jquery.maskedinput.min.js"></script><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script></head>
  <body>

  <div id="menu-scroll">
      <div class="container">
          <ul>
              <li><a href="/">ЗАБОРЫ В НОВОСИБИРСКЕ</a></li>
              <li><a href="#exemple">Каталог</a></li>
              <li><a href="#story">Выполненные работы</a></li>
              <li><a href="#video_otziv">Видео</a></li>
              <li class="phone">+7 (383) 239-63-32</li>
          </ul>
      </div>
  </div>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              Заборы в <span>Новосибирске</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="slogan">
              Строим заборы с <span>2007 года</span> Установили <span>194 забора</span> в 2016 году Гарантия <span>2 года</span> на каждый монтаж
            </div>
          </div>
          <div class="col-md-4">
            <div class="phone_text">Есть вопросы? Звоните!</div>
            <div class="phone_number"><i class="fa fa-phone"></i>+7 (383) 239-63-32</div>
            <div class="phone_back">
              <a data-fancybox data-src="#hidden_back" href="javascript:;" class="header_back">Заказать обратный звонок</a>
            </div>
          </div>
        </div>
      </div> 
    </header>
    <section class="top scene">
      <div class="container">
          <div class="row">
            <h1>Художественная ковка 
              <span>“под ключ”</span>
            </h1>
            <div class="sub_header">Работаем по Вашим эскизам от 2 000 руб/м2</div>
            <div class="col-md-6">
              <div class="video_top">
                <a  class="sh1-video" data-fancybox href="https://www.youtube.com/watch?v=FVUNbq_BkfU"></a>
              </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
              <div class="consalt">
                <div class="sub_header">Не знаете как построить забор?</div>
                <h3>Закажите <span>БЕСПЛАТНЫЙ</span> замер</h3>
                <div class="sub_header">Подскажем, рассчитаем нагрузки<br> Подготовим эскизы и смету</div>
                <form action="send.php" method="post">
                  <input type="text" name="phone" id="phone1"  placeholder="Введите номер">
      <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone1").mask("+7(999) 999-9999");
});
</script>             <input type="hidden" name="form" value="Запрос на заказ консультации">
                  <span class="border_submit"><input type="submit" name="submit" value="Заказать консультацию"></span>
                </form>
                <h6>Осталось 3 места на <?php
                    $monthes = array(
                        1 => 'Январь', 2 => 'Февраль', 3 => 'Марта', 4 => 'Апрель',
                        5 => 'Май', 6 => 'Июнь', 7 => 'Июль', 8 => 'Август',
                        9 => 'Сентябрь', 10 => 'Октябрь', 11 => 'Ноябрь', 12 => 'Декабрь'
                    );
                    echo($monthes[(date('n'))]);
                    ?>!</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom_line_left"></div>
        <div class="bottom_line_right"></div>
        <div class="bootom_line"></div>  
        <a href="#exemple" class="arrow_next"></a>
    </section>
    <section class="exemple scene" id="exemple">
<div class="container">
        <h1>Варианты заборов</h1>
        <div class="sub_header">Гарантия на 2 года на каждый монтаж</div>
        <div class="row">
          <div class="col-md-4">
          <!--item-->
            <div class="item">
              <div class="img" style="background: url('img/work/work1/1.jpg'); background-size: cover;" data-fancybox data-src="#hidden_work1" href="javascript:;">
                <div class="shadow">
                  <div class="desc">Забор из профлиста</div>
                    <div class="param">
                        Высота: 1,5 / 1,8 / 2,0 / 2,2 / до 6 м<br>
                        Толщина листа: 0,4 - 0,5 мм<br>
                        Профиль: С8 / С20 / НС35<br>
                        Покрытие: оцинкованное / полимерное / защитная покраска<br>
                        Цвет: RAL / Printech<br>
                        Столбы: металл / кирпич / бетон<br>
                    </div>
                </div>
                <div class="bottom"></div>
              </div>
              <div class="price">Цена от <span>1350 руб/п.м.</span></div>
              <a data-fancybox data-src="#hidden_work1" href="javascript:;" class="show-a">Узнать цену под ключ</a>
            </div>
            <!--end item-->
          </div>
          <div class="col-md-4">
            <!--item-->
            <div class="item">
              <div class="img" style="background: url('img/work/work2/1.jpg'); background-size: cover;" data-fancybox data-src="#hidden_work2" href="javascript:;">
                <div class="shadow">
                  <div class="desc">Евро штакетник</div>
                  <div class="param">
                      Высота: 1,5 / 1,8 / 2,0 / 2,2 / до 6 м<br>
                      Толщина штакетин: 80 - 128 мм<br>
                      Профиль: Z-110 / Unix / TS-118<br>
                      Покрытие: оцинкованное / полимерное / защитная покраска<br>
                      Цвет: RAL / Printech<br>
                      Столбы: металл / кирпич / бетон<br>
                  </div>
                </div>
                <div class="bottom"></div>
              </div>
              <div class="price">Цена от <span>1900 руб/п.м.</span></div>
              <a data-fancybox data-src="#hidden_work2" href="javascript:;" class="show-a">Узнать цену под ключ</a>
            </div>
            <!--end item-->
          </div>
          <div class="col-md-4">
            <!--item-->
            <div class="item">
              <div class="img" style="background: url('img/work/work3/1.jpg'); background-size: cover;" data-fancybox data-src="#hidden_work3" href="javascript:;">
                <div class="shadow">
                  <div class="desc">Кирпичный забор</div>
                    <div class="param">
                        Высота: 1,5 / 1,8 / 2,0 / 3<br>
                        Вид кирпича: на выбор<br>
                        Цвет: различный<br>
                        Столбы: металл / кирпич / бетон<br>
                    </div>
                </div>
                <div class="bottom"></div>
              </div>
              <div class="price">Цена от <span>4900 руб/п.м.</span></div>
              <a data-fancybox data-src="#hidden_work3" href="javascript:;" class="show-a">Узнать цену под ключ</a>
            </div>
            <!--end item-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
          <!--item-->
            <div class="item">
              <div class="img" style="background: url('img/work/work4/10.jpg'); background-size: cover;" data-fancybox data-src="#hidden_work4" href="javascript:;">
                <div class="shadow">
                  <div class="desc">ЗД забор</div>
                    <div class="param">
                       Высота: 2,0 м<br>
                        Диаметр прутка: 3/4 / 4 / 5 мм<br>
                        Сетка: Каскад / Fensys<br>
                        Покрытие: Цинк + ПВХ<br>
                        Столбы: 50x50 мм<br>
                        Покрытие столбов: Dali<br>
                    </div>
                </div>
                <div class="bottom"></div>
              </div>
              <div class="price">Цена от <span>1700 руб/п.м.</span></div>
              <a data-fancybox data-src="#hidden_work4" href="javascript:;" class="show-a">Узнать цену под ключ</a>
            </div>
            <!--end item-->
          </div>
          <div class="col-md-4">
            <!--item-->
            <div class="item">
              <div class="img" style="background: url('img/work/work5/1.jpg'); background-size: cover;" data-fancybox data-src="#hidden_work5" href="javascript:;">
                <div class="shadow">
                  <div class="desc">Художественная ковка</div>
                    <div class="param">
                        Высота: 1,5 / 1,8 / 2,0 / 2,2 / до 6 м<br>
                        Ковка: Горячая/холодная<br>
                        Эскизы: индивидуальные / сстандартные<br>
                    </div>
                </div>
                <div class="bottom"></div>
              </div>
              <div class="price">Цена от <span>3100 руб/п.м.</span></div>
              <a data-fancybox data-src="#hidden_work5" href="javascript:;" class="show-a">Узнать цену под ключ</a>
            </div>
            <!--end item-->
          </div>
          <div class="col-md-4">
            <!--item-->
            <div class="item">
              <div class="img" style="background: url('img/work/work6/1.jpg'); background-size: cover;" data-fancybox data-src="#hidden_work6" href="javascript:;">
                <div class="shadow">
                  <div class="desc">Сетка Рабица</div>
                    <div class="param">
                        Высота: 1,5 / 1,8 / 2,0 м<br>
                        Сетка: натяжная / секционная<br>
                        Размер ячейки: 55x55 мм<br>
                        Протяжка: Без / Арматура D-10 мм<br>
                        Ворота: распашные / откатные<br>
                        Декор: декоративные дуги<br>
                    </div>
                </div>
                <div class="bottom"></div>
              </div>
              <div class="price">Цена от <span>1300 руб/п.м.</span></div>
              <a data-fancybox data-src="#hidden_work6" href="javascript:;" class="show-a">Узнать цену под ключ</a>
            </div>
            <!--end item-->
          </div>
        </div>
      </div>
      <div class="bottom_line_left"></div>
      <div class="bottom_line_right"></div>
      <div class="bootom_line"></div>  
      <a href="#story" class="arrow_next"></a>
    </section>
    <section class="story scene" id="story">
      <div class="body">
        <div class="container">
          <div class="row">
            <h1>Отчеты о выполненых объектах</h1>
            <div class="owl-carousel">
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/1.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/2.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/3.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/4.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/5.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/6.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/7.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/8.jpg" alt="">
                </div>
              </div>
              <div>
                <div class="col-md-12">
                  <img src="img/work/work7/9.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="bottom_bottom"><a href="#video_otziv" class="arrow_next"></a></div>     
    </section>

    <section class="video_otziv">
      <div class="scene video_otziv_body" id="video_otziv">
        <div class="container">
          <h1>Отзывы о нашей работе</h1>
<div class="owl-carousel">

            <div class="col-md-8 col-md-offset-2">
              <div class="video">
                <a class="sh2-video" data-fancybox href="https://www.youtube.com/watch?v=JaZ4YHaKy2c"></a>
              </div>
            </div>

            <div class="col-md-8 col-md-offset-1">
              <div class="video">
                <a class="sh3-video" data-fancybox href="https://www.youtube.com/watch?v=7wvofifhiGg"></a>
              </div>
            </div>
</div>
        </div>
        <div class="bottom_line_left"></div>
        <div class="bottom_line_right"></div>
        <div class="bootom_line"></div>  
        <a href="#answer" class="arrow_next"></a>
      </div>
    </section>
    <section class="answer scene" id="answer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="cit">
              <div class="header">Генеральный директор, <br>Сергей Раков</div>
              <div class="body">Мы всегда находим общий язык с клиентами, любим, когда нам задают вопросы. Ведь именно из них мы понимаем, что волнует клиентов больше всего.
              <div class="c-left"></div>
              <div class="c-right"></div>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-md-offset-1">
            <div class="answer_form">
              <div class="answer_form_body">
                <form action="send.php" method="post">
                  <h4>Остались вопросы?</h4>
                  <p>Введите свой вопрос,<br> и в течении 15 минут<br> мы с Вами свяжемся</p>
                  <textarea required="" name="message"></textarea>
                  <input type="text" name="phone" id="phone999" placeholder="Введите номер">
    <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone999").mask("+7(999) 999-9999");
});
</script>               <input type="hidden" name="form" value="Вопрос по теме">
                  <input type="submit" value="Задать вопрос">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>
    <section class="bottom_menu">
      <div class="container">
        <div class="row">
         <!-- <div class="bottom_menu_item"><a href="#exemple">ВАРИАНТЫ ЗАБОРОВ</a></div>
          <div class="bottom_menu_item"><a href="#story">Отчеты</a></div>
          <div class="bottom_menu_item"><a href="#video_otziv">Отзывы о работе</a></div>
          <div class="bottom_menu_item"><a href="#answer">Задайте вопрос</a></div>-->
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="logo">
              Заборы в <span>Новосибирске</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="slogan">
              Строим заборы с <span>2007 года</span> Установили <span>194 забора</span> в 2016 году Гарантия <span>2 года</span> на каждый монтаж
            </div>
          </div>
          <div class="col-md-4">
            <div class="phone_text">Есть вопросы? Звоните!</div>
            <div class="phone_number"><i class="fa fa-phone"></i> +7 (383) 239-63-32</div>
            <div class="phone_back">
              <a data-fancybox data-src="#hidden_back" href="javascript:;">Заказать обратный звонок</a>
            </div>
          </div>
        </div>
      </div> 
    </footer>
    <a data-fancybox data-src="#hidden_thansk" href="javascript:;" id="modal_view_thanks" style="display: none;"></a>
    <div style="display: none;" id="hidden_thansk">
    <h2>Спасибо!</h2>
      <p>Мы ответим Вам в течении 15 минут</p>
    </div>
    <div class="back" id="hidden_back" style="display: none;">
	    <div class="answer_form">
	      <div class="answer_form_body">
	        <form action="send.php" method="post">
	          <h4>Мы перезвоним</h4>
	          <p>Укажите свой телефон,<br> и в течении 15 минут<br> мы с Вами свяжемся</p>
	          <input name="phone" id="phone" type="text" placeholder="Введите номер">

<script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone").mask("+7(999) 999-9999");
});
</script> 
	          <input type="hidden" name="form" value="Обратный звонок">
	          <input type="submit" value="Отправить">
	        </form>
	      </div>
	    </div>
    </div>
    <div class="back" id="hidden_price" style="display: none;">
	    <div class="answer_form">
	      <div class="answer_form_body">
	        



<form action="send.php" method="post">
	          <h4>Узнайте<br> Стоимость забора</h4>
	          <p>Укажите свой телефон,<br> и в течении 15 минут<br> мы с Вами свяжемся</p>
	          <input type="text" name="phone" id="phone1000"  placeholder="Введите номер">


<script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone1000").mask("+7(999) 999-9999");
});
</script> 	          <input type="hidden" name="form" value="">
	          <input type="submit" value="Отправить">
	        </form>
	      </div>
	    </div>
    </div>






  <div class="back" id="hidden_work1" style="display: none;">
      <div class="answer_form big-form">
          <div class="answer_form_body">
             <div class="row">
                 <div class="col-md-7">
                     <div id="owl-work1" class="owl-carousel" data-slider-id="1">
                        <div>                  
                          <a href="img/work/work1/1.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/1.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/2.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/2.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/3.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/3.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/4.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/4.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/5.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/5.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/6.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/6.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/7.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/7.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/8.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/8.jpg" alt="">
                          </a>
                        </div>                        
                        <div>                  
                          <a href="img/work/work1/9.jpg" data-fancybox="group-work11">
                            <img src="img/work/work1/9.jpg" alt="">
                          </a>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-5">
                     



<form action="send.php" method="post">
                         <h4>Узнайте<br> Стоимость забора</h4>
                         <input type="text" name="phone" id="phone996"  placeholder="Введите номер">
 <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone996").mask("+7(999) 999-9999");
});
</script>                        <input type="hidden" name="form" value="">
                         <input type="submit" value="Отправить">
                     </form>
                     <div class="phone-text">
                         Или позвоните
                         <span>+7 (383) 239-63-32</span>
                     </div>
                 </div>
             </div>
              <div class="img-work-box">
                  <a href="img/work/work1/1.jpg" data-fancybox="group-work12">
                    <img src="img/work/work1/1.jpg" alt="">
                  </a>
                  <a href="img/work/work1/2.jpg" data-fancybox="group-work12">
                      <img src="img/work/work1/2.jpg" alt="">
                  </a>
                  <a href="img/work/work1/3.jpg" data-fancybox="group-work12">
                      <img src="img/work/work1/3.jpg" alt="">
                  </a>
                  <a href="img/work/work1/4.jpg" data-fancybox="group-work12">
                      <img src="img/work/work1/4.jpg" alt="">
                  </a>
                  <a href="img/work/work1/5.jpg" data-fancybox="group-work12">
                      <img src="img/work/work1/5.jpg" alt="">
                  </a>
                  <a href="img/work/work1/6.jpg" data-fancybox="group-work12">
                      <img src="img/work/work1/6.jpg" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>



  <div class="back" id="hidden_work2" style="display: none;">
      <div class="answer_form big-form">
          <div class="answer_form_body">
              <div class="row">
                  <div class="col-md-7">
                      <div id="owl-work2" class="owl-carousel" data-slider-id="1">
                          <div>
                            <a href="img/work/work2/1.jpg" data-fancybox="group-work21">
                              <img src="img/work/work2/1.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work2/2.jpg" data-fancybox="group-work21">
                              <img src="img/work/work2/2.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work2/3.jpg" data-fancybox="group-work21">
                              <img src="img/work/work2/3.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work2/4.jpg" data-fancybox="group-work21">
                              <img src="img/work/work2/4.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work2/5.jpg" data-fancybox="group-work21">
                              <img src="img/work/work2/5.jpg" alt="">
                            </a>
                          </div>                          
                      </div>
                  </div>
                  <div class="col-md-5">
                      




<form action="send.php" method="post">
                          <h4>Узнайте<br> Стоимость забора</h4>
                          <input type="text" name="phone" id="phone995"  placeholder="Введите номер">

  <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone995").mask("+7(999) 999-9999");
});
</script>                         <input type="hidden" name="form" value="">
                          <input type="submit" value="Отправить">
                      </form>
                      <div class="phone-text">
                          Или позвоните
                          <span>+7 (383) 239-63-32</span>
                      </div>
                  </div>
              </div>
              <div class="img-work-box">
                  <a href="img/work/work2/1.jpg" data-fancybox="group-work22">
                      <img src="img/work/work2/1.jpg" alt="">
                  </a>
                  <a href="img/work/work2/2.jpg" data-fancybox="group-work22">
                      <img src="img/work/work2/2.jpg" alt="">
                  </a>
                  <a href="img/work/work2/3.jpg" data-fancybox="group-work22">
                      <img src="img/work/work2/3.jpg" alt="">
                  </a>
                  <a href="img/work/work2/4.jpg" data-fancybox="group-work22">
                      <img src="img/work/work2/4.jpg" alt="">
                  </a>
                  <a href="img/work/work2/5.jpg" data-fancybox="group-work22">
                      <img src="img/work/work2/5.jpg" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>


  <div class="back" id="hidden_work3" style="display: none;">
      <div class="answer_form big-form">
          <div class="answer_form_body">
              <div class="row">
                  <div class="col-md-7">
                      <div id="owl-work3" class="owl-carousel" data-slider-id="1">
                          <div>
                            <a href="img/work/work3/1.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/1.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/2.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/2.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/3.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/3.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/4.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/4.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/5.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/5.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/6.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/6.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/7.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/7.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/8.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/8.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work3/9.jpg" data-fancybox="group-work31">
                              <img src="img/work/work3/9.jpg" alt="">
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                      




<form action="send.php" method="post">
                          <h4>Узнайте<br> Стоимость забора</h4>
                          <input type="text" name="phone" id="phone994"  placeholder="Введите номер">

  <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone994").mask("+7(999) 999-9999");
});
</script>              
                          <input type="hidden" name="form" value="">
                          <input type="submit" value="Отправить">
                      </form>
                      <div class="phone-text">
                          Или позвоните
                          <span>+7 (383) 239-63-32</span>
                      </div>
                  </div>
              </div>
              <div class="img-work-box">
                  <a href="img/work/work3/1.jpg" data-fancybox="group-work32">
                      <img src="img/work/work3/1.jpg" alt="">
                  </a>
                  <a href="img/work/work3/2.jpg" data-fancybox="group-work32">
                      <img src="img/work/work3/2.jpg" alt="">
                  </a>
                  <a href="img/work/work3/3.jpg" data-fancybox="group-work32">
                      <img src="img/work/work3/3.jpg" alt="">
                  </a>
                  <a href="img/work/work3/4.jpg" data-fancybox="group-work32">
                      <img src="img/work/work3/4.jpg" alt="">
                  </a>
                  <a href="img/work/work3/5.jpg" data-fancybox="group-work32">
                      <img src="img/work/work3/5.jpg" alt="">
                  </a>
                  <a href="img/work/work3/6.jpg" data-fancybox="group-work32">
                      <img src="img/work/work3/6.jpg" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>


  <div class="back" id="hidden_work4" style="display: none;">
      <div class="answer_form big-form">
          <div class="answer_form_body">
              <div class="row">
                  <div class="col-md-7">
                      <div id="owl-work4" class="owl-carousel" data-slider-id="1">
                          <div>
                            <a href="img/work/work4/1.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/1.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/2.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/2.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/3.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/3.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/4.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/4.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/5.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/5.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/6.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/6.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/7.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/7.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/8.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/8.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/9.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/9.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/10.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/10.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/11.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/11.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/12.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/12.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/13.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/13.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/14.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/14.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/15.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/15.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/16.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/16.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/17.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/17.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/18.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/18.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/19.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/19.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/20.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/20.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/21.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/21.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/22.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/22.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/23.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/23.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/24.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/24.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/25.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/25.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/26.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/26.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/27.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/27.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/28.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/28.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work4/29.jpg" data-fancybox="group-work41">
                                <img src="img/work/work4/29.jpg" alt="">
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                      




<form action="send.php" method="post">
                          <h4>Узнайте<br> Стоимость забора</h4>
                          <input type="text" name="phone" id="phone993"  placeholder="Введите номер">

  <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone993").mask("+7(999) 999-9999");
});
</script>              
                          <input type="hidden" name="form" value="">
                          <input type="submit" value="Отправить">
                      </form>
                      <div class="phone-text">
                          Или позвоните
                          <span>+7 (383) 239-63-32</span>
                      </div>
                  </div>
              </div>
              <div class="img-work-box">
                  <a href="img/work/work4/1.jpg" data-fancybox="group-work42">
                      <img src="img/work/work4/1.jpg" alt="">
                  </a>
                  <a href="img/work/work4/2.jpg" data-fancybox="group-work42">
                      <img src="img/work/work4/2.jpg" alt="">
                  </a>
                  <a href="img/work/work4/3.jpg" data-fancybox="group-work42">
                      <img src="img/work/work4/3.jpg" alt="">
                  </a>
                  <a href="img/work/work4/4.jpg" data-fancybox="group-work42">
                      <img src="img/work/work4/4.jpg" alt="">
                  </a>
                  <a href="img/work/work4/5.jpg" data-fancybox="group-work42">
                      <img src="img/work/work4/5.jpg" alt="">
                  </a>
                  <a href="img/work/work4/6.jpg" data-fancybox="group-work42">
                      <img src="img/work/work4/6.jpg" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>


  <div class="back" id="hidden_work5" style="display: none;">
      <div class="answer_form big-form">
          <div class="answer_form_body">
              <div class="row">
                  <div class="col-md-7">
                      <div id="owl-work5" class="owl-carousel" data-slider-id="1">
                          <div>
                            <a href="img/work/work5/1.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/1.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/2.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/2.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/3.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/3.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/4.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/4.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/5.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/5.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/6.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/6.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/7.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/7.jpg" alt="">
                            </a>
                          </div>                          
                          <div>
                            <a href="img/work/work5/8.jpg" data-fancybox="group-work51">
                                <img src="img/work/work5/8.jpg" alt="">
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                      




<form action="send.php" method="post">
                          <h4>Узнайте<br> Стоимость забора</h4>
                          <input type="text" name="phone" id="phone992"  placeholder="Введите номер">

  <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone992").mask("+7(999) 999-9999");
});
</script>              
                          <input type="hidden" name="form" value="">
                          <input type="submit" value="Отправить">
                      </form>
                      <div class="phone-text">
                          Или позвоните
                          <span>+7 (383) 239-63-32</span>
                      </div>
                  </div>
              </div>
              <div class="img-work-box">
                  <a href="img/work/work5/1.jpg" data-fancybox="group-work52">
                      <img src="img/work/work5/1.jpg" alt="">
                  </a>
                  <a href="img/work/work5/2.jpg" data-fancybox="group-work52">
                      <img src="img/work/work5/2.jpg" alt="">
                  </a>
                  <a href="img/work/work5/3.jpg" data-fancybox="group-work52">
                      <img src="img/work/work5/3.jpg" alt="">
                  </a>
                  <a href="img/work/work5/4.jpg" data-fancybox="group-work52">
                      <img src="img/work/work5/4.jpg" alt="">
                  </a>
                  <a href="img/work/work5/5.jpg" data-fancybox="group-work52">
                      <img src="img/work/work5/5.jpg" alt="">
                  </a>
                  <a href="img/work/work5/6.jpg" data-fancybox="group-work52">
                      <img src="img/work/work5/6.jpg" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>


  <div class="back" id="hidden_work6" style="display: none;">
      <div class="answer_form big-form">
          <div class="answer_form_body">
              <div class="row">
                  <div class="col-md-7">
                      <div id="owl-work6" class="owl-carousel" data-slider-id="1">
                          <div>
                            <a href="img/work/work6/1.jpg" data-fancybox="group-work61">
                                <img src="img/work/work6/1.jpg" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="img/work/work6/2.jpg" data-fancybox="group-work61">
                                <img src="img/work/work6/2.jpg" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="img/work/work6/3.jpg" data-fancybox="group-work61">
                                <img src="img/work/work6/3.jpg" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="img/work/work6/4.jpg" data-fancybox="group-work61">
                                <img src="img/work/work6/4.jpg" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="img/work/work6/5.jpg" data-fancybox="group-work61">
                                <img src="img/work/work6/5.jpg" alt="">
                            </a>
                          </div>
                          <div>
                            <a href="img/work/work6/6.jpg" data-fancybox="group-work61">
                                <img src="img/work/work6/6.jpg" alt="">
                            </a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-5">
                      





<form action="send.php" method="post">
                          <h4>Узнайте<br> Стоимость забора</h4>
                          <input type="text" name="phone" id="phone991"  placeholder="Введите номер">

  <script>
//Код jQuery, установливающий маску для ввода телефона элементу input
//1. После загрузки страницы,  когда все элементы будут доступны выполнить...
$(function(){
  //2. Получить элемент, к которому необходимо добавить маску
  $("#phone991").mask("+7(999) 999-9999");
});
</script>              
                          <input type="hidden" name="form" value="">
                          <input type="submit" value="Отправить">
                      </form>
                      <div class="phone-text">
                          Или позвоните
                          <span>+7 (383) 239-63-32</span>
                      </div>
                  </div>
              </div>
              <div class="img-work-box">
                  <a href="img/work/work6/1.jpg" data-fancybox="group-work62">
                      <img src="img/work/work6/1.jpg" alt="">
                  </a>
                  <a href="img/work/work6/2.jpg" data-fancybox="group-work62">
                      <img src="img/work/work6/2.jpg" alt="">
                  </a>
                  <a href="img/work/work6/3.jpg" data-fancybox="group-work62">
                      <img src="img/work/work6/3.jpg" alt="">
                  </a>
                  <a href="img/work/work6/4.jpg" data-fancybox="group-work62">
                      <img src="img/work/work6/4.jpg" alt="">
                  </a>
                  <a href="img/work/work6/5.jpg" data-fancybox="group-work62">
                      <img src="img/work/work6/5.jpg" alt="">
                  </a>
                  <a href="img/work/work6/6.jpg" data-fancybox="group-work62">
                      <img src="img/work/work6/6.jpg" alt="">
                  </a>
              </div>
          </div>
      </div>
  </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
      jQuery(function(f){
          var element = f('#menu-scroll');
          f(window).scroll(function(){
              element['fade'+ (f(this).scrollTop() > 250 ? 'In': 'Out')](500);
          });
      });
  </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mikeinput.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="fancybox/jquery.fancybox.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44990359 = new Ya.Metrika({
                    id:44990359,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/44990359" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


  </body>
</html>