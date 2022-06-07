<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Данный справочник включает все существующие CSS свойства с описанием и примерами использования." />
<title>CSS Справочник</title>
<!-- Syntax Highlighter -->
<script type="text/javascript" src="https://me.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=FQ3if4bIaacHSUnndncsNtCPUDoL0k9U4n5PoGX446lIQqjMrRke7IjvRatiYtG_5wWNC4SHd7XfuceMiWqo7A" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="https://me.kis.v2.scr.kaspersky-labs.com/E3E8934C-235A-4B0E-825A-35A08381A191/abn/main.css?attr=aHR0cHM6Ly93d3cud2lzZG9td2ViLnJ1L0NTU2QvaW5kZXgucGhw"/><script type="text/javascript" src="http://www.wisdomweb.ru/gcp/prettify.js"></script>
<!-- /Syntax Highlighter -->
<link rel="icon" type="image/png" href="http://www.wisdomweb.ru/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="http://www.wisdomweb.ru/stylenew.css" />
<!--[if IE]> <link rel="stylesheet" type="text/css" href="http://www.wisdomweb.ru/iestylenew.css?4" /> <![endif]-->


<!-- Soc. network button -->
<script src="http://vkontakte.ru/js/api/openapi.js" type="text/javascript" charset="windows-1251"></script>
<script type="text/javascript">
VK.init({ apiId: 2003319, onlyWidgets: true });
</script>
<!-- /Soc. network button -->




<meta property="og:image" content="http://www.wisdomweb.ru/images/logo14.gif" /> 
</head>
<body onload="addStripe()">
<img src="http://www.wisdomweb.ru/editor/images/ajax-loader.gif" style="display:none" alt="AJAX загрузка" />
<header>
<div class="allneed">
<ul id='topmenu'>
<li><a href="http://www.wisdomweb.ru"><img id="home" onmouseover="document.getElementById('home').src='http://www.wisdomweb.ru/images/homeact.png'" onmouseout="document.getElementById('home').src='http://www.wisdomweb.ru/images/homepassive.png'" src="http://www.wisdomweb.ru/images/homepassive.png" alt="home" height="28" width="33" /></a></li>
<li><a href="http://www.wisdomweb.ru/HTML/html-first.php" style="font-weight:normal !important">HTML</a></li>
<li><a href="http://www.wisdomweb.ru/CSS/css-first.php" style="font-weight:normal !important">CSS</a></li>
<li><a href="http://www.wisdomweb.ru/JS/javascript-first.php" style="font-weight:normal !important">JavaScript</a></li>
<li><a href="http://www.wisdomweb.ru/JQ/jquery-first.php" style="font-weight:normal !important">jQuery</a></li>
<li><a href="http://www.wisdomweb.ru/HDOM/hdom-first.php" style="font-weight:normal !important">HDOM</a></li>
<li><a href="http://www.wisdomweb.ru/AJAX/ajax-first.php" style="font-weight:normal !important">AJAX</a></li>
<li><span id="searchwrap">
<div id='brand-image'>
<img id='brand-logo' src="https://www.google.com/uds/css/small-logo.png">
<div id='brand-text'>пользовательский поиск</div>
</div>
<form action="http://www.wisdomweb.ru/search.php" id="cse-search-box">
<input type="hidden" name="cx" value="partner-pub-4661695310856012:1841952470" />
<input type="hidden" name="ie" value="UTF-8" />
<input id='query' type="text" name="q" size="25" style="color:grey;padding-left:3px;" onclick="this.value='';this.style.color='black';" value="Поиск wisdomweb.ru" />
<input id='butquery' type="submit" name="sa" value="&#x041f;&#x043e;&#x0438;&#x0441;&#x043a;" />
</form>
</span></li>
</ul>
<img src="http://www.wisdomweb.ru/images/homeact.png" style="display:none" alt='home' />


</div>
</header>
<div class="bodysiteall"> 
<div class="body">
<nav>
<div class="bodyleft">
<p><b>СSS</b> Учебник </p>
<ul>
<li><a href="http://www.wisdomweb.ru/CSS/css-first.php"> CSS Учебник </a></li>
<li><a href="http://www.wisdomweb.ru/CSS3/index.php"> CSS3 Учебник </a></li>
</ul>

<p><b>CSS</b> Справочник</p>
<ul>
<li><a href="http://www.wisdomweb.ru/CSSd/index.php"> CSS Справочник </a></li>
<li><a href="http://www.wisdomweb.ru/CSSd/selectors.php"> CSS Селекторы </a></li>
</ul>

