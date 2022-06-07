var canvas1, canvas2, canvas3, canvas4,
	ctx1, ctx2, ctx3, ctx4;
var time = new Date();

canvas1 = document.getElementById("canvas1");
canvas2 = document.getElementById("canvas2");
canvas3 = document.getElementById("canvas3");
canvas4 = document.getElementById("canvas4");

ctx1 = canvas1.getContext("2d");
ctx2 = canvas2.getContext("2d");
ctx3 = canvas3.getContext("2d");
ctx4 = canvas3.getContext("2d");

let Shapes = [
    { name: "Circle",  startx: 50,  starty: 50,  dist1: 10, dist2: null},
    { name: "Square",  startx: 150, starty: 50,  dist1: 25, dist2: null},
    { name: "Ellipse", startx: 200, starty: 200, dist1: 30, dist2: 40}
];

var time = new Date();

ctx1.beginPath();
ctx1.arc(Shapes[0].startx, Shapes[0].starty, Shapes[0].dist1, 0, 2 * Math.PI);
ctx1.fillStyle = "green";
ctx1.fill();
ctx1.stroke();

ctx2.fillStyle = "red";
ctx2.fillRect(Shapes[1].startx, Shapes[1].starty, Shapes[1].dist1, Shapes[1].dist1);

ctx3.fillStyle = "blue";
ctx3.beginPath();
ctx3.ellipse(Shapes[2].startx, Shapes[2].starty, Shapes[2].dist1, Shapes[2].dist2, Math.PI * .25, 0, 2 * Math.PI);
ctx3.fill();

ctx4.beginPath();
ctx4.moveTo(20, 20);
ctx4.bezierCurveTo(20, 100, 200, 100, 200, 20);
ctx4.strokeStyle = "purple";
ctx4.stroke();

// Часть 2 // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

var squarePosition = 150;
var maxposition = 320;
var cellColors;
var nextColors;
var frame = 0;
var colorFactor = 0.0;

function drawFrame()
{
	requestAnimationFrame(drawFrame);

	// Очистить холст
	ctx2.clearRect(0, 0, canvas2.width, canvas2.height);

	// Вызываем метод beginPath(), чтобы убедиться,
	// что мы не рисуем часть уже нарисованного содержимого холста
	ctx2.beginPath();
	
	ctx2.fillRect(squarePosition, Shapes[1].starty, Shapes[1].dist1, Shapes[1].dist1);
	
	// Перемещаем квадрат влево, где он будет прорисован в следующем кадре
	squarePosition += 1;
	
	if (squarePosition > maxposition)
	{
		squarePosition = 150;
	}
}

drawFrame();

canvas3.addEventListener("mousedown", function(event) 
{
	var lastDownTarget = event.target;
	alert('Поздравляем, вы выйграли приз: несквик с пивом!');
}, false);