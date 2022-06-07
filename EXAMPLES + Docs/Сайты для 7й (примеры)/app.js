// подключение express
const express = require("express");
const bodyParser = require("body-parser");
var fs = require('fs');
const http = require("http");

// Модуль
const os = require("os");
var module = require('./module');


// получим имя текущего пользователя
let userName = os.userInfo().username;

console.log(`Дата запроса: ${module.date}`);
console.log(module.getMessage(userName));

//----------------------------------------------------------------------

// создаем объект приложения
const app = express();
const urlencodedParser = bodyParser.urlencoded({ extended: false });

app.set("view engine", "pug");

// Авторизация
app.get("/", urlencodedParser, function (request, response) {
    response.sendFile(__dirname + "/login.html");
});

app.post("/login", urlencodedParser, function (request, response) {
    if (!request.body) return response.sendStatus(400);
    //console.log(request.body);
    //response.send(`${request.body.username} - ${request.body.password}`);
    var username = request.body.username;
    var password = request.body.password;
    console.log('Login - ' + username);
    console.log('Password - ' + password);

    var found = false;
    fs.readFile("pass.json", function (err, file) {
        var data = JSON.parse(file);

        if (data.username == username && data.password == password) {
            console.log("Success.");
            logged = true;
            response.sendFile(__dirname + "/index.html");
            found = true;
            return;
        }

        if (found == false) {
            console.log("Failure.");
            response.sendFile(__dirname + "/login.html");
        }
    });
});

app.get("/", function (request, response) {
    response.send("Главная страница");
});

//----------------------------------------------------------------------

fs.readFile("places.json", function (err, file) {
    var places = JSON.parse(file);
    app.use("/place0", function (request, response) {
        response.render("example", {
            title: places[0].title,
            emails: places[0].emails,
            phone: places[0].phone
        });
    });

    app.use("/place1", function (request, response) {
        response.render("example", {
            title: places[1].title,
            emails: places[1].emails,
            phone: places[1].phone
        });
    });

    app.use("/place2", function (request, response) {
        response.render("example", {
            title: places[2].title,
            emails: places[2].emails,
            phone: places[2].phone
        });
    });

    app.use("/place3", function (request, response) {
        response.render("example", {
            title: places[3].title,
            emails: places[3].emails,
            phone: places[3].phone
        });
    });

    app.use("/place4", function (request, response) {
        response.render("example", {
            title: places[4].title,
            emails: places[4].emails,
            phone: places[4].phone
        });
    });
});
// начинаем прослушивать подключения на 3000 порту
console.log("Server is running at http://localhost:8000/")
app.listen(8000);