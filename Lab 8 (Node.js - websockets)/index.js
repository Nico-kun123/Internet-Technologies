
const express = require('express');
const app = express();
const http = require('http').Server(app);
const io = require('socket.io')(http);
//const port = process.env.PORT || 3000;

app.use(express.static(__dirname + '/public'));

function onConnection(socket) {
  socket.on('drawing', (data) => socket.broadcast.emit('drawing', data));
}

io.on('connection', onConnection);

// Ip надо менять...
var serverUrl = "192.168.4.245";

http.listen(80, serverUrl);
console.log('Server running at ' + serverUrl);