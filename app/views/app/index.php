<!DOCTYPE html>
<html>
<head>
<title>Hello</title>
<link rel="stylesheet" href="css/editor.css" type="text/css" />
<link rel="stylesheet" href="css/stylesheet_red.css" type="text/css" id="stl" />
<link rel="stylesheet" href="http://jqueryui.com/themes/base/jquery.ui.all.css" type="text/css" />
</head>

<body>
<div id=wrap>
    <div id=main-head>
     >WIZIA



    <a href=# class=myButton style="float:right;">Pr&eacute;f&eacute;rences</a>
    <a href=# class="myButton main_button_exit" style="float:right;margin-right:20px;">Quitter</a>

    </div>

<div style="" id=left_menu>    <a href=# class="myButton main_button_page">Pages</a>
    <a href=# class="myButton main_button_news">News</a>
    <a href=# class="myButton main_button_mobile">Mobile</a>
    <a href=# class="myButton main_button_mobile">Catalogue</a>
        <a href=# class="myButtonBuy main_button_buy">Commander</a>
     </div>
<div style="display:hide;" id=sub-left-menu > SUB </div>
<!--    <div id=main-toolbar-left  >
      <div class=gray_box >
      <h2></h2>
      <ul>
        <li><a href=# class=page-tree>Voir les pages</a></li>

      </ul>
      <h2>News</h2>

      <p>Gestion des news </p>
      <h2>Pages</h2>
      </div>
      <div class=option_box >

      <p>Nom de domaine</p>
      <a href=# >Commander un nom de domaine</a>
      <p>Modules</p>
      </div>
    </div>-->
    <div id=main-editor>
      <!--  <div id=block-toolbar>
            <div id=widget-main-toolbar>      <li><a href=# class=page-tree>Voir les pages</a></li>
            <ul id=widget-toolbar>
                <li><a href=# id=widget-element-text><img src="http://cdn2.iconfinder.com/data/icons/oxygen/128x128/apps/kwrite.png" width=40 />&nbsp;Widget TEXT</a></li>
                <li><a href=# id=widget-element-html><img src="http://cdn2.iconfinder.com/data/icons/oxygen/128x128/apps/kwrite.png" width=40 />Widget HTML</a></li>
                <li><a href=# id=widget-element-video>Widget VIDEO</a></li>
                <li><a href=# id=widget-element-code>Widget CODE</a></li>
                <li><a href=# id=widget-element-audio>Widget AUDIO</a></li>
                <li><a href=# id=widget-element-gallery>Widget GALLERY</a></li>
                <li><a href=# id=widget-element-columns>Widget 2COLS</a></li>
		        <li><a href=# id=widget-element-custom>Widget Custom</a></li>
            </ul>
            </div>
            <div id=notification-label>Notification</div>
        </div>
        <div id=toolbar></div>
        <a href=# id=idd>Switch CSS</a> -->
        <!-- EDITOR -->
  <!--      <div id=website-preview-editor>

             <div id=page>
             HELO EDITOR
             </div>
        </div>-->
        <!-- @EDITOR -->
    </div>
    <div id=footer>     <div id=jstemplates></div>      </div>


    </div>
</body>
<style>
	#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
	#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
	#sortable </style>

</html>


<!-- -->

    <script src="lib/jquery-1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>

    <script src="lib/underscore-1.js"></script>
    <script src="lib/backbone.js"></script>
    <script src="lib/backbone-localstorage.js"></script>
    <script src="js/views/editor.js"></script>



<script type="text/javascript">
// the CSS file is chosen  according to the positive or negative value of this variable
var plusmin = 1;

$(document).ready(function() {

  // when click on the element with id="idd"

  $('#idd').click(function(){
    plusmin *= -1;        // change the polarity of "plusmin" var
    var stl = plusmin>0 ? 'themes/stylesheet_red.css' : 'themes/stylesheet_yellow.css';     // sets the css file, according to plusmin

    // change the css file of the tag with id="stl" and rel="stylesheet"
    $('#stl[rel=stylesheet]').attr('href', stl);
  });





});

</script>

<!------ JS Templates ----------->
<? include("templates/main.php"); ?>