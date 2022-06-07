document.addEventListener("DOMContentLoaded", function(event) {
	console.log("DOM fully loaded and parsed");
	var canvas1 = document.createElement("canvas");
	canvas1.width = "500";
	canvas1.height = "500";
	document.body.appendChild(canvas1);
	var ctx = canvas1.getContext("2d");
	ctx.fillStyle = "#000000";
	ctx.fillRect(0,0,500,500);

	canvas1.addEventListener("mousemove",function(evt){
		//ctx.fillStyle = "#0000ff";
		//if (evt.buttons==1)
		//	ctx.fillRect(evt.clientX,evt.clientY,10,10);
		ctx.lineTo(evt.clientX,evt.clientY);
	}, true);

	canvas1.addEventListener("mousedown",function(evt){
		ctx.beginPath();
		ctx.moveTo(evt.clientX,evt.clientY);
	}, true);

	canvas1.addEventListener("mouseup",function(evt){
		ctx.lineTo(evt.clientX,evt.clientY);

		ctx.fillStyle = "#000000";
		ctx.fillRect(0,0,500,500);

		ctx.strokeStyle = "#00ff00";
		ctx.lineWidth = "3";
		ctx.stroke();
	}, true);

});