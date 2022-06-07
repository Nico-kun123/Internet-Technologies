var http = require('http');
var url = require('url');
var fs = require('fs');

var logged = false;

function out_page(type, request, response)
{
	if (request.method == 'POST')
		app_login(request, response);
		else
		{
			console.log("Response to 'login'");
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("login.html", function (err, data)
			{
				response.end(data);
			});
		}
}

function app_login(request, response)
{
	console.log("\nLogging in...");

	var POST = {};
	request.on('data', function (data) {
		data = data.toString();
		data = data.split('&');
		for (var i = 0; i < data.length; i++)
		{
			var _data = data[i].split("=");
			POST[_data[0]] = _data[1];
		}

		var username = POST.username;
		// console.log(username);
		var password = POST.password;
		// console.log(password);
		check(username, password, response);
	})
};

function check(login, password, response)
{
	console.log('Login - ' + login + ", Password - " + password);

	var found = false;
	var Usersfile = fs.readFileSync("./Users.json", 'utf8');
	var data = JSON.parse(Usersfile);

	// var data = require('./Users.json');

		if (data.name[0] == login && data.pass[0] == password)
		{
			console.log("Success!");
			logged = true;
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("index.html", function (err, data)
			{
				response.end(data);
			});
			found = true;
			return;
		}
		
		if (found == false)
		{
			console.log("Failure!");
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("login.html", function (err, data)
			{
				response.end(data);
			});
		}
	
};

var server = http.createServer(function (request, response) {
	uo = url.parse(request.url);
	if (logged == false)
		out_page('login', request, response);
	else
		out_page('index', request, response);
}).listen(8000);

console.log("Server is running at http://127.0.0.1:8000/");