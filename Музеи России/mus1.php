<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музей "Государственный Эрмитаж"</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        .museum {
            text-align: center;
        }
        .museum img {
            max-width: 100%;
            height: auto;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 20%;
        }
        .info {
    text-align: center;
}

body {
    margin: 0;
    padding: 0;
}

.info-block {
    background-color: #f4f4f4;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    width: 17%;
    height: 400px;
    float: left;
}

.info-block h2 {
    color: #333;
    font-size: 1.5em;
    margin-bottom: 10px;
}

.info-block p {
    color: #666;
    font-size: 1em;
    line-height: 1.6;
}

.personal-sign {
    display: flex;
    align-items: center;
    margin: 20px;
    float: left;
    margin-left: 14.7%; 
}

.avatar {
    width: 130px;
    height: 130px;
    margin-top: -10px;
    border-radius: 50%;
    background-color: #333;
    margin-right: 20px;
    border: 2px rgb(209, 45, 100) solid;
    position: relative;
}

.details {
    font-family: Arial, Helvetica, sans-serif;
}

.details p {
    margin: 5px 0;
}

.button {
    background-color: #008cff;
    color: #ffffff;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}
  
  .button:hover {
    background-color: #cc0000;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

p {
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    line-height: 1;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>
    <div class="museum">
        <img src="Museum1.jpg" alt="Эрмитаж">
        <h1>Государственный Эрмитаж</h1>
        <p>Государственный Эрмитаж – это один из крупнейших музеев мира, расположенный в Санкт-Петербурге, Россия. Музей был основан в 1764 году Екатериной II и на данный момент представляет собой огромный комплекс зданий, включающий в себя более трех миллионов произведений искусства.</p>

        <p>Эрмитаж насчитывает более 350 залов, в которых представлены коллекции живописи, скульптуры, археологии, этнографии, мебели, предметов прикладного искусства из различных эпох и культурных традиций. В музее можно увидеть произведения таких знаменитых художников, как Леонардо да Винчи, Рембрандт, Рафаэль, Пикассо, величайшие скульптуры древнего Египта и Греции, а также уникальные коллекции предметов быта и культуры различных народов мира. </p>
            
        <p>Одним из символов Эрмитажа является Зимний дворец – бывшая резиденция российских императоров, который блистает роскошью своих интерьеров и архитектурной красотой. Кроме Зимнего дворца, экспозиция музея занимает аж 6 зданий на Дворцовой площади и еще несколько на прилегающих улицах. </p>
            
        <p>Государственный Эрмитаж – это не только музей, но и центр культурной жизни города Санкт-Петербурга, где проводятся множество выставок, концертов, лекций и других мероприятий. Эрмитаж является одним из популярнейших туристических объектов в России, привлекая тысячи посетителей со всех уголков мира. </p>
            
        <p>Посещение Государственного Эрмитажа – это увлекательное путешествие в историю искусства и культуры, которое оставит незабываемые впечатления и вдохновение на долгие годы.</p>
    </div>
        <button class="btn" onclick="openPopup()">Купить билеты</button>

<div id="popup" class="popup">
  <span class="close" onclick="closePopup()">&times;</span>
  <h2>Музей искусств</h2>
  <form>
    <label for="date">Выберите дату и время:</label>
    <select id="date" name="date">
      <option value="2022-10-15T10:00">15 октября, 10:00</option>
      <option value="2022-10-16T15:30">16 октября, 15:30</option>
      <option value="2022-10-17T13:45">17 октября, 13:45</option>
    </select>
    <label for="tickets">Выберите количество билетов:</label>
    <input type="number" id="tickets" name="tickets" min="1" max="10" value="1">
    <p>Итого: <span id="totalPrice">499</span> рублей</p>
    <button type="submit">Купить</button>
  </form>
</div>
        <button class="btn" onclick="toggleBlocks()">экскурсия</button>
        <div class="hidden fon">
            <div class="employee hidden" id="employee1">
                <img class="photo" src="dima.jpeg" alt="">
                <p>Имя: Иван</p>
                <p>Фамилия: Петров</p>
                <p>Должность: Гид</p>
                <button onclick="buyTicket()">Купить билет</button>
            </div>
            <div class="employee hidden" id="employee1">
                <img class="photo" src="dima.jpeg" alt="">
                <p>Имя: Иван</p>
                <p>Фамилия: Петров</p>
                <p>Должность: Гид</p>
                <button onclick="buyTicket()">Купить билет</button>
            </div>
            <div class="employee hidden" id="employee1">
                <img class="photo" src="dima.jpeg" alt="">
                <p>Имя: Иван</p>
                <p>Фамилия: Петров</p>
                <p>Должность: Гид</p>
                <button onclick="buyTicket()">Купить билет</button>
            </div>
        </div>
        <a href="#" class="btn">О музее</a>
    </div>
    <div class="widget">
        <a href="mus1.php"><div class="museum">Государственный Эрмитаж</div></a>
        <a href="mus2.php"><div class="museum">Третьяковская Галерея</div></a>
        <a href="mus3.php"><div class="museum"><p>Государственный музей
             <p>изобразительных искусств имени А.С.Пушкина</div></a>
    </div>
    <div class="info">
        <h2>Отзыв от искусствоведа</h2>
    </div>
    <div class="info-block">
        <h2>Контакты</h2>
        <p>Телефон: +7 (977)-404-15-68</p>
        <p>Email: museum.rus@gmail.com</p>
        <h2>Интересная информация</h2>
        <p>15.04.2024. Бесплатное посещение в Третьяковскую галерею в честь праздников..</p>
    </div>
    <div class="personal-sign">
        <div class="">
            <img class="avatar" src="tokiodima.jpg">
        </div>
        <div class="details">
            <p><b>Романюта Дмитрий</b></p>
            <p>Посещение Государственного Эрмитажа поразило меня </p>
            <p>колоссальной коллекцией искусства от древности до </p>
            <p>современности. Мне было очаровано великолепие </p>
            <p>экспонатов и атмосфера истории и культуры в музее. </p>
            <p>Рекомендую это удивительное погружение в мир </p>
            <p>искусства всем!</p>
            <a href="https://vk.com/ionelov" class="link"><img class="vk" src="vk.png" alt=""></a>
            <a href="https://whatsapp.com/dl/" class="link"><img class="wooot" src="wooot.png" alt=""></a>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 Исследование российских музеев</p>
</footer>

<script>

let blocksVisible = false;
    
        function toggleBlocks() {
            const blocks = document.querySelectorAll('.hidden');
            blocks.forEach(block => {
                if (blocksVisible) {
                    block.style.display = 'none';
                } else {
                    block.style.display = 'block';
                }
            });
            blocksVisible = !blocksVisible;
        }

// script.js
function openPopup() {
  document.getElementById("popup").style.display = "block";
}

function closePopup() {
  document.getElementById("popup").style.display = "none";
}

// script.js
const button = document.querySelector('.museum-button');
const list = document.querySelector('.museum-list');

button.addEventListener('mouseover', function() {
  list.classList.toggle('active');
});

list.addEventListener('mouseleave', function() {
  list.classList.remove('active');
});




</script>

</html>
