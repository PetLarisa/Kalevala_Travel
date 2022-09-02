<!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>KalevalaTravel</title>
 
        

       
    </head>
    <body>
        <header class="site-header">
                
                <nav class="main-nav">
              
                    <a href="KalevalaTravel.html" class="logo">Kalevala
                        <img src="img/logo.jpg" alt="Kalevala">
                    </a>
                    
                    <a href="KalevalaTravel.html"><h1><b>KalevalaTravel<b></h1></a>
                       
                    <li>
                    <ul class="contact-menu">
                        <li>
                            <a href="#" class="icon icon-mail">
                                <span class="hidden">Написать нам</span>
                            </a>
                        </li>
                            <a href="#" class="icon icon-phone">
                                <span class="hidden">Позвонить нам</span>
                            </a>
                        </li>
                    </ul>
                    
                </nav>
                
                <section class="about-us">
                    <p>
                        <b>Окунись в красочный мир Калевала</b>
                    </p>
                    <p>
                        Туры по северной Карелии 
                    </p>
                    <a href="myroute.html" class="btn btn-yellow">Выбор маршрута</a>
                </section> 

            <div class="container">
                   
                <div class = "kuitto"> 
                    <img src="img/kuitto.jpg" alt="kuitto">
                </div>   
                <div class = "vuokkiniemi"> 
                    <img src="img/vuokkiniemi.jpg" alt="vuokkiniemi">
                </div>
                <div class = "lenrot"> 
                     <img src="img/lenrot.jpg" alt="lenrot">
                </div>
            </div> 
        </header>
        <main>
            <section class="objects">
                <div class="container column-container">
                    <div class="left-column">
                       
                        <h2>Информация по объектам</h2>
                        <div class = "solovki"> 
                            <img src="img/соловки.jpg" alt="solovki">
                            <a href="solovki.html"><p><color="white"  >Соловки</p></a>
                        </div>
                        <div class = "petroglif"> 
                            <img src="img/петроглифы.jpg" alt="petroglif">
                            <a href="petroglif.html"><p>Петроглифы</p></a>
                        </div>
                        <div class = "paanajarvi"> 
                            <img src="img/паанаярви.jpg" alt="paanajarvi">
                            <a href="paanajarvi.html"><p>Паанаярви</p></a>
                        </div>
                        <div class = "kumi"> 
                            <img src="img/куми2.jpg" alt="kumi">
                            <a href="kumi.html"><p>Кумипорог</p></a>
                        </div>
                        <div class = "Dolinazaizev"> 
                            <img src="img/долина зайцев.jpg" alt="Dolina zaizev">
                            <a href="dolinazaizev.html"><p>Долина зайцев</p></a>
                        </div>
                        <div class = "voknavolok"> 
                            <img src="img/вокнаволок4.jpg" alt="voknavolok">
                            <a href="#"><p>Вокнаволок</p></a>
                        </div>
                         <div class = "voknavolok2"> 
                             <img src="img/вокнаволок2.jpg" alt="voknavolok2">
                         </div>
                        
                    </div>
                    <div class="right-column">

                                <label>Количество человек</label>
                                <input type="text" id="number" name="number" placeholder="Количество человек">
                            
                            
                                <label >Номер маршрута</label>
                                <input type="text" id="phone" name="route" placeholder="Номер маршрута">
                           
                             <div class="date">
                                <label >Выберете дату</label>
                                <input type="text" id="date" name="date" placeholder="Выберете дату">
                            </div>
                            <div>
                    
                                <a href="anketa.html" class="btn btn-yellow">Заполните анкету</a>
                            </div>
                            <div class = "map"> 
                                <img src="img/map.jpg" alt="map">
                            </div> 
                            <div class = "include"> 
                                 <p>В стоимость тура входит: проживание в деревенском доме со всеми удобствами, трехразовое питание и выбранный Вами маршрут.
                                    При желании маршрут можно изменить  или составить индивидуальный. </p>
                            </div> 
                        
                            <div class = "karjalantalo">
                                <img src="img/karjalantalo.jpg" alt="karjalantalo">
                            </div>
                        </div>

                            
                        
                    </div>
                </div>
            </section>
            
        </main>
        <footer class="site-footer">
            <a href="#" class="logo">
                <img src="img/logo.jpg" alt="Kalevala">
            </a>
            <div class="container footer-columns-container">
                <div class="left-column">
                    
                    <h3>
                        Почему нас выбирают:
                    </h3>
                    <ul class="choose">
                        <li>Маршруты могут адаптироваться под пожелания группы</li>
                        <li>Гарантированные туры
                            Бронируя туры у нас, Вы можете быть уверены, что он состоится</li>
                        <li>Небольшие группы
                            Разногласий в группе нет т.к. группы семейные.</li>
                    </ul>
                </div>
                <div class="right-column">                    
                    <ul class="footer-menu">
                        <li><h1>  KalevalaTravel </h1></li>
                        <li> <a href="KalevalaTravel.html">О компании</a></li>
                        <li><a href="#">Контакты</a></li>
                           
                        <li><a href="#">Способы оплаты</a></li>
                        <li></li><div class="oplata">
                            <img src="img/platez.JPG" alt="platez"></li>
                         </div>
                     </ul>
                       
                </div>
            </div>
                <p class="copyrights">2022 &laquo;KalevalaTravel&raquo;.
                    Все права защищены.| Публичная оферта | Политика конфиденциальности</p>
        </footer>
    </body>
</html>