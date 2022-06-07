function previewImage(path){
	$('<img src="'+ path +'">').load(function() {
		$("#preview").empty();
  		$(this).width("100%").height("500px").appendTo('#preview');
	});
}

var cur_image = 0;

var my_images = ["image1.jpg","image2.jpg","image3.jpg","image4.jpg"];

$(document).ready(function(){
    $("#preview_next").click(function(){
    	if (cur_image<(my_images.length-1)){
        	cur_image++;
        	previewImage(my_images[cur_image]);
    	}
    });
    $("#preview_prev").click(function(){
    	if (cur_image>0){
        	cur_image--;
        	previewImage(my_images[cur_image]);
        }
    }); 

    previewImage(my_images[cur_image]);
});