<script type="text/javascript">
function anishow() {
   if (document.getElementById("animationbox").style.display=="none") {
      document.getElementById("animation").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("animationbox").style.display="block";
   }
   else {document.getElementById("animationbox").style.display="none";
         document.getElementById("animation").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function backshow() {
   if (document.getElementById("backgroundbox").style.display=="none") {
      document.getElementById("background").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("backgroundbox").style.display="block";
   }
   else {document.getElementById("backgroundbox").style.display="none";
         document.getElementById("background").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function bordershow() {
   if (document.getElementById("borderbox").style.display=="none") {
      document.getElementById("border").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("borderbox").style.display="block";
   }
   else {document.getElementById("borderbox").style.display="none";
         document.getElementById("border").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function columnshow() {
   if (document.getElementById("columnbox").style.display=="none") {
      document.getElementById("column").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("columnbox").style.display="block";
   }
   else {document.getElementById("columnbox").style.display="none";
         document.getElementById("column").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function fontshow() {
   if (document.getElementById("fontbox").style.display=="none") {
      document.getElementById("font").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("fontbox").style.display="block";
   }
   else {document.getElementById("fontbox").style.display="none";
         document.getElementById("font").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function marginshow() {
   if (document.getElementById("marginbox").style.display=="none") {
      document.getElementById("margin").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("marginbox").style.display="block";
   }
   else {document.getElementById("marginbox").style.display="none";
         document.getElementById("margin").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function listshow() {
   if (document.getElementById("listbox").style.display=="none") {
      document.getElementById("list").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("listbox").style.display="block";
   }
   else {document.getElementById("listbox").style.display="none";
         document.getElementById("list").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function outlineshow() {
   if (document.getElementById("outlinebox").style.display=="none") {
      document.getElementById("outline").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("outlinebox").style.display="block";
   }
   else {document.getElementById("outlinebox").style.display="none";
         document.getElementById("outline").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function paddingshow() {
   if (document.getElementById("paddingbox").style.display=="none") {
      document.getElementById("padding").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("paddingbox").style.display="block";
   }
   else {document.getElementById("paddingbox").style.display="none";
         document.getElementById("padding").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function textshow() {
   if (document.getElementById("textbox").style.display=="none") {
      document.getElementById("text").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("textbox").style.display="block";
   }
   else {document.getElementById("textbox").style.display="none";
         document.getElementById("text").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function boxshow() {
   if (document.getElementById("boxbox").style.display=="none") {
      document.getElementById("box").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("boxbox").style.display="block";
   }
   else {document.getElementById("boxbox").style.display="none";
         document.getElementById("box").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
function transshow() {
   if (document.getElementById("transbox").style.display=="none") {
      document.getElementById("trans").style.backgroundImage="url('http://www.wisdomweb.ru/images/minus.gif')";
      document.getElementById("transbox").style.display="block";
   }
   else {document.getElementById("transbox").style.display="none";
         document.getElementById("trans").style.backgroundImage="url('http://www.wisdomweb.ru/images/plus.gif')"; 
        } 
}
</script>



<p id="lmtitle"><b>CSS</b> Свойства</p>
<div style="font-family:Arial,sans-serif;font-size:0.95em;line-height:18px;">
<div class="lmelement"><a href="keyframes.php">@keyframes</a></div>
<div id='animation' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="anishow();">animation</div>
<span id="animationbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="animation.php">animation</a></div>
<div><a href="animation-name.php">animation-name</a></div>
<div><a href="animation-duration.php">animation-duration</a></div>
<div><a href="animation-timing-function.php">animation-timing-function</a></div>
<div><a href="animation-delay.php">animation-delay</a></div>
<div><a href="animation-iteration-count.php">animation-iteration-count</a></div>
<div><a href="animation-direction.php">animation-direction</a></div>
<div><a href="animation-play-state.php">animation-play-state</a></div>
</span>
<div class="lmelement"><a href="appearance.php">appearance</a></div>
<div id='background' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="backshow();">background</div>
<span id="backgroundbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="background.php">background</a></div>
<div><a href="background-color.php">background-color</a></div>
<div><a href="background-repeat.php">background-repeat</a></div>
<div><a href="background-image.php">background-image</a></div>
<div><a href="background-size.php">background-size</a></div>
<div><a href="background-position.php">background-position</a></div>
<div><a href="background-attachment.php">background-attachment</a></div>
<div><a href="background-clip.php">background-clip</a></div>
<div><a href="background-origin.php">background-origin</a></div>
</span>
<div id='border' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="bordershow();">border</div>
<span id="borderbox" class="lmelement" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="border.php">border</a></div>
<div><a href="border-color.php">border-color</a></div>
<div><a href="border-style.php">border-style</a></div>
<div><a href="border-width.php">border-width</a></div>
<div><a href="border-top.php">border-top</a></div>
<div><a href="border-top-color.php">border-top-color</a></div>
<div><a href="border-top-style.php">border-top-style</a></div>
<div><a href="border-top-width.php">border-top-width</a></div>
<div><a href="border-right.php">border-rigth</a></div>
<div><a href="border-right-color.php">border-rigth-color</a></div>
<div><a href="border-right-style.php">border-right-style</a></div>
<div><a href="border-right-width.php">border-rigth-width</a></div>
<div><a href="border-bottom.php">border-bottom</a></div>
<div><a href="border-bottom-color.php">border-bottom-color</a></div>
<div><a href="border-bottom-style.php">border-bottom-style</a></div>
<div><a href="border-bottom-width.php">border-bottom-width</a></div>
<div><a href="border-left.php">border-left</a></div>
<div><a href="border-left-color.php">border-left-color</a></div>
<div><a href="border-left-style.php">border-left-style</a></div>
<div><a href="border-left-width.php">border-left-width</a></div>
<div><a href="border-radius.php">border-radius</a></div>
<div><a href="border-collapse.php">border-collapse</a></div>
<div><a href="border-image.php">border-image</a></div>
<div><a href="border-spacing.php">border-spacing</a></div>
<div><a href="border-bottom-left-radius.php">border-bottom-left-radius</a></div>
<div><a href="border-bottom-right-radius.php">border-bottom-right-radius</a></div>
<div><a href="border-top-left-radius.php">border-top-left-radius</a></div>
<div><a href="border-top-right-radius.php">border-top-right-radius</a></div>
</span>
<div class="lmelement"><a href="bottom.php">bottom</a></div>

<div id='box' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="boxshow();">box</div>
<span id="boxbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="box-align.php">box-align</a></div>
<div><a href="box-direction.php">box-direction</a></div>
<div><a href="box-flex.php">box-flex</a></div>
<div><a href="box-ordinal-group.php">box-ordinal-group</a></div>
<div><a href="box-orient.php">box-orient</a></div>
<div><a href="box-pack.php">box-pack</a></div>
</span>
<div class="lmelement"><a href="color.php">color</a></div>
<div class="lmelement"><a href="clear.php">clear</a></div>
<div class="lmelement"><a href="cursor.php">cursor</a></div>
<div class="lmelement"><a href="clip.php">clip</a></div>
<div class="lmelement"><a href="content.php">content</a></div>
<div id='column' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="columnshow();">column</div>
<span id="columnbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="column-count.php">column-count</a></div>
<div><a href="column-gap.php">column-gap</a></div>
<div><a href="column-rule.php">column-rule</a></div>
<div><a href="column-rule-color.php">column-rule-color</a></div>
<div><a href="column-rule-style.php">column-rule-style</a></div>
<div><a href="column-rule-width.php">column-rule-width</a></div>
<div><a href="column-span.php">column-span</a></div>
<div><a href="column-width.php">column-width</a></div>
</span>
<div class="lmelement"><a href="caption-side.php">caption-side</a></div>
<div class="lmelement"><a href="display.php">display</a></div>
<div class="lmelement"><a href="direction.php">direction</a></div>
<div class="lmelement"><a href="empty-cells.php">empty-cells</a></div>
<div id='font' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="fontshow();">font</div>
<span id="fontbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="font.php">font</a></div>
<div><a href="font-family.php">font-family</a></div>
<div><a href="font-size.php">font-size</a></div>
<div><a href="font-face.php">@font-face</a></div>
<div><a href="font-style.php">font-style</a></div>
<div><a href="font-variant.php">font-variant</a></div>
<div><a href="font-weight.php">font-weight</a></div>
</span>
<div class="lmelement"><a href="float.php">float</a></div>
<div class="lmelement"><a href="height.php">height</a></div>
<div class="lmelement"><a href="letter-spacing.php">letter-spacing</a></div>
<div class="lmelement"><a href="line-height.php">line-height</a></div>
<div class="lmelement"><a href="left.php">left</a></div>
<div id='list' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="listshow();">list-style</div>
<span id="listbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="list-style.php">list-style</a></div>
<div><a href="list-style-image.php">list-style-image</a></div>
<div><a href="list-style-position.php">list-style-position</a></div>
<div><a href="list-style-type.php">list-style-type</a></div>
</span>
<div id='margin' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="marginshow();">margin</div>
<span id="marginbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="margin.php">margin</a></div>
<div><a href="margin-bottom.php">margin-bottom</a></div>
<div><a href="margin-left.php">margin-left</a></div>
<div><a href="margin-right.php">margin-right</a></div>
<div><a href="margin-top.php">margin-top</a></div>
</span>
<div class="lmelement"><a href="max-height.php">max-height</a></div>
<div class="lmelement"><a href="max-width.php">max-width</a></div>
<div class="lmelement"><a href="min-height.php">min-height</a></div>
<div class="lmelement"><a href="min-width.php">min-width</a></div>
<div class="lmelement"><a href="opacity.php">opacity</a></div>
<div id='outline' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="outlineshow();">outline</div>
<span id="outlinebox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="outline.php">outline</a></div>
<div><a href="outline-color.php">outline-color</a></div>
<div><a href="outline-style.php">outline-style</a></div>
<div><a href="outline-width.php">outline-width</a></div>
</span>
<div class="lmelement"><a href="overflow.php">overflow</a></div>
<div class="lmelement"><a href="overflowx.php">overflow-x</a></div>
<div class="lmelement"><a href="overflowy.php">overflow-y</a></div>
<div id='padding' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="paddingshow();">padding</div>
<span id="paddingbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="padding.php">padding</a></div>
<div><a href="padding-bottom.php">padding-bottom</a></div>
<div><a href="padding-left.php">padding-left</a></div>
<div><a href="padding-right.php">padding-right</a></div>
<div><a href="padding-top.php">padding-top</a></div>
</span>
<div class="lmelement"><a href="position.php">position</a></div>
<div class="lmelement"><a href="quotes.php">quotes</a></div>
<div class="lmelement"><a href="resize.php">resize</a></div>
<div class="lmelement"><a href="right.php">right</a></div>
<div id='text' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="textshow();">text</div>
<span id="textbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="text-align.php">text-align</a></div>
<div><a href="text-decoration.php">text-decoration</a></div>
<div><a href="text-shadow.php">text-shadow</a></div>
<div><a href="text-transform.php">text-transform</a></div>
<div><a href="text-indent.php">text-indent</a></div>
<div><a href="text-justify.php">text-justify</a></div>
<div><a href="text-overflow.php">text-overflow</a></div>
</span>
<div id='trans' class="lmelement" style="background-image:url('http://www.wisdomweb.ru/images/plus.gif');background-repeat:no-repeat;background-position:-1px;padding-left:10px;cursor:pointer;color:#025A64" onclick="transshow();">transition</div>
<span id="transbox" style="display:none;border-left:2px #A600A6 solid;margin-left:25px;padding-left:3px;">
<div><a href="transition.php">transition</a></div>
<div><a href="transition-property.php">transition-property</a></div>
<div><a href="transition-duration.php">transition-duration</a></div>
<div><a href="transition-timing-function.php">transition-timing-function</a></div>
<div><a href="transition-delay.php">transition-delay</a></div>
</span>

<div class="lmelement"><a href="transform.php">transform</a></div>
<div class="lmelement"><a href="transform-origin.php">transform-origin</a></div>
<div class="lmelement"><a href="vertical-align.php">vertical-align</a></div>
<div class="lmelement"><a href="visibility.php">visibility</a></div>
<div class="lmelement"><a href="width.php">width</a></div>
<div class="lmelement"><a href="word-spacing.php">word-spacing</a></div>
<div class="lmelement"><a href="word-wrap.php">word-wrap</a></div>
<div class="lmelement"><a href="white-space.php">white-space</a></div>
<div class="lmelement"><a href="z-index.php">z-index</a></div>
</div>
<hr style='opacity:0.2;margin-top:35px;margin-bottom:10px;' />

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "170", height: "285"}, 30910210);
</script>
<!-- /VK Widget -->

<img alt="Система Извещения об Ошибках wisdomweb.ru" id='erimg' src="http://www.wisdomweb.ru/erimg.gif" /></div>
</nav>
<div class="bodycentr">


<div class="pn">
<a class="prev" href="http://www.wisdomweb.ru">&laquo; На главную</a>
</div>
<br />
<p class="choose"> Щелкните на изображение, чтобы перейти к желаемой группе свойств.</p>
<!-- Soc. network button -->
<div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button",width:300,pageUrl:"http://www.wisdomweb.ru/CSSd/index.php"});
</script>
<a href="http://twitter.com/share?url=http://www.wisdomweb.ru/CSSd/index.php&text=CSS%20Справочник" class="twitter-share-button" rel="nofollow" data-count="horizontal" data-lang="ru">&#x0422;&#x0432;&#x0438;&#x0442;&#x043D;&#x0443;&#x0442;&#x044c;</a>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<fb:like send="false" href="http://www.wisdomweb.ru/CSSd/index.php" layout="button_count" width="100" show_faces="false" id='fblike' font="lucida grande"></fb:like>
<div id="gplusone">
<g:plusone size="medium" href="http://www.wisdomweb.ru/CSSd/index.php"></g:plusone>
</div>
<script type="text/javascript">
window.___gcfg = {lang: 'ru'};
(function() {
var po = document.createElement("script"); po.type = 'text/javascript'; po.async = true;
po.src = 'https://apis.google.com/js/plusone.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
<!-- /Soc. network button -->
<div id="ads1" style="margin-left:0px;margin-bottom:10px;margin-top:55px;">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4661695310856012";
/* Wisdomweb_top */
google_ad_slot = "0578740905";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>


<h1 id='firsthead'>CSS справочник</h1>

<a href="#text"><img style="position:relative;float:left;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;margin-right:12px;" src="http://www.wisdomweb.ru/images/textprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<a href="#border1"><img style="position:relative;float:left;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;margin-right:12px;" src="http://www.wisdomweb.ru/images/borderprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<a href="#background22"><img style="position:relative;float:left;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;" src="http://www.wisdomweb.ru/images/backprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<a href="#anim"><img style="position:relative;float:left;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;margin-top:10px;margin-right:12px;" src="http://www.wisdomweb.ru/images/animprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<a href="#grid"><img style="position:relative;float:left;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;margin-top:10px;margin-right:12px;" src="http://www.wisdomweb.ru/images/alignprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<a href="#table"><img style="position:relative;float:left;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;margin-top:10px;" src="http://www.wisdomweb.ru/images/tablistprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<a href="#misc"><img style="position:relative;clear:both;border:1px #929292 solid;border-bottom-style:none;width:230px;height:148px;margin-top:10px;margin-left:244px" src="http://www.wisdomweb.ru/images/miscprop.jpg" onmouseover="this.style.borderColor='#CD0074';this.style.boxShadow='0px 0px 10px 1px #FFCE00'" onmouseout="this.style.borderColor='#929292';this.style.boxShadow='0px 0px 0px 0px #ffffff'" /></a>
<br style="clear:both"/>


<h1 id='text'>CSS свойства текста</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<tr>
<td><b><a href="font-face.php">@font-face</a></b></td>
<td>Позволяет подключить к веб-страницам произвольные шрифты.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="font.php">font</a></b></td>
<td>Позволяет установить все свойства шрифта (font-family, font-size, font-style, font-variant, font-weight) за одно определение. </td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="font-family.php">font-family</a></b></td>
<td>Позволяет установить шрифт текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="font-size.php">font-size</a></b></td>
<td>Позволяет установить размер текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="color.php">color</a></b></td>
<td>Позволяет установить цвет текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="text-shadow.php">text-shadow</a></b></td>
<td>Позволяет привязать тень (или несколько теней) к тексту элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="text-decoration.php">text-decoration</a></b></td>
<td>Позволяет оформить текст элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="text-align.php">text-align</a></b></td>
<td>Позволяет определить горизонтальное выравнивание текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="letter-spacing.php">letter-spacing</a></b></td>
<td>Позволяет определить расстояние между символами текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="word-spacing.php">word-spacing</a></b></td>
<td>Позволяет определить расстояние между словами текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="line-height.php">line-height</a></b></td>
<td>Позволяет установить высоту строк.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="font-style.php">font-style</a></b></td>
<td>Позволяет установить стиль шрифта элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="font-variant.php">font-variant</a></b></td>
<td>Позволяет отобразить текст элемента капителью.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="font-weight.php">font-weight</a></b></td>
<td>Позволяет установить толщину шрифта.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="text-overflow.php">text-overflow</a></b></td>
<td>Позволяет указать как должен отображаться текст вышедший за пределы границ элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="vertical-align.php">vertical-align</a></b></td>
<td>Позволяет установить вертикальное выравнивание текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="text-transform.php">text-transform</a></b></td>
<td>Позволяет управлять регистром символов в тексте.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="text-indent.php">text-indent</a></b></td>
<td>Позволяет установить величину отступа первого символа текста.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="text-justify.php">text-justify</a></b></td>
<td>Позволяет установить алгоритм выравнивания для свойства "text-align:justify".</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="word-wrap.php">word-wrap</a></b></td>
<td>Позволяет указать должны ли длинные слова, выходящие за пределы родительского элемента, разбиваться и переносится на новую строку или нет.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="white-space.php">white-space</a></b></td>
<td>Позволяет установить как должны оформляться пробелы в тексте элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="quotes.php">quotes</a></b></td>
<td>Позволяет установить как должны оформляться кавычки вставленные тэгом &lt;q&gt;.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="direction.php">direction</a></b></td>
<td>Позволяет установить направление письма текста.</td>
<td>CSS1</td>
</tr>
</table>



<h1 id='grid'>CSS свойства выравнивания</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<tr>
<td><b><a href="height.php">height</a></b></td>
<td>Позволяет установить высоту элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="width.php">width</a></b></td>
<td>Позволяет установить ширину элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="margin.php">margin</a></b></td>
<td>Позволяет установить величину всех внешних отступов за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="margin-top.php">margin-top</a></b></td>
<td>Позволяет установить величину внешнего отступа от верхней части элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="margin-right.php">margin-right</a></b></td>
<td>Позволяет установить величину внешнего отступа от правой части элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="margin-bottom.php">margin-bottom</a></b></td>
<td>Позволяет установить величину внешнего отступа от нижней части элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="margin-left.php">margin-left</a></b></td>
<td>Позволяет установить величину внешнего отступа от левой части элемента. </td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="padding.php">padding</a></b></td>
<td>Позволяет установить величину всех внутреннего отступов за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="padding-top.php">padding-top</a></b></td>
<td>Позволяет установить величину внутреннего отступа от верхней части элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="padding-right.php">padding-right</a></b></td>
<td>Позволяет установить величину внутреннего отступа от правой части элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="padding-bottom.php">padding-bottom</a></b></td>
<td>Позволяет установить величину внутреннего отступа от нижней части элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="padding-left.php">padding-left</a></b></td>
<td>Позволяет установить величину внутреннего отступа от левой части элемента. </td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="float.php">float</a></b></td>
<td>Прижимает элемент к указанной стороне родительского элемента и заставляет последующие за ним элементы страницы "обтекать" его.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="position.php">position</a></b></td>
<td>Позволяет установить метод размещения элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="top.php">top</a></b></td>
<td>Позволяет установить величину отступа от верхней стороны элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="right.php">right</a></b></td>
<td>Позволяет установить величину отступа от правой стороны элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="bottom.php">bottom</a></b></td>
<td>Позволяет установить величину отступа от нижней стороны элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="left.php">left</a></b></td>
<td>Позволяет установить величину отступа от левой стороны элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="clear.php">clear</a></b></td>
<td>Позволяет "очистить" элемент от действия float. </td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="max-height.php">max-height</a></b></td>
<td>Позволяет определить максимальную высоту элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="max-width.php">max-width</a></b></td>
<td>Позволяет определить максимальную ширину элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="min-height.php">min-height</a></b></td>
<td>Позволяет определить минимальную высоту элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="min-width.php">min-width</a></b></td>
<td>Позволяет определить минимальную ширину элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="z-index.php">z-index</a></b></td>
<td>Позволяет установить порядок отображения элементов в случае их наложения друг на друга.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="clip.php">clip</a></b></td>
<td>Позволяет обрезать элемент размещенный абсолютно.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="column-count.php">column-count</a></b></td>
<td>Позволяет разбить на указанное количество столбцов текст элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-gap.php">column-gap</a></b></td>
<td>Позволяет установить величину отступа между столбцами текста.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-width.php">column-width</a></b></td>
<td>Позволяет установить ширину столбцов.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-rule.php">column-rule</a></b></td>
<td>Позволяет установить все свойства оформления разделителя для столбцов текста за одно определение.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-rule-color.php">column-rule-color</a></b></td>
<td>Позволяет установить цвет разделителя.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-rule-style.php">column-rule-style</a></b></td>
<td>Позволяет установить стиль разделителя.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-rule-width.php">column-rule-width</a></b></td>
<td>Позволяет установить ширину разделителя.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="column-span.php">column-span</a></b></td>
<td>Позволяет установить на сколько столбцов должен растягиваться элемент.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="box-align.php">box-align</a></b></td>
<td>Позволяет установить способ выравнивания элементов потомков.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="box-direction.php">box-direction</a></b></td>
<td>Позволяет установить направление отображения элементов потомков.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="box-flex.php">box-flex</a></b></td>
<td>Позволяет установить должны ли элементы потомки быть гибкими в размерах или нет.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="box-ordinal-group.php">box-ordinal-group</a></b></td>
<td>Позволяет установить порядок отображения элементов потомков.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="box-orient.php">box-orient</a></b></td>
<td>Позволяет установить как должен быть ориентирован элемент.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="box-pack.php">box-pack</a></b></td>
<td>Позволяет установить позицию элементов потомков в по горизонтали в горизонтально ориентированных элементах и позицию по вертикали в вертикально ориентированных элементах.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
</table>



<h1 id='background22'>CSS свойства фона</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<td><b><a href="background.php">background</a></b></td>
<td>Позволяет установить все свойства фона за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="background-size.php">background-size</a></b></td>
<td>Позволяет установить размер фонового изображения.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="background-attachment.php">background-attachment</a></b></td>
<td>Позволяет определить должна ли фоновая картинка быть закреплена или должна прокручиваться с остальным содержимым страницы.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="background-color.php">background-color</a></b></td>
<td>Позволяет установить цвет фона элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="background-image.php">background-image</a></b></td>
<td>Позволяет установить фоновую картинку для элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="background-position.php">background-position</a></b></td>
<td>Позволяет установить координаты местоположения фоновой картинки.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="background-repeat.php">background-repeat</a></b></td>
<td>Позволяет установить как должна повторятся фоновая картинка для того, чтобы заполнить фон элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="background-clip.php">background-clip</a></b></td>
<td>Позволяет указывать как должен обрезаться фон элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="background-origin.php">background-origin</a></b></td>
<td>Позволяет задать позицию, от которой будет отсчитываться местоположение фонового изображения.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
</table>

<h1 id='border1'>CSS свойства границ</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<td><b><a href="border.php">border</a></b></td>
<td>Позволяет установить все свойства границ за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-color.php">border-color</a></b></td>
<td>Позволяет определить цвет для всех границ элемента за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-style.php">border-style</a></b></td>
<td>Позволяет определить стиль для всех границ элемента за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-width.php">border-width</a></b></td>
<td>Позволяет установить ширину всех границ элемента за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-radius.php">border-radius</a></b></td>
<td>Позволяет определить форму всех углов элемента за одно определение.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="border-bottom-left-radius.php">border-bottom-left-radius</a></b></td>
<td>Позволяет определить форму нижнего левого угла элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="border-bottom-right-radius.php">border-bottom-right-radius</a></b></td>
<td>Позволяет определить форму нижнего правого угла элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="border-top-left-radius.php">border-top-left-radius</a></b></td>
<td>Позволяет определить форму верхнего левого угла элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="border-top-right-radius.php">border-top-right-radius</a></b></td>
<td>Позволяет определить форму верхнего правого угла элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="border-image.php">border-image</a></b></td>
<td>Позволяет использовать изображение в качестве границы элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="border-top.php">border-top</a></b></td>
<td>Позволяет установить все свойства для верхней границы элемента за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-top-color.php">border-top-color</a></b></td>
<td>Позволяет определить цвет верхней границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-top-style.php">border-top-style</a></b></td>
<td>Позволяет определить стиль верхней границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-top-width.php">border-top-width</a></b></td>
<td>Позволяет определить ширину верхней границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-left.php">border-left</a></b></td>
<td>Позволяет установить все свойства для левой границы элемента за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-left-color.php">border-left-color</a></b></td>
<td>Позволяет определить цвет левой границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-left-style.php">border-left-style</a></b></td>
<td>Позволяет определить стиль левой границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-left-width.php">border-left-width</a></b></td>
<td>Позволяет определить ширину левой границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-bottom.php">border-bottom</a></b></td>
<td>Позволяет установить все свойства нижней границы за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-bottom-color.php">border-bottom-color</a></b></td>
<td>Позволяет определить цвет нижней границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-bottom-style.php">border-bottom-style</a></b></td>
<td>Позволяет определить стиль нижней границы элемента.</td>
</tr>
<tr>
<td><b><a href="border-bottom-width.php">border-bottom-width</a></b></td>
<td>Позволяет определить ширину нижней границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-right.php">border-right</a></b></td>
<td>Позволяет установить все свойства для правой границы элемента за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-right-color.php">border-right-color</a></b></td>
<td>Позволяет определить цвет правой границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-right-style.php">border-right-style</a></b></td>
<td>Позволяет определить стиль правой границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-right-width.php">border-rigth-width</a></b></td>
<td>Позволяет определить ширину правой границы элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="outline.php">outline</a></b></td>
<td>Позволяет установить все свойства внешней границы за одно определение.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="outline-color.php">outline-color</a></b></td>
<td>Позволяет определить цвет внешней границы элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="outline-style.php">outline-style</a></b></td>
<td>Позволяет определить стиль внешней границы элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="outline-width.php">outline-width</a></b></td>
<td>Позволяет определить ширину внешней границы элемента.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="outline-offset.php">outline-offset</a></b></td>
<td>Позволяет установить величину смещения внешней границы от границы элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
</table>

<h1 id='anim'>CSS свойства переходов и анимации</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<tr>
<td><b><a href="keyframes.php">@keyframes</a></b></td>
<td>Блок для определения анимации.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation.php">animation</a></b></td>
<td>Позволяет установить все свойства анимации (<i>кроме animation-play-state</i>) за одно определение.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-name.php">animation-name</a></b></td>
<td>Позволяет установить имя анимации.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-duration.php">animation-duration</a></b></td>
<td>Позволяет указать время выполнения анимации в секундах.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-timing-function.php">animation-timing-function</a></b></td>
<td>Позволяет указать функцию смягчения отвечающую за плавность выполнения анимации.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-delay.php">animation-delay</a></b></td>
<td>Позволяет установить величину задержки перед началом выполнения анимации.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-iteration-count.php">animation-iteration-count</a></b></td>
<td>Позволяет установить количество повторов анимации.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-direction.php">animation-direction</a></b></td>
<td>Позволяет указать должна ли анимация выполняться в обратном порядке или нет.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="animation-play-state.php">animation-play-state</a></b></td>
<td>Позволяет указать должна ли анимация выполняться или быть остановлена.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="transition.php">transition</a></b></td>
<td>Позволяет задать все свойства переходов за одно определение.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="transition-property.php">transition-property</a></b></td>
<td>Позволяет указать CSS свойства, которые будут задействованы для создания перехода.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="transition-duration.php">transition-duration</a></b></td>
<td>Позволяет указать время, в течении которого будет совершен переход.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="transition-timing-function.php">transition-timing-function</a></b></td>
<td>Позволяет указать функцию смягчения отвечающую за плавность выполнения перехода.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="transition-delay.php">transition-delay</a></b></td>
<td>Позволяет установить величину задержки перед началом выполнения перехода.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
</table>



<h1 id='table'>CSS свойства таблиц и списков</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<tr>
<td><b><a href="list-style.php">list-style</a></b></td>
<td>Позволяет определить все свойства списков за одно определение.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="list-style-image.php">list-style-image</a></b></td>
<td>Позволяет установить произвольную картинку вместо маркера списка.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="list-style-position.php">list-style-position</a></b></td>
<td>Позволяет определить где должен отображаться маркер списка. </td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="list-style-type.php">list-style-type</a></b></td>
<td>Позволяет определить вид маркера списка.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="border-collapse.php">border-collapse</a></b></td>
<td>Позволяет установить должны ли границы таблицы и ячеек соединится.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="border-spacing.php">border-spacing</a></b></td>
<td>Позволяет установить расстояние между границами смежных ячеек.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="caption-side.php">caption-side</a></b></td>
<td>Позволяет установить место расположения табличного заголовка. </td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="empty-cells.php">empty-cells</a></b></td>
<td>Позволяет установить как должны отображаться пустые табличные ячейки. </td>
<td>CSS2</td>
</tr>
</table>

<h1 id='misc'>CSS остальные свойства</h1>
<p>Для того, чтобы узнать о желаемом свойстве больше и посмотреть пример с его использованием щелкните на его названии.</p>
<table id="extab" style="margin-left:0px;">
<tr>
<th style="width:27%;">Свойство</th>
<th style="width:61%;">Описание</th>
<th style="width:12%;">Введено в</th>
</tr>
<tr>
<td><b><a href="display.php">display</a></b></td>
<td>Позволяет установить способ отображения элемента.</td>
<td>CSS1</td>
</tr>
<tr>
<td><b><a href="opacity.php">opacity</a></b></td>
<td>Позволяет установить уровень прозрачности элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="appearance.php">appearance</a></b></td>
<td>Позволяет превратить тэг в указанный элемент пользовательского интерфейса.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="resize.php">resize</a></b></td>
<td>Позволяет сделать элемент растягиваемым.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="overflow.php">overflow</a></b></td>
<td>Позволяет указать, что должно случится если содержимое элемента выйдет за его границы.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="visibility.php">visibility</a></b></td>
<td>Позволяет установить должен ли элемент быть видимым.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="cursor.php">cursor</a></b></td>
<td>Позволяет установить вид курсора мыши.</td>
<td>CSS2</td>
</tr>
<tr>
<td><b><a href="transform.php">transform</a></b></td>
<td>Позволяет трансформировать элемент.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="transform-origin.php">transform-origin</a></b></td>
<td>Позволяет изменить местоположение трансформированного элемента.</td>
<td><span style='color:#ff0000;'>CSS3</span></td>
</tr>
<tr>
<td><b><a href="content.php">content</a></b></td>
<td>Позволяет вставлять произвольное содержимое.</td>
<td>CSS2</td>
</tr>
</table>



<br /><br />
<script type="text/javascript">prettyPrint();</script>
<div id="ads2" style="margin-top:30px;margin-bottom:25px;border:0px;padding-top:0px;">
<!-- Google AdSense -->
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4661695310856012";
/* Wisdomweb_bottom */
google_ad_slot = "5717109006";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!-- /Google AdSense -->
</div>

<div class="pn">
<a class="prev" href="http://www.wisdomweb.ru/">&laquo; На главную</a>
</div>
<br />

<!-- Disqus -->
<div id="disqus_thread" class="disq_line"></div>
<script type="text/javascript">
 var disqus_shortname = 'wisdomweb';
(function() {
var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
})();
</script>
<noscript>&#x0412;&#x043A;&#x043B;&#x044E;&#x0447;&#x0438;&#x0442;&#x0435; JavaScript, &#x0447;&#x0442;&#x043E;&#x0431;&#x044B; &#x0432;&#x043E;&#x0441;&#x043F;&#x043E;&#x043B;&#x044C;&#x0437;&#x043E;&#x0432;&#x0430;&#x0442;&#x044C;&#x0441;&#x044F; <a href="http://disqus.com/?ref_noscript"> &#x0441;&#x0438;&#x0441;&#x0442;&#x0435;&#x043C;&#x043E;&#x0439; &#x043A;&#x043E;&#x043C;&#x043C;&#x0435;&#x043D;&#x0442;&#x0438;&#x0440;&#x043E;&#x0432;&#x0430;&#x043D;&#x0438;&#x044F; Disqus.</a></noscript>
<!-- /Disqus --> 
<br />
</div>
<footer>
<div class="footer">
<p style="font-size:0.8em;"> <span style="font-size:1.1em;"><b>Wisdomweb.ru</b> &copy; 2013.</span> <br />Все права защищены. Любое использование материалов данного сайта без разрешения администрации запрещено.<br/>
<span style="font-size:0.9em;">Онлайн учебники по HTML, HTML5, CSS, JavaScript, AJAX, HDOM, jQuery. </span><br />
<div id="licounter">
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t41.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
</div>
 </p>
</div>
</footer>
</div>
</div>
<script type="text/javascript" src="http://www.wisdomweb.ru/allscript.js"></script>
</body>
</html>
