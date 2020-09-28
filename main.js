// скрипт для отримання даних про всі товари
window.addEventListener("load",function() {
    var request = new XMLHttpRequest();
    request.open('GET','form.php',true);
    request.addEventListener('readystatechange', function() {
        if ((request.readyState==4) && (request.status==200)) {
            var welcome = document.getElementById('goodsItems');
            welcome.innerHTML = request.responseText;
        }
    });
    request.send();
});

// скрипт для отримання даних про один товар, якщо він є
document.addEventListener("DOMContentLoaded",function() {
    //получить кнопку
    var mybutton = document.getElementById('sendNameOfProduct');
    //подписаться на событие click по кнопке и назначить обработчик, который будет выполнять действия, указанные в безымянной функции
    mybutton.addEventListener("click", function(){
        //1. Сбор данных, необходимых для выполнения запроса на сервере
        var name = document.getElementById('nameOfProduct').value;
        //Подготовка данных для отправки на сервер
        //т.е. кодирование с помощью метода encodeURIComponent
        name = 'nameOfProduct=' + encodeURIComponent(name);
        // 2. Создание переменной request
        var request = new XMLHttpRequest();
        // 3. Настройка запроса
        request.open('POST','getNameOfGood.php',true);
        // 4. Подписка на событие onreadystatechange и обработка его с помощью анонимной функции
        request.addEventListener('readystatechange', function() {
            //если запрос пришёл и статус запроса 200 (OK)
            if ((request.readyState==4) && (request.status==200)) {
                // например, выведем объект XHR в консоль браузера
                console.log(request);
                // и ответ (текст), пришедший с сервера в окне alert
                console.log(request.responseText);
                // получить элемент c id = welcome
                var welcome = document.getElementById('response');
                // заменить содержимое элемента ответом, пришедшим с сервера
                welcome.innerHTML = request.responseText;
            }
        });
        // Устанавливаем заголовок Content-Type(обязательно для метода POST). Он предназначен для указания кодировки, с помощью которой зашифрован запрос. Это необходимо для того, чтобы сервер знал как его раскодировать.
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        // 5. Отправка запроса на сервер. В качестве параметра указываем данные, которые необходимо передать (необходимо для POST)
        request.send(name);
    });
});

// скрипт для занесення даних про замовлення
document.addEventListener("DOMContentLoaded",function() {
    //получить кнопку
    var mybutton = document.getElementById('sendDataForOrder');
    //подписаться на событие click по кнопке и назначить обработчик, который будет выполнять действия, указанные в безымянной функции
    mybutton.addEventListener("click", function(){
        //1. Сбор данных, необходимых для выполнения запроса на сервере
        var nameOfUser = document.getElementById('nameOfUser').value;
        var telephone = document.getElementById('phoneOfUser').value;
        var nameOfGood = document.getElementById('nameOfGoods').value;
        var amount = document.getElementById('amount').value;
        //Подготовка данных для отправки на сервер
        //т.е. кодирование с помощью метода encodeURIComponent
        nameOfUser = 'nameOfUser=' + encodeURIComponent(nameOfUser);
        telephone = 'phoneOfUser=' + encodeURIComponent(telephone);
        nameOfGood = 'nameOfGoods=' + encodeURIComponent(nameOfGood);
        amount = 'amount=' + encodeURIComponent(amount);
        // 2. Создание переменной request
        var request = new XMLHttpRequest();
        // 3. Настройка запроса
        request.open('POST','UserData.php',true);
        // 4. Подписка на событие onreadystatechange и обработка его с помощью анонимной функции
        request.addEventListener('readystatechange', function() {
            //если запрос пришёл и статус запроса 200 (OK)
            if ((request.readyState==4) && (request.status==200)) {
                // например, выведем объект XHR в консоль браузера
                console.log(request);
                // и ответ (текст), пришедший с сервера в окне alert
                console.log(request.responseText);
                var welcome = document.getElementById('response');
                // заменить содержимое элемента ответом, пришедшим с сервера
                welcome.innerHTML = request.responseText;
            }
        });
        // Устанавливаем заголовок Content-Type(обязательно для метода POST). Он предназначен для указания кодировки, с помощью которой зашифрован запрос. Это необходимо для того, чтобы сервер знал как его раскодировать.
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        // 5. Отправка запроса на сервер. В качестве параметра указываем данные, которые необходимо передать (необходимо для POST)
        request.send(nameOfUser + '&' + telephone + '&' +nameOfGood + '&' + amount);
    });
});

// скрипт для отримання даних про замовлення користувача
document.addEventListener("DOMContentLoaded",function() {
    //получить кнопку
    var mybutton = document.getElementById('getDataForOrder');
    //подписаться на событие click по кнопке и назначить обработчик, который будет выполнять действия, указанные в безымянной функции
    mybutton.addEventListener("click", function(){
        //1. Сбор данных, необходимых для выполнения запроса на сервере
        var name = document.getElementById('nameOfUserForAnswer').value;
        //Подготовка данных для отправки на сервер
        //т.е. кодирование с помощью метода encodeURIComponent
        name = 'nameOfUserForAnswer=' + encodeURIComponent(name);
        // 2. Создание переменной request
        var request = new XMLHttpRequest();
        // 3. Настройка запроса
        request.open('POST','UserData.php',true);
        // 4. Подписка на событие onreadystatechange и обработка его с помощью анонимной функции
        request.addEventListener('readystatechange', function() {
            //если запрос пришёл и статус запроса 200 (OK)
            if ((request.readyState==4) && (request.status==200)) {
                // например, выведем объект XHR в консоль браузера
                console.log(request);
                // и ответ (текст), пришедший с сервера в окне alert
                console.log(request.responseText);
                // получить элемент c id = welcome
                var welcome = document.getElementById('response1');
                // заменить содержимое элемента ответом, пришедшим с сервера
                welcome.innerHTML = request.responseText;
            }
        });
        // Устанавливаем заголовок Content-Type(обязательно для метода POST). Он предназначен для указания кодировки, с помощью которой зашифрован запрос. Это необходимо для того, чтобы сервер знал как его раскодировать.
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        // 5. Отправка запроса на сервер. В качестве параметра указываем данные, которые необходимо передать (необходимо для POST)
        request.send(name);
    });
});