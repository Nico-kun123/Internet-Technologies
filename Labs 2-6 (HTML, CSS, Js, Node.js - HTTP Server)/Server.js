const http = require("http");
const fs = require("fs");
  
  http.createServer(function(request, response){
    response.writeHead(200, {
      "Content-type": "text/html"
    });

    const filePath = request.url.substr(1);
    
    if (filePath === "login.html")
    {
      console.log(`Текущая директория: ${request.url}`);
    
      fs.readFile(filePath, function(error, data){

        if(error){
            response.statusCode = 404;
            response.end("Resourse not found!");
        } else {
            var body = "";
            request.on('data', function (chunk)
            {
              body += chunk;
            });
            request.on('end', function ()
            {
              console.log('POSTed: ' + body);
              response.writeHead(200);
              response.end(data);
            });
           
          }
      });

    } else {
      console.log(`Текущая директория: ${request.url}`);

      fs.readFile(filePath, function(error, data){

        if(error){
            response.statusCode = 404;
            response.end("Resourse not found!");
        } else {
            var body = "";
            request.on('data', function (chunk)
            {
              body += chunk;
            });
            request.on('end', function ()
            {
              console.log('POSTed: ' + body);
              response.writeHead(200);
              response.end(data);
            });
           
          }
      });
    }    
   
}).listen(8000, function(){
    console.log("Server started at 8000");
});