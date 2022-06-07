var http = require('http');
var url = require('url');
var fs = require('fs');
var qs = require('querystring');

var static = require('node-static');

var logged = false;

app_login(request, response);

function app_login(request, response)
{
	console.log("Logging in...");

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
		console.log(username);
		var password = POST.password;
		console.log(password);
		check(username, password, response);
	})
};

function check(login, pass, response)
{
	console.log('Login - ' + login + ", Password - " + pass);

	var found = false;
	fs.readFile("Users.json", function (err, file)
	{
		var data = JSON.parse(file);

		if (data.login == login && data.password == pass)
		{
			console.log("Success.");
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
			console.log("Failure.");
			response.writeHead(200, { "Content-Type": "text/html" });
			fs.readFile("login.html", function (err, data)
			{
				response.end(data);
			});
		}
	});
};
