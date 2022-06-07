const fs = require("fs");           // Подключение файловой системы
const http = require("http");

const express = require("express");             // Подключение Express
const Mustache = require("mustache");    // Подключение Mustache-Express
const mustacheExpess = require("mustache-express");

//var module = require('./module');

// Создаем объект приложения
const app = express();
const bodyParser = require("body-parser"); // !!!
const urlencodedParser = bodyParser.urlencoded({ extended: false });
// const jsonParser = express.json(); // Создаём парсер

const port = 5000;      // Порт

app.engine('mustache', mustacheExpess());
app.set("view engine", "mustache");

app.set('views', __dirname + '/views');

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// app.post("/", urlencodedParser, function (request, response) {
//     // console.log(request.body);
//     // if(!request.body)
//     //     return response.sendStatus(400);
//     fs.readFile("package.json", function (err, file) {
//         var data = JSON.parse(file);
//         console.log("Hello From Json! :3");
//         //console.log(data);
//         return data;
//     });

//     // response.json(request.body); // Отправляем пришедший ответ обратно
// });
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Определяем обработчик для маршрута "/"
app.get("/", function(request, response){ 
    response.send("<h1>Привет Express!</h1>");  // Отправляем ответ
    // response.sendFile(__dirname + "/index.html");
});

app.use("/about", function(request, response){
    response.render("about", {
        title: "О Работе",
        info: "Разработать сервер http с использованием модулей express.js и шаблонизатора (рекомендуется mustache.js)."
    });     // Рендеринг представления "about.html"
});

app.use("/contact", function(request, response){
    response.render("contact", {
        title: "Мои Контакты",
        email: "nicolay.kudryavtsev@gmail.com",
        phone: "+7 983 501 48 17"
    });    // Рендеринг представления "contact.html"
});

fs.readFile("package.json", urlencodedParser, function (err, file) {
    var data = JSON.parse(file);
    console.log("\nHello From Json! :3");
    console.log(`Go to page "info" to see the version of Express!`);
    app.use("/info", function(request, response){
    response.render("info", {
        title: "Описание Задания",
        info: "- Создать свой модуль при помощи npm init \n- Задать зависимости для подключения express и mustache (в файле package.json) \n - сайт должен содержать минимум 5 страничек \n - каждая из которых формируется по шаблону\n - данные для заполнения шаблонов загружать в формате JSON\n\n Используя библиотеку Body-parser реализовать обработку данных с HTML-формы.\n - Создать форму с набором стандартных полей (input, select, checkbox);\n - Отправить данные методом POST \n\n - Отобразить полученные данные в виде списка: 'Название поля' - 'Значение'.",
        dependency: data.dependencies.express,
    });    // Рендеринг представления "info.html"

    return data;
    });
});

app.use("/link", function(request, response){
    response.render("link", {
        title: "Ссылка На Задание",
        info: "тута",
    });    // Рендеринг представления "link.html"
});

// Прослушиваем подключения на порту port
app.listen(port, () => {
    console.log(`Server is running on port: ${port}`);
});