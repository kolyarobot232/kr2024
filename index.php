<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <!--Start Header-->
    <header class="header">
        <div class="header-row">
            <!--Start Block logo-->
            <div class="header-logo">
                <!--<img class="logo-img" src="images/logo5.webp"> -->
                <h1 class="logo-title">Отель Тихая Гавань</h1>
            </div>
            <!--End Block logo-->
            
            <!--Start Block menu-->
            <div class="header-menu">
                <ul class="menu">
                    <li class="menu-item">
                        <a class="menu-link" href="auth.php">Логин</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="registration.php">Регистрация</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">Номера</a>
                    </li>
                    <li class="menu-item">
                        <a class="menu-link" href="#">Бронирование</a>
                    </li>
                    <li class="menu-item"> 
                        <a class="menu-link" href="#">Products</a>
                    </li>
                </ul>
            </div>
            <!--End Block menu-->
        </div>
    </header>
    <!--End Header-->
    <!--Start Main-->
    <main class="main"> 
        <!--Start Banner Section-->
        <section class="banner-section">
            <div class="conteiner">
                <div class="banner-text">
                    <h1 class="banner-title">О нас</h1>
                    <div class="banner-description"> 
                        <img src="images/2134.jpeg" class="img123">
                        <img src="images/4325.jpg" class="img1234">
                        <img src="images/ewqeqw.jpeg" class="img123">
                        <a class="menu-link" href="#"></a>
                        <a class="menu-link" href="#"></a>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section-->
        <!--Start Cards Section-->
        <section class="cards-section">
            <a name="metka">
            <div class="conteiner">
                    <a name="metka"></a>
                <div class="cards-text2">
                    <h1 class="card-title2">Номера</h1>
                    <div class = "card-title2" >
                        Выберите подходящий для вас номер:
                    </div>
                </div>
            
                <div class="cards">
                    <div class="cards-rows">
                      <div class="card">
                            <img class="card-img" src="images/123456.PNG">
                            <div class="card-body">
                                <h3 class="card-title">Бюджет</h3>
                                <div class="card-text">В номере: кровать односпальная (90*190 см), прикроватный столик, шкаф, письменный стол, стул, телевизор, холодильник, телефон. В ванной комнате душевая кабина, зеркало, полотенца, гигиенический набор.</div>
                                <div class="card-button">
                                    <a class="card-link" href="#">Забронировать &#x2192</a>
                                </div>
                            </div>
                        </div>
                   
        

        
                         <div class="card">
                               <img class="card-img" src="images/werewtv.PNG">
                               <div class="card-body">
                                   <h3 class="card-title">Комфорт</h3>
                                   <div class="card-text">Светлый номер с большой двуспальной кроватью, собственным санузлом,системой охлаждения воздуха. Возможен выбор номера с ванной или душевой кабиной. Халат, тапочки, бутилированная вода. Фен. Сейф.</div>
                                   <div class="card-button button2">
                                       <a class="card-link" href="#">Забронировать &#x2192</a>
                                   </div>
                               </div>
                           </div>
        

          
                         <div class="card">
                               <img class="card-img" src="images/sacxzv213.PNG">
                               <div class="card-body">
                                   <h3 class="card-title">Классичесский</h3>
                                   <div class="card-text">Классический стандартный номер: полутороспальная кровать, ванная комната, фен, халат, одноразовые тапочки, бутилированная вода, проводной интернет - для подключения ноутбука. Отличный вид из окна.</div>
                                   <div class="card-button">
                                       <a class="card-link" href="#">Забронировать &#x2192</a>
                                   </div>
                               </div>
                           </div>
                       </div>
                </div> 

            </div>   
        
        </section>
        <!--End Cards Section-->

    </main>
    <!--End Main-->
    <!--Start Footer-->
    <footer class="footer">
        <div class="conteiner">
            <div class="copyright">Copyright 2019 All right reserverd By...</div>
        </div>
    </footer>
    <!--End Footer-->


</body>
</html>