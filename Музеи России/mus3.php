<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музей "Государственный музей изобразительных искусств имени А.С.Пушкина"</title>
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

.ticket {
    margin-top: 3%;
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
        <img src="Museum3.jpg" width="100%" alt="Государственный музей изобразительных искусств имени А.С.Пушкина">
        <h1>Государственный музей изобразительных искусств имени А.С.Пушкина</h1>
        <p>Государственный музей изобразительных искусств имени А.С. Пушкина (также известный как ГМИИ им. Пушкина) – это ведущий музей российского искусства в Москве, Россия. Музей был основан в 1912 году на основе коллекции художественных произведений, собранной И.Т. Триновым. С течением времени коллекция постоянно пополнялась и на сегодняшний день включает более 700 тысяч экспонатов различных эпох и стилей.</p>

        <p>В музее представлены произведения западноевропейского искусства от древности до современности, русского искусства XVIII-XX веков, а также коллекция графики и скульптуры. Здесь можно увидеть работы таких великих художников, как Рембрандт, Ван Гог, Пикассо, Рубенс, Левитан, Кандинский, Шагал, а также многих других. </p>
            
        <p>Государственный музей изобразительных искусств им. Пушкина находится в нескольких зданиях, в том числе в домах на Волхонке, Крымском валу и в здании Арт-Центра на Крымском валу. Основной экспозицией музея является постоянная коллекция, включающая в себя множество шедевров и произведений искусства различных направлений и эпох. </p>
            
        <p>Государственный музей изобразительных искусств им. Пушкина не только является культурным центром Москвы, но и проводит множество выставок, концертов, лекций, кинопоказов и других мероприятий, позволяя посетителям окунуться в мир искусства и культуры. Музей привлекает как местных жителей, так и туристов, предоставляя возможность узнать об искусстве разных стран и эпох.</p>
            
        <p>Посещение Государственного музея изобразительных искусств имени А.С. Пушкина – это отличная возможность познакомиться с великими произведениями мирового и русского искусства, насладиться их красотой и глубиной, а также пополнить свои знания о различных художественных направлениях и стилях.</p>
    </div>
        <button class="btn" onclick="openPopup()">Купить билеты</button>
<div id="popup" class="popup">
  <span class="close" onclick="closePopup()">&times;</span>
  <h2>Музей искусств</h2>
  <form>
  <form action="function.php" method="post">
    <label for="data">Выберите дату и время:</label>
    <select id="data" name="data" required>
      <option value="2022-10-15T10:00">15 октября, 10:00</option>
      <option value="2022-10-16T15:30">16 октября, 15:30</option>
      <option value="2022-10-17T13:45">17 октября, 13:45</option>
    </select>
    <label for="tickets">Выберите количество билетов:</label>
    <input type="number" id="count" name="count" min="1" max="10" value="1">
    <p>Итого: <span id="money">999</span> рублей</p>
    <button type="submit">Купить</button>
  </form>
</div>
        <button class="btn" onclick="toggleBlocks()">Экскурсия</button>
        <div class="hidden fon">
            <div class="employee hidden" id="employee1">
                <img class="photo" src="dima.jpeg" alt="">
                <p>Имя: Димас</p>
                <p>Фамилия: Романюта</p>
                <p><div style="float: left">Рейтинг:</div><div style="color: green; float: left">9.9</div><div style="color: green; float: left">/10</div></p>
                <button class="ticket" onclick="buyTicket()">Купить билет</button>
            </div>
            <div class="employee hidden" id="employee2">
                <img class="photo" src="dima.jpeg" alt="">
                <p>Имя: Дмитрий</p>
                <p>Фамилия: Романюта</p>
                <p><div style="float: left">Рейтинг:</div><div style="color: yellow; float: left">5</div><div style="color: green; float: left">/10</div></p>
                <button class="ticket" onclick="buyTicket()">Купить билет</button>
            </div>
            <div class="employee hidden" id="employee3">
                <img class="photo" src="dima.jpeg" alt="">
                <p>Имя: Диман</p>
                <p>Фамилия: Романюта</p>
                <p><div style="float: left">Рейтинг:</div><div style="color: red; float: left">0.1</div><div style="color: green; float: left">/10</div></p>
                <button class="ticket" onclick="buyTicket()">Купить билет</button>
            </div>
        </div>
        <button class="btn" onclick=""><a href="">О музее</a></button>
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
            <img class="avatar" src="dima.jpeg">
        </div>
        <div class="details">
            <p><b>Романюта Дмитрий</b></p>
            <p>Посещение Государственного музея имени А.С. Пушкина </p>
            <p>стал для меня удивительным и впечатляющим опытом. </p>
            <p>Коллекция музея впечатлила меня своим разнообразием </p>
            <p>и красотой. Работы таких художников, как Левитан, Ван </p>
            <p>Гог, Кандинский, оставили на меня глубокое впечатление.</p>
            <p>Особенно запомнилась выставка русского искусства XVIII-</p>
            <p>XX веков. Я с удовольствием вернулся бы сюда снова и </p>
            <p>всем рекомендую посетить этот удивительный музей </p>
            <p>искусств.</p>
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

document.getElementById("count").addEventListener("input", function() {
  const price = 799; // Цена за один билет
  const tickets = parseInt(this.value);
  document.getElementById("money").textContent = price * tickets;
});

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
