var http = require('http');
var url = require('url');
var fs = require('fs');
var qs = require('querystring');

var static = require('node-static');

var logged = false;

function out_page(type, request, response) {
	switch (type) {
		case 'pic':
			console.log("Response to 'pic'");
			response.writeHeader(200, { "Content-Type": "text/html" });
			fs.readFile('gallery.html', function (err, html) {
				response.end(html);
			});
			break;
		case 'json':
			console.log("Response to 'json'");
			response.writeHead(200, { "Content-Type": "application/json" });
			fs.readFile("data/data.json", function (err, data) {
				response.end(data);
			});
			break;
		case 'text':
			console.log("Response to 'text'");
			response.writeHead(200, { "Content-Type": "text/plain" });
			fs.readFile("data/text.txt", function (err, data) {
				response.end(data);
			});
			break;
		case 'index':
			console.log("Response to 'index'");
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("index.html", function (err, data) {
				response.end(data);
			});
			break;
		case 'login':
			if (request.method == 'POST')
				app_login(request, response);
			else {
				console.log("Response to 'login'");
				response.writeHead(200, { "Content-Type": "text/html" });
				fs.readFile("login.html", function (err, data) {
					response.end(data);
				});
			}
			break;
	}
}

function app_login(request, response) {
	console.log("Logging in...");

	var POST = {};
	request.on('data', function (data) {
		data = data.toString();
		data = data.split('&');
		for (var i = 0; i < data.length; i++) {
			var _data = data[i].split("=");
			POST[_data[0]] = _data[1];
		}

		var username = POST.username;
		console.log(username);
		var password = POST.password;
		console.log(password);
		check(username, password, response);
	})


};

function check(login, pass, response) {
	console.log('Login - ' + login + ", Password - " + pass);

	var found = false;
	fs.readFile("public/data/pass.json", function (err, file) {
		var data = JSON.parse(file);

		if (data.login == login && data.password == pass) {
			console.log("Success.");
			logged = true;
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("index.html", function (err, data) {
				response.end(data);
			});
			found = true;
			return;
		}

		if (found == false) {
			console.log("Failure.");
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("login.html", function (err, data) {
				response.end(data);
			});
		}
	});
}

var fileServer = new static.Server('./public');

var server = http.createServer(function (request, response) {
	uo = url.parse(request.url);
	if (logged == false)
		out_page('login', request, response);
	else
		switch (uo.pathname) {
			case "/pic": out_page('pic', request, response); break;
			case "/json": out_page('json', request, response); break;
			case "/text": out_page('text', request, response); break;
			case "/login":
			case "/login.html":
			case "/index":
			case "/index.html": out_page('index', request, response); break;
			default: fileServer.serve(request, response);
		}
}).listen(8000);

console.log("Server is running at http://127.0.0.1:8000/");
