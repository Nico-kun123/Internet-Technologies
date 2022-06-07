var images =
[
    { id: 1, name: "Pic1", link: "img/Ocean.jpeg" },
    { id: 2, name: "Pic2", link: "img/Sunset.jpeg" },
    { id: 3, name: "Pic3", link: "img/Mountains.jpeg" },
    { id: 4, name: "Pic4", link: "img/Night Sky.jpeg" },
    { id: 5, name: "Pic5", link: "img/Galaxy.jpeg" },
    { id: 6, name: "Pic6", link: "img/Cozy.jpeg" }
]

$( document ).ready(function()
{
    $.ajax
    ({ 
        url: "img/Gallery.json",
        dataType: "json",
        success: function(dat)
        { 
            var obj1 = dat.images[0];
            var obj2 = dat.images[1];
            var obj3 = dat.images[2];

            var url1 = obj1.file;
            var url2 = obj2.file;
            var url3 = obj3.file;

            var pics = [obj1, obj2, obj3];
            pics.forEach(element => console.log(element));
        
            $(".picture1").append('<img src="' + url1 + '" alt="Крутой кот" align="middle" title="Крутой кот"> </img>');
            $(".picture2").append('<img src="' + url2 + '" alt="Кот" align="middle" title="Кот" style="width: 500px" </img>');
            $(".picture3").append('<img src="' + url3 + '" alt="Зомби" align="middle" title="Зомби" style="width: 400px" </img>');
        } 
    });

});

// 1) Показ изображений с увеличением из уменьшенной копии
$(document).ready(function () {
    var start_width = 100;
    var start_height = 100;
  
    var new_width = 467;
    var new_height = 389;
  
    $(".zoom_gallery").hover(function () {
      $(this).css("height", new_height);
      $(this).css("width", new_width);
    },
      function () {
        $(this).css("height", start_height);
        $(this).css("width", start_width);
      });
});

// 2) Возможность просмотра одного из изображений с функцией перехода к следующему изображению
$(function () {
    
    buttonPrev = document.getElementById('prevImg');
    buttonNext = document.getElementById('nextimg');
    
    buttonNext.classList.add("selectblue");

    div1 = document.getElementById('alt_gallery');
  
    img1 = document.createElement('img');
    alt_gallery.appendChild(img1);
  
    img1.src = images[0].link;
  
    var counter = 0;

    buttonNext.onclick = function () {
        if (counter < 5)
        {
            counter++;
            console.log(counter);
            img1.src = images[counter].link;

            if(counter < 5)
                buttonNext.classList.add("selectblue");
                else this.classList.remove("selectblue");
            if (counter > 0)
                buttonPrev.classList.add("selectblue");
                else buttonPrev.classList.remove("selectblue");
        } else counter = 5;
    }
  
    buttonPrev.onclick = function () {
        if (counter > 0) {
            counter--;
            console.log(counter);
            img1.src = images[counter].link;

            if (counter < 5)
                buttonNext.classList.add("selectblue");
                else this.classList.remove("selectblue");
            if (counter > 0)
                buttonPrev.classList.add("selectblue");
                else buttonPrev.classList.remove("selectblue");
        } else counter = 0;
    }
});

// 3) Эффект прокрутки изображений с управлением типа slider
$(function () {
    div = document.getElementById('slider_gallery');
  
    img = document.createElement('img');
    slider_gallery.appendChild(img);
  
    img.src = images[0].link;

    $('#slider').slider(
      {
        value: 0,
        min: 0,
        max: 5,
        step: 1,
        slide: function (event, ui)
        {
          img.src = images[ui.value].link;
        }
      });
});

// 4) Меню типа "аккордион" (см. JQuery UI)
$(document).ready(function () {
    var acc = document.getElementsByClassName("accordion");
    var i;
  
    for (i = 0; i < acc.length; i++)
    {
      acc[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
        
        this.classList.add("selectblue");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block")
        {
          panel.style.display = "none";
          this.classList.remove("selectblue");
        } else
        {
          panel.style.display = "block";
        }
      });
    }
});

// 5) Выбор даты (datepicker)
$(function ()
{
    $("#datepicker").datepicker();    
});

// 6) Статус загрузки изображений (Progressbar)
  function move() {
    var elem = document.getElementById("myBar");
    var imgBar = document.getElementById("imgBar");
    var width = 0;
    var id = setInterval(frame, 10);

    function frame()
    {  
      if (width == 100)
        imgBar.src = "img/majima.jpeg";
        else {
            width++;
            elem.style.width = width + '%';
        }
    }
};
  
// 7) Переключение по категориям изображений (Tabs)
function openDesc(evt, foodName)
{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    document.getElementById(foodName).style.display = "block";
    evt.currentTarget.className += "active";
};
  
// 8) Смена классов изображений по нажатию кнопки (toggleClass)
function myFunction()
{
    $(document).ready(function()
    {
        var element = document.getElementById("myIMG");
        var but = document.getElementById("but");

        $(element).toggleClass("myIMG_Class"); 
        $(this).classList.add("selectblue"); 
    }); 
};

// Задание по варианту (вариант №7, эффект анимации: fold)
function variant1()
{
  var exp = document.getElementById("toggle");

  $(exp).slideUp( "slow", function()
  {
    $(this).remove();
  });

  // $(exp).hide('explode', { pieces: 25 }, 1000, function()
  // {
  //   $(this).remove;
  // });
};