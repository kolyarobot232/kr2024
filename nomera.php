<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index2.css">
</head>
<body>
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
<style>
body{
    background: url(fon.jpg);
    width: 100%;
    height: 1000px;
    margin-top: 0px;
    padding-top:0px;
}
* {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin: 0;
    padding: 0;
}
.card-img{
    max-width: 100%;
}
.logo-img{
    max-width: 75px;
}
.img123{
    width:850px;
    height: 575px;
    border: 5px solid lime;
    text-align: center;
}
.img1234{
    width:300px;
    height: 575px;
    border: 5px solid lime;
    text-align: center;
}
    .conteiner{
    max-width: 1350px;
    padding: 0 15px;
    margin: 0 auto;
}
.cards-section{
    padding: 50px 0;
}
.card-title{
    color: #151c39;
    text-align:center;
}
.cards-rows{
        display: flex;
        justify-content:center;
        flex-direction: column;
        align-items: center;
        height: 100%;

        
    }
.card{
    padding: 25px;
    margin-top: 25px;
    width: 50%;
    background: white;
    text-align: center;
    box-shadow: 0px 2px 7px 0px #3cff3c;
    height: 500px;
}
.card:hover{
    box-shadow: 0px 10px 30px 0px  #3cff3c;
}

.card-link{
    text-decoration: none;
    color: white;
}
.card-button{

    text-align: center;
    background:#A0F06C;
    padding: 10px 70px;
    border-radius: 10px;
    cursor: pointer;
}
.button2{
    margin-top:0px;
}
.card-title, .card-text{
    margin-bottom: 10px;

}
.card-title2, .card-text2{
    padding-left: 30px;
}
</style>
</body>
</html>